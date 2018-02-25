<?php

class Index extends Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function category($id)
    {
        if ($id != '' && is_numeric($id)) {
            $id_isset = $this->model->getIssetCategory();
            if (sizeof($id_isset) > 0) {
                $CountNews = $this->model->getCountNews();
                if ($CountNews[0]['count'] > 0) {
                    Model::sessionInit();
                    $UserID = Model::sessionGet('userId');
                    $getNews = $this->model->getNews();
                    $getNewsVip = $this->model->getNewsVip();
                    $getCategory =$this->model->getCategory();
                    $getTopNews =$this->model->getTopNews();

                    $data = array('getNews' => $getNews, 'getNewsVip' => $getNewsVip,
                        'getCategory' => $getCategory,'getTopNews' => $getTopNews);

                    $this->view('index/index', $data);
                } else {
                    $detect = new Mobile_Detect;
                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

                    $getsuggestNews = $this->model->getsuggestNews();
                    $getCategory =$this->model->getCategory();
                    $data = array('getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

                    if($deviceType=='computer') {
                        $this->view('index/index', $data);
                    }
                    else {
                        $this->view('index/indexMobile', $data);
                    }
                }
            } else {
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
        } else {
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

    function index()
    {
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        $getPrice = $this->model->getPrices();
        $getNews = $this->model->getNews();
        $sliders =$this->model->sliders();
        $getCategory =$this->model->getCategory();
        $getsuggestNews = $this->model->getsuggestNews();
        $getCategory =$this->model->getCategory();
        $getNewsVip = $this->model->getNewsVip();

        $data = array( 'getNewsVip' => $getNewsVip,'sliders' => $sliders,'getPrice' => $getPrice,'getNews' => $getNews,'getCategory' => $getCategory,'getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

        if($deviceType=='computer') {
            $this->view('index/index', $data);
        }
        else if($deviceType=='tablet') {
            $this->view('index/index', $data);
        }
        else {
            $this->view('index/indexMobile', $data);
        }
//        $data = array();
    }

    public function LoginRegular()
    {
        $this->model->regularLogin($_POST);
    }
}

?>