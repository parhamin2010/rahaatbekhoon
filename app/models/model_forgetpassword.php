<?php

class model_forgetpassword extends Model
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

    function sendEmailForget($form)
    {
        $email=$form['email'];
        $sql = "SELECT * FROM tbl_user WHERE `email`=?";
        $params = array($email);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($email)) {
            $code = $this->hash_value_crc32($result[0]['email']);
            $content = file_get_contents('public/library/PHPMailer/contents-forget-password.php');
            $content = str_replace("##USERNAME##", $result[0]['name'], $content);
            $content = str_replace("##CODE##", $code, $content);
            $content = str_replace("##SITE##", URL, $content);
            $subject = 'بازنشانی کلمه عبور';
            $sendStatus = Model::SendEmail($result[0]['email'], $result[0]['name'], $content, $subject);
            if ($sendStatus == "ok") {
                $sql = "UPDATE tbl_user SET reset_code=? WHERE email=?";
                $value = array($code, $result[0]['email']);
                $this->doQuery($sql, $value);
                echo "ok";
            } else {
                echo "error";
            }
        } else {
            echo "error";
        }
    }
}

?>