<?php

class model_contact extends Model
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

    function getinfoUser($userId)
    {
        $sql = "SELECT * FROM tbl_user WHERE `id`=?";
        $params = array($userId);
        $result = $this->doSelect($sql, $params);
        return $result;
    }

    function sendMessageSave($post)
    {
        $sql = "INSERT INTO tbl_contact (co_title,co_user_name,co_user_email,co_text,co_date) VALUES (?,?,?,?,?)";
        $value = array($post['title'], $post['name'], $post['email'], $post['text'], time());
        $this->doQuery($sql, $value);
        echo "ok";
    }
}

?>