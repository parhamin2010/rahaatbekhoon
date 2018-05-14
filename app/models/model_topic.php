<?php

class model_topic extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getsuggestNews()
    {
        $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1
                ORDER BY rand() DESC LIMIT 4";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getTopNews($id)
    {
        $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY a.view DESC LIMIT 6";
        $param = array($id);
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function getCategory()
    {
        $sql = "SELECT * FROM tbl_category WHERE status=1";
        $data = self::doSelect($sql);
        return $data;
    }

    function getIssetCategory($id)
    {
        $sql = "SELECT id FROM tbl_category WHERE id= ?";
        $param = array($id);
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function getCountNews($id)
    {
        $sql = "SELECT count(*) as count FROM tbl_news WHERE cat_id= ?";
        $param = array($id);
        $result = $this->doSelect($sql, $param);
        return $result;
    }

    function getNews($id)
    {
        $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY a.n_id DESC LIMIT 4";
        $params = array($id);
        $result = $this->doSelect($sql, $params);
        return $result;
    }
    
    
    
    function getItems($post)
    {
        if (isset($post)) {
            $page_number = filter_var($post["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);
            
            $position = ($page_number * ITEM_PER_PAGE);
            
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY a.n_id DESC LIMIT $position, " . ITEM_PER_PAGE;
            $params = array($post["id"]);
            $results = $this->doSelect($sql, $params);
            
            foreach ($results as $result) {
                echo '<div class="masonry-gallery__item">
                                                <div class="image">
                                                    <span class="image__mask"></span>

                                                    <a href="news/' . $result['n_id'] . '"
                                                       title="' . $result['title'] . '" class="image__linker">
                                                        <img src="' . $result['image'] . '"
                                                             onerror="this.src=\'public/images/default.png\'"
                                                             width="284" height="180" class="image__img wp-post-image"
                                                             alt="' . $result['title'] . '"> </a>


                                                    <a href="topic/category/' . $result['cat_id'] . '"
                                                       title="' . $result['name'] . '"
                                                       class="image__badge">' . $result['name'] . '</a>
                                                    <span class="image__fav">
                                                            <span class="popularity">
                                                              <span class="popularity__likes">
                                                                <i class="icon-view"></i>
                                                                <span style="margin-top: -5px;margin-left: 5px;"
                                                                      class="popularity__likes--num">' . $result['view'] . '</span>
                                                              </span>
                                                            </span>
                                                   </span>
                                                </div>

                                                <a href="news/' . $result['n_id'] . '"
                                                   title="' . $result['title'] . '"
                                                   style="padding: 20px 15px;font-size: 13px;text-align: right !important;"
                                                   class="masonry-gallery__item__title">' . self::summary($result['title'],60) . '</a>

                                                <div class="masonry-gallery__item__detail" style="float: left">
                                        <span class="past-time">' . $result['date_created'] . '</span>
                                                    <i class="icon-clock-icon" style="margin-right: 5px"></i>
                                                </div>
                                            </div>';
                
                
            }
        }
    }
    
    function getCountNewsPage($id)
    {
        $get_total_rows = 0;
        $sql = "SELECT COUNT(*) AS count FROM tbl_news WHERE cat_id=?";
        $params = array($id);
        $result = $this->doSelect($sql, $params);
        $get_total_rows = $result[0]['count'];
        $total_pages = ceil($get_total_rows / ITEM_PER_PAGE);
        
        return $total_pages;
    }
    
    function getNewsVip($id)
    {
        $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY a.n_id DESC LIMIT 36";
        $params = array($id);
        $result = $this->doSelect($sql, $params);
        return $result;
    }

}

?>