<?php
    
    class model_adminpanel extends Model
    {
        
        function __construct()
        {
            parent::__construct();
        }
        
        function getCategoryNotFound()
        {
            $sql = "SELECT * FROM tbl_category WHERE status=1";
            $data = self::doSelect($sql);
            
            return $data;
        }
        
        function getsuggestNews()
        {
            $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                LEFT JOIN tbl_images c 
                ON a.image_id=c.i_id
                WHERE a.status=1
                ORDER BY rand() DESC LIMIT 4";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function bannerTop()
        {
            $sql = "SELECT count(*) AS Count FROM tbl_user WHERE level=2";
            $result['userCount'] = $this->doSelect($sql);
            
            $sql = "SELECT count(*) AS Count FROM tbl_view";
            $result['artistCount'] = $this->doSelect($sql);
            
            $sql = "SELECT count(*) AS Count FROM tbl_mags";
            $result['vipNews'] = $this->doSelect($sql);
            
            $sql = "SELECT count(*) AS Count FROM tbl_news";
            $result['newsCount'] = $this->doSelect($sql);
            
            return $result;
        }
        
        function logout()
        {
            self::sessionInit();
            unset($_SESSION['adminId']);
            unset($_SESSION['adminName']);
            unset($_SESSION['adminEmail']);
        }
        
        function getinfoAdmin($adminId)
        {
            $sql = "SELECT * FROM tbl_user WHERE `id`=? AND level=1";
            $params = array($adminId);
            $result = $this->doSelect($sql, $params);
            
            return $result;
        }
        
        function Login($form)
        {
            $username = self::Check_Param($form['username']);
            $password = self::Check_Param(self::hash_value_sha1(self::hash_value_md5($form['password'])));
            
            $sql = "SELECT * FROM tbl_user WHERE `email`=? AND `password`=? AND level=1";
            $params = array($username, $password);
            $result = $this->doSelect($sql, $params);
            
            if (sizeof($result) > 0 and !empty($username) and !empty($password)) {
                Model::sessionInit();
                Model::sessionSet('adminId', $result[0]['id']);
                Model::sessionSet('adminName', $result[0]['name']);
                Model::sessionSet('adminEmail', $result[0]['email']);
                echo 'ok';
            } else {
                echo 'notfound';
            }
        }
        
        function userGetlatest()
        {
            $sql = "SELECT name,image,registery_date,email FROM tbl_user
                WHERE level!=1
                ORDER BY id DESC LIMIT 8";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function userGetlist()
        {
            $sql = "SELECT * FROM tbl_user ORDER BY id DESC";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getStat()
        {
            $today_date = date('Y/m/d');
            $last_week_time = time() - (9 * 24 * 3600);
            $last_week_date = date('Y/m/d', $last_week_time);
            $dates = $this->getRange($last_week_date, $today_date);
            $orders = $this->getOrder();
            
            $orderStat = array();
            foreach ($dates as $date) {
                foreach ($orders as $order) {
                    $date_miladi = self::MiladiTojalili($date);
                    
                    if ($date_miladi == $order['date_created']) {
                        $orderStat[ $date_miladi ] = @$orderStat[ $date_miladi ] + 1;
                    } else {
                        $orderStat[ $date_miladi ] = @$orderStat[ $date_miladi ];
                    }
                }
            }
            
            return $orderStat;
        }
        
        function getOrder()
        {
            $sql = "SELECT date_created FROM tbl_news ORDER BY date_created ASC";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getRange($startDate, $lastDate)
        {
            $dates = array();
            $current = strtotime($startDate);
            $last = strtotime($lastDate);
            
            while ($current <= $last) {
                $dates[] = date('Y/m/d', $current);
                $current = strtotime('+1 day', $current);
            }
            
            return $dates;
        }
        
        function readMessage($post)
        {
            $sql = "UPDATE tbl_contact SET co_status=1 WHERE co_id=?";
            $params = [$post['id']];
            $this->doQuery($sql, $params);
            echo "ok";
        }
        
        function getContactMessages()
        {
            $sql = "SELECT * FROM tbl_contact ORDER BY co_id DESC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getnewComment()
        {
            $sql = "SELECT count(*) AS num FROM tbl_comments WHERE cm_status=0";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getnewContact()
        {
            $sql = "SELECT count(*) AS num FROM tbl_contact WHERE co_status=0";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getComments()
        {
            $sql = "SELECT c.*,name,id,n.n_id,n.title
                FROM tbl_comments c
                LEFT JOIN tbl_user u 
                ON c.cm_user_id=u.id 
                LEFT JOIN tbl_news n 
                ON c.p_id=n.n_id
                ORDER BY c.cm_id DESC";
            
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function submitComments($post)
        {
            $sql3 = "UPDATE tbl_comments SET cm_status=1 WHERE cm_id=?";
            $params1 = [$post['id']];
            $this->doQuery($sql3, $params1);
            echo "ok";
        }
        
        function delComments($post)
        {
            $sql3 = "DELETE FROM tbl_comments WHERE cm_id=?";
            $params1 = [$post['id']];
            $this->doQuery($sql3, $params1);
            echo "ok";
        }
        
        function latesrNews()
        {
            $sql = "SELECT a.title,a.n_id,b.name,b.id,a.date_created FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                ORDER BY a.n_id DESC LIMIT 10 ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getnewsInfo()
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                ORDER BY a.n_id DESC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getmagsInfo()
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                ORDER BY a.n_id DESC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getRssInfo()
        {
            $sql = "SELECT a.*,b.name FROM tbl_rss a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                ORDER BY a.r_id DESC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function getMagsList()
        {
            $sql = "SELECT a.*,b.name FROM tbl_mags a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                ORDER BY a.r_id DESC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function GetNews($id)
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.n_id=?
                ORDER BY a.n_id DESC";
            $result = $this->doSelect($sql, array($id));
            
            return $result;
        }
        
        function getIssetNews($id)
        {
            $sql = "SELECT n_id FROM tbl_news WHERE n_id= ?";
            $param = array($id);
            $result = $this->doSelect($sql, $param);
            
            return $result;
        }
        
        function editArtist($post)
        {
            $dir = "public/images/singers/";
            $dirLogo = "public/images/footer/";
            if (isset($_FILES["image"]["name"]) && isset($_FILES["logo"]["name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);
                move_uploaded_file($_FILES["logo"]["tmp_name"], $dirLogo . $_FILES["logo"]["name"]);
                $sql3 = "UPDATE tbl_artist SET s_name=?, s_status=?, bio=?, s_img=?, s_logo=?  WHERE s_id=?";
                $params = [$post['artist'], $post['status'], $post['bioName'], $_FILES["image"]["name"], $_FILES["logo"]["name"], $post['id']];
            } else if (isset($_FILES["image"]["name"])) {
                move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);
                $sql3 = "UPDATE tbl_artist SET s_name=?, s_status=?, bio=?, s_img=?  WHERE s_id=?";
                $params = [$post['artist'], $post['status'], $post['bioName'], $_FILES["image"]["name"], $post['id']];
            } else if (isset($_FILES["logo"]["name"])) {
                move_uploaded_file($_FILES["logo"]["tmp_name"], $dirLogo . $_FILES["logo"]["name"]);
                $sql3 = "UPDATE tbl_artist SET s_name=?, s_status=?, bio=?, s_logo=?  WHERE s_id=?";
                $params = [$post['artist'], $post['status'], $post['bioName'], $_FILES["logo"]["name"], $post['id']];
            } else {
                $sql3 = "UPDATE tbl_artist SET s_name=?, s_status=?, bio=?  WHERE s_id=?";
                $params = [$post['artist'], $post['status'], $post['bioName'], $post['id']];
            }
            $this->doQuery($sql3, $params);
            echo "ok";
        }
        
        function getCategory()
        {
            $sql = "SELECT id,name,main_cat FROM tbl_category WHERE status=1 ORDER BY  name ASC ";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function addnews($post)
        {
            $sql2 = "INSERT INTO tbl_rss (title	,link ,cat_id) VALUES (?,?,?)";
            $params = [$post['titleNews'], $post['linkNews'], $post['categoryNews']];
            $this->doQuery($sql2, $params);
            echo "ok";
        }
        
        function addmags($post)
        {
            $sql2 = "INSERT INTO tbl_mags (title,link ,cat_id) VALUES (?,?,?)";
            $params = [$post['titleNews'], $post['linkNews'], $post['categoryNews']];
            $this->doQuery($sql2, $params);
            echo "ok";
        }
        
        function getNewsInfoEdit($attrId)
        {
            $sql = "SELECT a.*,b.name FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                WHERE a.n_id=?
                ORDER BY a.n_id DESC";
            $param = array($attrId);
            
            $result = $this->doSelect($sql, $param);
            
            return $result;
        }
        
        function editNews($post)
        {
            if (isset($_FILES["image"]["name"])) {
                $dir = "public/images/news/";
                move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);
                
                $sql = "INSERT INTO tbl_images (i_image,i_status) VALUES (?,1)";
                $value = array($_FILES["image"]["name"]);
                $this->doQuery($sql, $value);
                $imgId = Model::$conn->lastInsertId();
                
                $sql3 = "UPDATE tbl_news SET cat_id=?, title=?, image=? , 
                     description=? ,tag=?  WHERE n_id=?";
                $params = [$post['categoryNews'], $post['titleNews'],
                    $imgId, htmlspecialchars($post['descNews']), $post['tagNews'], $post['id']];
            } else {
                $sql3 = "UPDATE tbl_news SET cat_id=?, title=?,
                     description=?  ,tag=?  WHERE n_id=?";
                $params = [$post['categoryNews'], $post['titleNews'],
                    htmlspecialchars($post['descNews']), $post['tagNews'], $post['id']];
            }
            $this->doQuery($sql3, $params);
            echo "ok";
        }
        
        function delNews($post)
        {
            $sql = "DELETE FROM tbl_news WHERE n_id =?";
            $params = [$post['id']];
            $this->doQuery($sql, $params);
            
            $sql = "DELETE FROM tbl_images WHERE i_id =?";
            $params = [$post['image']];
            $this->doQuery($sql, $params);
            
            unlink("public/images/news/" . $post['imageName']);
            echo "ok";
        }
        
        function getstyleInfo()
        {
            $sql = "SELECT a.*,COUNT(b.cat_id) AS count FROM tbl_category a 
                    LEFT JOIN tbl_news b
                    ON a.id=b.cat_id
                    GROUP BY a.id
                    ORDER BY a.id DESC";
            
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function addCategories($name, $category, $icon)
        {
            $sql = "SELECT * FROM tbl_category WHERE name=? and main_cat=?";
            $param = array($name, $category);
            $result = $this->doSelect($sql, $param);
            
            if (sizeof($result) > 0) {
                echo "error";
            } else {
                $sql2 = "INSERT INTO tbl_category (name,icon,main_cat,link,status) VALUES (?,?,?,?,?)";
                $params = [$name, $icon, $category, $name, "1"];
                $this->doQuery($sql2, $params);
                echo "ok";
            }
        }
        
        function getstyleInfoEdit($attrId)
        {
            $sql = "SELECT * FROM tbl_category WHERE id=? ";
            $param = array($attrId);
            
            $result = $this->doSelect($sql, $param);
            
            return $result;
        }
        
        function editCategories($name, $category, $icon, $status, $id)
        {
            $sql3 = "UPDATE tbl_category SET name=?, icon=?, main_cat=?, status=?, link=?  WHERE id=?";
            $params1 = [$name, $icon, $category, $status, $name, $id];
            $this->doQuery($sql3, $params1);
            echo "ok";
        }
        
        function delcategories($post)
        {
            $sql3 = "DELETE FROM tbl_category WHERE id=?";
            $params1 = [$post['id']];
            $this->doQuery($sql3, $params1);
            echo "ok";
        }
        
        function addArtists($post)
        {
            $dir = "public/images/singers/";
            $dirLogo = "public/images/footer/";
            $sql = "SELECT * FROM tbl_artist WHERE s_name=?";
            $param = array($post['artist']);
            $result = $this->doSelect($sql, $param);
            
            if (sizeof($result) > 0) {
                echo "error";
            } else {
                if (isset($_FILES["image"]["name"]) && isset($_FILES["logo"]["name"])) {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);
                    move_uploaded_file($_FILES["logo"]["tmp_name"], $dirLogo . $_FILES["logo"]["name"]);
                    $sql3 = "INSERT INTO tbl_artist (s_name,s_img,s_logo,bio,s_status) VALUES (?,?,?,?,?)";
                    $params = [$post['artist'], $_FILES["image"]["name"], $_FILES["logo"]["name"], $post['bioName'], $post['status']];
                } else {
                    move_uploaded_file($_FILES["image"]["tmp_name"], $dir . $_FILES["image"]["name"]);
                    $sql3 = "INSERT INTO tbl_artist (s_name,s_img,bio,s_status) VALUES (?,?,?,?)";
                    $params = [$post['artist'], $_FILES["image"]["name"], $post['bioName'], $post['status']];
                }
                $this->doQuery($sql3, $params);
                echo "ok";
            }
        }
        
        function getSingersLogo()
        {
            $sql = "SELECT * FROM tbl_artist WHERE s_status=1 AND s_logo <> '0' ORDER BY rand()";
            $result = $this->doSelect($sql);
            
            return $result;
        }
        
        function settingsEdit($post, $id)
        {
            $pass = self::Check_Param(self::hash_value_sha1(self::hash_value_md5($post['passNew'])));
            $sql = "UPDATE tbl_user SET password=? WHERE id=?";
            $params = [$pass, $id];
            $this->doQuery($sql, $params);
            echo "ok";
        }
    }
