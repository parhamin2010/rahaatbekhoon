<?php

class model_user extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    function getCategory()
    {
        $sql = "SELECT * FROM tbl_category WHERE status=1";
        $data = self::doSelect($sql);
        return $data;
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

    function logout()
    {
        self::sessionInit();
        unset($_SESSION['userId']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['level']);
    }

    function getinfoUser($userId)
    {
        $sql = "SELECT * FROM tbl_user WHERE `id`=?";
        $params = array($userId);
        $result = $this->doSelect($sql, $params);
        return $result;
    }

    function getFavorite($id)
    {
        $sql = "SELECT product_id FROM tbl_favorite WHERE user_id = ? ";
        $param = array($id);
        $result = $this->doSelect($sql, $param);
        $pro = array();
        foreach ($result as $res) {
            array_push($pro, $res['product_id']);
        }

        $all_products = array();
        foreach ($pro as $product) {
            if (preg_match('/^(track-)/', $product)) {
                $product = str_replace("track-", "", $product);
                $songInfo = $this->songInfo($product);
            } else {
                $product = str_replace("album-", "", $product);
                $songInfo = $this->AlbumInfo($product);
            }

            array_push($all_products, $songInfo);
        }
        $result['all_products'] = $all_products;
        return $result;
    }

    function deleteFav($post, $userId)
    {
        $sql = "DELETE FROM tbl_favorite WHERE product_id=? AND user_id=?";
        $value = array($post['type'] . "-" . $post['product_id'], $userId);
        $this->doQuery($sql, $value);
        echo "delete";
    }
    
    function submitEdit($post, $check)
    {
        if ($post['password-new']) {
            $name = self::Check_Param($post['name']);
            $password = self::Check_Param(self::hash_value_sha1(self::hash_value_md5($post['password-new'])));
            $sql = "UPDATE tbl_user SET name=?,password=? WHERE id=?";
            $params = [$name, $password, $check];
            $this->doQuery($sql, $params);
        } else {
            $sql = "UPDATE tbl_user SET name=? WHERE id=?";
            $params = [$post['name'], $check];
            $this->doQuery($sql, $params);
        }
        echo "ok";
    }
}

?>