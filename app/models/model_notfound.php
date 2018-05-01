<?php

class model_notfound extends Model
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
}


?>