<?php

class model_about extends Model
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

    function getSingersLogo()
    {
        $sql = "SELECT * FROM tbl_artist WHERE s_status=1 AND s_logo <> '0' ORDER BY rand()";
        $result = $this->doSelect($sql);
        return $result;
    }

    function getBestSellingAlbum()
    {
        $sql = "SELECT a_price_off,a_id,a_cover,a_name,s_name,s_id
                FROM tbl_album a 
                LEFT JOIN tbl_artist  b 
                ON a.artist_id=b.s_id 
                WHERE a_status=1 AND a_price_real <> 0  ORDER BY a_download DESC LIMIT 6";
        $result = $this->doSelect($sql);
        return $result;
    }

}


?>