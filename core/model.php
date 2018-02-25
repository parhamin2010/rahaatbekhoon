<?php

class Model
{
    public static $conn = '';

    function __construct()
    {
        $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        self::$conn = new PDO('mysql:host=' . SERVER_NAME . ';dbname=' . PREFIX . DATABASE, USERNAME, PASSWORD, $attr);
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if (function_exists('jdate') == false) {
            require('public/library/jdf/jdf.php');
        }
    }

    function Encrypt($val)
    {
        $iv = mcrypt_create_iv(mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC), MCRYPT_DEV_URANDOM);
        $encrypted = base64_encode($iv . mcrypt_encrypt(MCRYPT_RIJNDAEL_128, hash('sha256', KEY, true), $val, MCRYPT_MODE_CBC, $iv));
        return $encrypted;
    }

    function Decrypt($val)
    {
        $data = base64_decode($val);
        $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
        $decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_128, hash('sha256', KEY, true), substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)), MCRYPT_MODE_CBC, $iv), "\0");
        return $decrypted;
    }

    function getEncodedVideoString($type, $file)
    {
        return 'data:video/' . $type . ';base64,' . base64_encode(file_get_contents($file));
    }

    function hash_value_md5($value)
    {
        return md5($value);
    }

    function hash_value_sha1($value)
    {
        return sha1($value);
    }

    function hash_value_crc32($value)
    {
        return "hdf" . crc32($value);
    }

    function Check_Param($val)
    {
        $value = addslashes($val);
        $string1 = htmlspecialchars($value);
        $string2 = strip_tags($string1);
        return $string2;
    }

    public static function summary($str, $limit = 100, $strip = false)
    {
        $str = ($strip == true) ? strip_tags($str) : $str;
        if (strlen($str) > $limit) {
            $str = substr($str, 0, $limit - 3);
            return (substr($str, 0, strrpos($str, ' ')) . ' ...');
        }
        return trim($str);
    }

    function Check_Get_Param($val)
    {
        $value = addslashes($val);
        $string1 = htmlspecialchars($value);
        $string2 = strip_tags($string1);
        $string3 = intval($string2);
        return $string3;
    }

    function doSelect($sql, $values = array(), $fetch = '', $fetchStyle = PDO::FETCH_ASSOC)
    {
        $stmt = self::$conn->prepare($sql);
        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
        if ($fetch == '') {
            $result = $stmt->fetchAll($fetchStyle);
        } else {
            $result = $stmt->fetch($fetchStyle);
        }
        return $result;
    }

    function doQuery($sql, $values = array())
    {
        $stmt = self::$conn->prepare($sql);

        foreach ($values as $key => $value) {
            $stmt->bindValue($key + 1, $value);
        }
        $stmt->execute();
    }

    public static function sessionInit()
    {
        @session_start();
    }

    public static function sessionSet($name, $value)
    {
        $_SESSION[$name] = $value;
    }

    public static function sessionGet($name)
    {
        if (isset($_SESSION[$name])) {
            return $_SESSION[$name];
        } else {
            return false;
        }
    }

    public static function jaliliDate($format = 'Y/n/j')
    {
        $date = jdate($format);
        return $date;
    }

    public static function jaliliToMiladi($jalili, $format = '/')
    {
        $jalili = explode('/', $jalili);
        $year = $jalili[0];
        $month = $jalili[1];
        $day = $jalili[2];
        $date = jalali_to_gregorian($year, $month, $day);
        $date = implode($format, $date);
        $date = new DateTime($date);
        $date = $date->format('Y/m/d');

        return $date;
    }

    public static function days_away_to($dt)
    {
        $mkt_diff = time() - strtotime($dt);
        return floor($mkt_diff / 60 / 60 / 24); # 0 = today, -1 = yesterday, 1 = tomorrow
    }

    public static function MiladiTojalili($miladi, $format = '/')
    {
        $miladi = explode('/', $miladi);
        $year = $miladi[0];
        $month = $miladi[1];
        $day = $miladi[2];
        $date = gregorian_to_jalali($year, $month, $day);
        $date = implode($format, $date);
        return $date;
    }

    public function googleLogin($user)
    {
        $email = $user['email'];
        $picture = $user['picture'];
        $name = $user['name'];
        if ($user['gender'] == "male") {
            $gender = 1;
        } else {
            $gender = 0;
        }
        $sql = "SELECT * FROM tbl_user WHERE `email`=?";
        $params = array($email);
        $result = $this->doSelect($sql, $params);

        if (sizeof($result) > 0 and !empty($email)) {
            self::sessionInit();
            self::sessionSet('userId', $result[0]['id']);
            self::sessionSet('name', $result[0]['name']);
            self::sessionSet('email', $result[0]['email']);

        } else {
            $sql = "INSERT INTO tbl_user (email,name,image,registery_date) VALUES (?,?,?,?)";
            $value = array($email, $name, $picture, self::jaliliDate());
            $this->doQuery($sql, $value);
            $userId = self::$conn->lastInsertId();

            self::sessionInit();
            self::sessionSet('userId', $userId);
            self::sessionSet('name', $name);
            self::sessionSet('email', $email);
        }
    }

    public static function SendEmail($emailto, $name, $content, $subject)
    {
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->CharSet = 'UTF-8';
        $mail->Username = "info.unix.team@gmail.com";
        $mail->Password = "0923133585";
        $mail->ContentType = 'text/html';
        $mail->setFrom('info.unix.team@gmail.com', 'هدفون');
        $mail->addAddress($emailto, $name);
        $mail->Subject = $subject;
        $mail->AltBody = 'متاسفانه برنامه شما از این ایمیل پشتیبانی نمی کند، برای دیدن آن، لطفا از برنامه دیگری استفاده نمائید';
        $mail->msgHTML($content, dirname(__FILE__));
        if (!$mail->send()) {
            return $mail->ErrorInfo;
        } else {
            return "ok";
        }
    }

    public static function time_elapsed_string($datetime, $full = false)
    {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);

        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;

        $string = array(
            'y' => 'سال',
            'm' => 'ماه',
            'w' => 'هفته',
            'd' => 'روز',
            'h' => 'ساعت',
            'i' => 'دقیقه',
            's' => 'ثانیه',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? '' : '');
            } else {
                unset($string[$k]);
            }
        }

        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string) . ' قبل' : 'هم اکنون';
    }
}

?>