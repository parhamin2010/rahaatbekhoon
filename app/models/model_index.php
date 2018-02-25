<?php

class model_index extends Model
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

    function getPrices()
    {
        $result = @file_get_contents("http://www.tgju.info/call.php?format=json&t=724365&token=34ttxceroxgpjwdgi6e83roszu353or7sk0qxehlbyavvobduq");
        $result=json_decode($result, true);
        return $result;
    }

    function getNews()
    {
        $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
                LEFT JOIN tbl_category b
                ON a.cat_id=b.id
                LEFT JOIN tbl_images c
                ON a.image_id=c.i_id
                WHERE a.status=1
                ORDER BY a.date_created DESC LIMIT 30";
        $result = $this->doSelect($sql);
        return $result;
    }

    function sliders()
    {
        $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                LEFT JOIN tbl_images c 
                ON a.image_id=c.i_id
                WHERE a.status=1 AND a.vip=1
                ORDER BY a.date_created DESC LIMIT 5";
        $result = $this->doSelect($sql);
        return $result;
    }

    function regularLogin($form)
    {
        $username = self::Check_Param($form['username']);
        $password = self::Check_Param(self::hash_value_sha1(self::hash_value_md5($form['password'])));

        $sql = "SELECT * FROM tbl_user WHERE `email`=? AND `password`=?";
        $params = array($username, $password);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($username) and !empty($password)) {
            Model::sessionInit();
            Model::sessionSet('userId', $result[0]['id']);
            Model::sessionSet('name', $result[0]['name']);
            Model::sessionSet('email', $result[0]['email']);
            Model::sessionSet('level', $result[0]['level']);
            echo 'ok';
        } else {
            echo 'notfound';
        }
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

    function getTopNews()
    {
        $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                LEFT JOIN tbl_images c 
                ON a.image_id=c.i_id
                WHERE a.status=1
                ORDER BY a.view DESC LIMIT 6";
//        $param = array($id);
        $result = $this->doSelect($sql);
        return $result;
    }



    function getIssetCategory()
    {
        $sql = "SELECT id FROM tbl_category";
//        $param = array($id);
        $result = $this->doSelect($sql);
        return $result;
    }

    function getCountNews($id)
    {
        $sql = "SELECT count(*) as count FROM tbl_news";
        $param = array($id);
        $result = $this->doSelect($sql);
        return $result;
    }

//    function getNews()
//    {
//        $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
//                LEFT JOIN tbl_category b
//                ON a.cat_id=b.id
//                LEFT JOIN tbl_images c
//                ON a.image_id=c.i_id
//                WHERE a.status=1 AND a.cat_id=?
//                ORDER BY a.n_id DESC LIMIT 36";
//        $result = $this->doSelect($sql);
//        return $result;
//    }

    function getNewsVip()
    {
        $sql = "SELECT a.*,b.name,c.i_image,c.i_id FROM tbl_news a
                LEFT JOIN tbl_category b 
                ON a.cat_id=b.id
                LEFT JOIN tbl_images c 
                ON a.image_id=c.i_id
                WHERE a.status=1 AND a.vip=1 
                ORDER BY a.n_id DESC LIMIT 36";
//        $params = array($id);
        $result = $this->doSelect($sql);
        return $result;
    }
}

?>