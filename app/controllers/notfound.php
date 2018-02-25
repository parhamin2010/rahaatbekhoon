<?php

class notfound extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        $getsuggestNews = $this->model->getsuggestNews();
        $getCategory =$this->model->getCategory();
        $data = array('getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

        if($deviceType=='computer') {
            $this->view('notfound/index', $data);
        }
        else {
            $this->view('notfound/indexMobile', $data);
        }
    }
}

?>