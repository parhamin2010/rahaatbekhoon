<?php
    /* /usr/bin/php -q /home/sajadhaj/public_html/channelStatistics/checkStatus.php */
    ignore_user_abort(1); // run script in background
    set_time_limit(0); // run script forever
    ini_set("log_errors", 0);
    require_once 'core/config.php';
    //require_once 'public/library/medoo/jdf.php';
    //date_default_timezone_set('Asia/Tehran');
    
    $link=array(
        "servername" => SERVER_NAME,
        "dbname" => PREFIX . DATABASE,
        "username" => USERNAME,
        "password" => PASSWORD,
    );
    $attr = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4');
    $server_name=$link['servername'];
    $db_name=$link['dbname'];
    $dsn="mysql:host=$server_name;dbname=$db_name";
    
    
    $connect = new PDO($dsn,$link['username'],$link['password'],$attr);
    
    
    $sql="SELECT link,cat_id FROM tbl_rss where status=1";
    $res = $connect ->  query($sql);
    
    while($rows=$res -> fetch(PDO::FETCH_ASSOC)){
        $data = simplexml_load_file($rows['link']);

        foreach ($data->channel->item AS $item) {
            
            $sql="SELECT COUNT(*) FROM `tbl_news` WHERE `title`=?";
            $result= $connect -> prepare($sql);
            $result->bindValue(1,$item->title);
            $result->execute();
            $num=$result->fetchColumn();
            
            if ($num==0) {
                $sql="INSERT INTO `tbl_news` (title,image_id ,subtitle,description) VALUES (?,?,?,?)";
                $result= $connect -> prepare($sql);
                $result->bindValue(1,$item->title);
                $result->bindValue(2,$item->enclosure['url']);
                $result->bindValue(3,$item->link);
                $result->bindValue(4,$item->description);
                $query = $result->execute();
            }
        }
    }
    
    file_put_contents("lastUpdateNews.txt", jdate('l, Y/n/d'));

?>