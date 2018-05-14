<?php
    
    class model_news extends Model
    {
        
        function __construct()
        {
            parent::__construct();
        }
        
        function getsuggestNews($id)
        {
            $sql1 = "SELECT cat_id FROM tbl_news WHERE n_id=?";
            $result1 = $this->doSelect($sql1, array($id), 1);
    
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY RAND() LIMIT 4";
            $params = array($result1['cat_id']);
            $result = $this->doSelect($sql, $params);
    
            return $result;
        }
    
        function calViewer($id,$ip)
        {
            $sql = "SELECT * FROM `tbl_view` WHERE `news_id` = ? AND `ip` = ? AND `date` = ?";
            $params = array($id, $ip, self::jaliliDate());
            $res = $this->doSelect($sql, $params);
        
            if (sizeof($res) == 0) {
                $sql = "INSERT INTO tbl_view (news_id,ip,date) VALUES (?,?,?)";
                $value = array($id, $ip, self::jaliliDate());
                $this->doQuery($sql, $value);
            
                $sql = "UPDATE tbl_news SET view=view+1 WHERE n_id=?";
                $param = array($id);
                $this->doQuery($sql, $param);
            }
        }
        
        function getCountNews()
        {
            $sql = "SELECT count(*) as count FROM tbl_news";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getCategory()
        {
            $sql = "SELECT * FROM tbl_category WHERE status=1";
            $data = self::doSelect($sql);
            
            return $data;
        }
        
        function getIssetNews($id)
        {
            $sql = "SELECT n_id FROM tbl_news WHERE n_id= ?";
            $param = array($id);
            $result = $this->doSelect($sql, $param);
            
            return $result;
        }
        
        function getNews($id)
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.n_id=? limit 4";
            $result = $this->doSelect($sql, array($id));
            
            $image_id = @$result[0]['image_id'];
            $img_id = explode(',', $image_id);
            $all_images = array();
            foreach ($img_id as $imgID) {
                $imageInfo = $this->imageInfo($imgID);
                array_push($all_images, $imageInfo);
            }
            $result['all_images'] = $all_images;
            
            return $result;
        }
        
        function getNewsFullText($id)
        {
            $sql = "SELECT link FROM tbl_news WHERE status=1 AND n_id=?";
            $res = $this->doSelect($sql, array($id));
            
            $result=@file_get_contents(URL."public/library/fulltextRss/makefulltextfeed.php?url=".@$res[0]['link']."&format=json");
            return $result;
        }
        
        function imageInfo($imgID)
        {
            $sql = "SELECT * FROM tbl_images WHERE i_id=?";
            $result = $this->doSelect($sql, array($imgID), 1);
            
            return $result;
        }
    
        function sendCommentSave($post)
        {
            $p_id = str_replace("track-", "", $post['ProductID']);
            $sql = "SELECT * FROM `tbl_comments` WHERE `cm_user_id` = ? AND `p_id` = ? AND `cm_date` = ? AND `type` = ?";
            $params = array($post['user_id'], $p_id, time(), "news");
            $res = $this->doSelect($sql, $params);
        
            if (sizeof($res) > 0) {
                echo "isset";
            } else {
                $sql = "INSERT INTO tbl_comments (p_id,cm_user_id,cm_text,cm_date,type) VALUES (?,?,?,?,?)";
                $value = array($p_id, $post['user_id'], $post['message'], time(), "news");
                $this->doQuery($sql, $value);
                echo "ok";
            }
        }
    
        function getComment($idproduct)
        {
            $sql = "SELECT image,email,cm_date,name,cm_text
                FROM tbl_comments a 
                LEFT JOIN tbl_user b 
                ON a.cm_user_id=b.id 
                WHERE a.p_id=? AND a.cm_status=1 ORDER BY cm_id DESC LIMIT 20";
            $data = array($idproduct);
            $result = $this->doSelect($sql, $data);
            return $result;
        }
        
        function addRating($post)
        {
            if ($post['rate'] <= 5.0 && is_numeric($post['user_id']) != 0) {
                $sql = "SELECT * FROM `tbl_score` WHERE `user_id` = ? AND `rate_id` = ?";
                $params = array($post['user_id'], $post['rate_id']);
                $res = $this->doSelect($sql, $params);
                
                if (sizeof($res) > 0 and !empty($post['user_id'])) {
                    $sql = "UPDATE tbl_score SET rate=? WHERE user_id=? AND rate_id=?";
                    $value = array($post['rate'], $post['user_id'], $post['rate_id']);
                    $this->doQuery($sql, $value);
                } else {
                    $sql = "INSERT INTO tbl_score (user_id,rate_id,rate) VALUES (?,?,?)";
                    $value = array($post['user_id'], $post['rate_id'], $post['rate']);
                    $this->doQuery($sql, $value);
                }
            }
        }
        
        function getRating($userId, $rate_id, $type = "html")
        {
            $sql = "SELECT * FROM `tbl_score` WHERE `rate_id` = ?";
            $params = array($rate_id);
            $results = $this->doSelect($sql, $params);
            
            if (sizeof($results) == 0) {
                $rate_times = 0;
                $rate_value = 0;
                $rate_bg = 0;
            } else {
                foreach ($results as $result) {
                    $rate_db[] = $result;
                    $sum_rates[] = $result['rate'];
                }
                $rate_times = count($rate_db);
                $sum_rates = array_sum($sum_rates);
                $rate_value = $sum_rates / $rate_times;
                $rate_bg = (($rate_value) / 5) * 100;
            }
            
            if ($type == "html") {
                $res = $this->UserStatusRate($userId, $rate_id);
                if ($res['count'] > 0) {
                    $class = "size-3";
                } else {
                    $class = "userChoose size-3";
                }
                $html = '<div class="Fr-star ' . $class . '" title="' . round($rate_value, 2) . ' / 5" data-rating="' . $rate_value . '">';
                $html .= '<div class="Fr-star-value" style="width: ' . $rate_bg . '%"></div>';
                $html .= '<div class="Fr-star-bg"></div>';
                $html .= '</div>';
                $html .= '<div class="rate-count" data-type="rate_times" title="تعداد امتیاز دهندگان" >' . $rate_times . '</div>';
                
                return $html;
            } else if ($type == "rate_value") {
                return $rate_value;
            } else if ($type == "rate_percentage") {
                return $rate_bg;
            } else if ($type == "rate_times") {
                return $rate_times;
            }
            
            return 0;
        }
        
        function UserStatusRate($user, $rate_id)
        {
            $sql = "SELECT COUNT(*) AS count FROM `tbl_score` WHERE `user_id` = ? AND `rate_id` = ?";
            $result = $this->doSelect($sql, array($user, $rate_id), 1);
            
            return $result;
        }
        
        function getinfoUser($userId)
        {
            $sql = "SELECT * FROM tbl_user WHERE `id`=?";
            $params = array($userId);
            $result = $this->doSelect($sql, $params);
            
            return $result;
        }
        
        function addfavorite($post, $userId)
        {
            $sql = "SELECT * FROM `tbl_favorite` WHERE `product_id` = ? AND `user_id` = ?";
            $params = array($post['product_id'], $userId);
            $res = $this->doSelect($sql, $params);
            
            if (sizeof($res) > 0 and !empty($userId)) {
                $sql = "DELETE FROM tbl_favorite WHERE product_id=? AND user_id=?";
                $value = array($post['product_id'], $userId);
                $this->doQuery($sql, $value);
                echo "delete";
            } else {
                $sql = "INSERT INTO tbl_favorite (user_id,product_id) VALUES (?,?)";
                $value = array($userId, $post['product_id']);
                $this->doQuery($sql, $value);
                echo "add";
            }
        }
        
        function iconfavCheck($userId, $pID)
        {
            $sql = "SELECT * FROM tbl_favorite WHERE `user_Id`=? AND `product_id`=?";
            $params = array($userId, $pID);
            $result = $this->doSelect($sql, $params);
            
            return $result;
        }
        
        function sameNews($id)
        {
            $sql1 = "SELECT cat_id FROM tbl_news WHERE n_id=?";
            $result1 = $this->doSelect($sql1, array($id), 1);
            
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1 AND a.cat_id=?
                ORDER BY RAND() LIMIT 5";
            $params = array($result1['cat_id']);
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
                WHERE a.status=1
                ORDER BY a.n_id DESC LIMIT $position, " . ITEM_PER_PAGE;
                $results = $this->doSelect($sql);
                
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
                                                              <span class="popularity__comments">
                                                                <i class="icon-comment"></i>
                                                                <span style="margin-top: -5px;margin-left: 5px;"
                                                                      class="popularity__comments--num">۰</span>
                                                              </span>
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

                                                <div class="masonry-gallery__item__detail" style="float: left;width:100%">
                                        <span class="past-time">' . $result['date_created'] . '</span>
                                                    <i class="icon-clock-icon" style="margin-right: 5px"></i>
                                                </div>
                                            </div>';
                    
                    
                }
            }
        }
        
        function getCountNewsPage()
        {
            $get_total_rows = 0;
            $sql = "SELECT COUNT(*) AS count FROM tbl_news";
            $result = $this->doSelect($sql);
            $get_total_rows = $result[0]['count'];
            $total_pages = ceil($get_total_rows / ITEM_PER_PAGE);
            
            return $total_pages;
        }
        
        function getNewsAll()
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.status=1
                ORDER BY a.n_id DESC LIMIT 4";
            $result = $this->doSelect($sql);
            
            return $result;
        }
    }

?>