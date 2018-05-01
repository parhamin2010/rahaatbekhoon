<?php

class model_search extends Model
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

    function Find()
    {
        $search = $_POST['getInfo'];

        $sql = "SELECT * FROM tbl_artist
                WHERE s_status=1 AND s_name LIKE '%" . $search . "%'";
        $result['findArtist'] = $this->doSelect($sql);

        $sql = "SELECT * FROM tbl_product a
                LEFT JOIN tbl_album b
                ON a.album_id = b.a_id
                LEFT JOIN tbl_artist c
                ON b.artist_id = c.s_id
                LEFT JOIN tbl_images d
                ON a.images_id = d.i_id
                WHERE a.p_name LIKE '%" . $search . "%'";
        $result['findProduct'] = $this->doSelect($sql);

        $sql = "SELECT * FROM tbl_album a
                LEFT JOIN tbl_artist c
                ON a.artist_id = c.s_id
                WHERE  a.a_name LIKE '%" . $search . "%'";
        $result['findAlbum'] = $this->doSelect($sql);

        return $result;
    }

    function SongInfo($p_id, $id = '')
    {
        if ($id != '') {
            $sql = "SELECT * FROM tbl_product a 
                    LEFT JOIN tbl_album b 
                    ON a.album_id = b.a_id
                    LEFT JOIN tbl_artist c 
                    ON b.artist_id = c.s_id
                    LEFT JOIN tbl_images d 
                    ON a.images_id = d.i_id
                    LEFT JOIN tbl_order e 
                    ON a.p_id = e.product_id AND e.user_Id=?
                    WHERE a.p_id = ? ";
            $param = array($id, $p_id);
        } else {
            $sql = "SELECT * FROM tbl_product a 
                    LEFT JOIN tbl_album b 
                    ON a.album_id = b.a_id
                    LEFT JOIN tbl_artist c 
                    ON b.artist_id = c.s_id
                    LEFT JOIN tbl_images d 
                    ON a.images_id = d.i_id
                    WHERE a.p_id = ? ";
            $param = array($p_id);
        }

        $result = $this->doSelect($sql, $param, 1);
        return $result;
    }

    function AlbumInfo($a_id, $id = '')
    {
        if ($id != '') {
            $sql = "SELECT * FROM tbl_album b 
                    LEFT JOIN tbl_artist c 
                    ON b.artist_id = c.s_id
                    LEFT JOIN tbl_order e 
                    ON b.a_id = e.album_id AND e.user_Id=?
                    WHERE b.a_id = ? ";
            $param = array($id, $a_id);
        } else {
            $sql = "SELECT * FROM tbl_album b 
                    LEFT JOIN tbl_artist c 
                    ON b.artist_id = c.s_id
                    WHERE b.a_id = ? ";
            $param = array($a_id);
        }
        $result = $this->doSelect($sql, $param, 1);
        return $result;
    }

}

?>