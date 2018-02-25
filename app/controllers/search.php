<?php

class Search extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $bestSellingAlbum = $this->model->getBestSellingAlbum();
        $bestSellingTrack = $this->model->getBestSellingTrack();
        $Find = $this->model->Find();
        $data = array('bestSellingAlbum' => $bestSellingAlbum,'bestSellingTrack' => $bestSellingTrack,'Find' => $Find);
        $this->view('search/index', $data);
    }
}

?>