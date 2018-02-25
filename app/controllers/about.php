<?php

class About extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $getCategory =$this->model->getCategory();
        $data = array('getCategory' => $getCategory);

        $this->view('about/index', $data);
    }
}

?>