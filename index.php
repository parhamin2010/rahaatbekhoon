<?php
    ignore_user_abort(1); // run script in background
    set_time_limit(0); // run script forever
    ini_set("log_errors", 0);
    error_reporting(E_ERROR | E_PARSE);
    require_once('core/raahatbekhon.php');
    require_once('core/controller.php');
    require_once('core/model.php');
    require_once('core/config.php');
    require_once('public/library/google/autoload.php');
    require_once('public/library/PHPMailer/class.phpmailer.php');
    require_once('public/library/PHPMailer/PHPMailerAutoload.php');
    require_once('public/library/mp3trim/phpmp3.php');
    require_once('public/library/MobileDetect/Mobile_Detect.php');
    require_once('public/library/rss/rss_feed.php');
    
    new RaahatBekhon;
?>