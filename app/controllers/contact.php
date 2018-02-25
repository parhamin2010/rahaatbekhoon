<?php

class Contact extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        $getCategory =$this->model->getCategory();
        $data = array('getCategory' => $getCategory);

        if($deviceType=='computer') {
            $this->view('contact/index', $data);
        }
        else {
            $this->view('contact/indexMobile', $data);
        }
    }

    function sendMessage()
    {
        $this->model->sendMessageSave($_POST);
    }

}
?>