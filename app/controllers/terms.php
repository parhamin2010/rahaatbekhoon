<?php

class Terms extends controller
{
    function __construct()
    {
        parent::__construct();
    }
    function  index()
    {
        $bestSellingAlbum = $this->model->getBestSellingAlbum();
        $singerLogo = $this->model->getSingersLogo();
        $bestSellingTrack = $this->model->getBestSellingTrack();
        $data = array('singerLogo' => $singerLogo,'bestSellingAlbum' => $bestSellingAlbum,'bestSellingTrack' => $bestSellingTrack);
        $this->view('terms/index', $data);
    }
}
?>