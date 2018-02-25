<?php

class Register extends Controller
{
    public $checkLogin = '';

    function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin = Model::sessionGet('userId');
        if ($this->checkLogin == true) {
            echo "<script>history.back();</script>";
        }
    }

    function index()
    {
        $getCategory =$this->model->getCategory();
        $data = array('getCategory' => $getCategory);
        $this->view('register/index',$data);
    }

    function submitData()
    {
        $this->model->addUser($_POST);
        Model::sessionInit();
        $check = Model::sessionGet('userId');

        if ($check == false) {
            return 'error';
        } else {
            return 'ok';
        }
    }

    function checkEmail()
    {
        $this->model->checkEmailValidate($_POST);
    }

}

?>