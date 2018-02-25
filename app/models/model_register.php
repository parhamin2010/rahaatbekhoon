<?php

class model_register extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {

    }

    function getCategory()
    {
        $sql = "SELECT * FROM tbl_category WHERE status=1";
        $data = self::doSelect($sql);
        return $data;
    }

    function addUser($form)
    {
        $email = self::Check_Param($form['email']);
        $name = self::Check_Param($form['name']);
        $password = self::Check_Param(self::hash_value_sha1(self::hash_value_md5($form['password'])));

        $sql = "SELECT * FROM tbl_user WHERE `email`=?";
        $params = array($email);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($email)) {
            Model::sessionInit();
            Model::sessionSet('userId', $result[0]['id']);
            Model::sessionSet('name', $result[0]['name']);
            Model::sessionSet('email', $result[0]['email']);
            return "ok";
        } else {
            $url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim(  $result[0]['email'] ) ) ) . "?d=identicon&s=50&r=x";
            $sql = "INSERT INTO tbl_user (email,password,name,image,level,registery_date) VALUES (?,?,?,?,?,?)";
            $value = array($email,$password, $name,$url,2, self::jaliliDate());
            $this->doQuery($sql, $value);

            $userId = self::$conn->lastInsertId();
            Model::sessionInit();
            Model::sessionSet('userId', $userId);
            Model::sessionSet('name', $name);
            Model::sessionSet('email', $email);
            return "ok";
        }
    }

    function checkEmailValidate($form)
    {
        $email = $form['user_email'];

        $sql = "SELECT * FROM tbl_user WHERE `email`=?";
        $params = array($email);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($email)) {
            echo "error";
        } else {
            echo "ok";
        }
    }
}

?>