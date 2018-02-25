<?php

class Forgetpassword extends Controller
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
        $this->view('forgetpassword/index');
    }

    function submitsendEmail()
    {
        $this->model->sendEmailForget($_POST);
    }

}

?>