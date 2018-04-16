<?php

class Topic extends Controller
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

    function category($id = '')
    {
        if ($id != '' && is_numeric($id)) {
            $id_isset = $this->model->getIssetCategory($id);
            if (sizeof($id_isset) > 0) {
                $CountNews = $this->model->getCountNews($id);
                if ($CountNews[0]['count'] > 0) {
                    Model::sessionInit();
                    $UserID = Model::sessionGet('userId');
                    $getNews = $this->model->getNews($id);
                    $getCountNewsPage = $this->model->getCountNewsPage($id);
                    $getNewsVip = $this->model->getNewsVip($id);
                    $getCategory =$this->model->getCategory();
                    $getTopNews =$this->model->getTopNews($id);

                    $data = array('getNews' => $getNews, 'getNewsVip' => $getNewsVip,
                                  'getCountNewsPage' => $getCountNewsPage, 'idNews' => $id,
                                  'getCategory' => $getCategory,'getTopNews' => $getTopNews);

                    $this->view('topic/index', $data);
                } else {
                    $detect = new Mobile_Detect;
                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

                    $getsuggestNews = $this->model->getsuggestNews();
                    $getCategory = $this->model->getCategory();
                    $data = array('getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

                    if($deviceType=='computer') {
                        $this->view('topic/noNews', $data);
                    }
                    else {
                        $this->view('topic/noNewsMobile', $data);
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
    
    public function GetItems()
    {
        $this->model->getItems($_POST);
    }

    function addRatingAjax()
    {
        $this->model->addRating($_POST);
    }

    function downloadTrack()
    {
        $this->model->downloadTrack($_POST);
    }

    function Addtofavorite()
    {
        Model::sessionInit();
        $UserID = Model::sessionGet('userId');
        $this->model->addfavorite($_POST, $UserID);
    }

    function buyTrack()
    {
        Model::sessionInit();
        $userId = Model::sessionGet('userId');
        $this->model->buyTrackCheck($_POST, $userId);
    }

    function sendGift()
    {
        Model::sessionInit();
        $name = Model::sessionGet('name');
        $email = Model::sessionGet('email');
        $this->model->sendGiftEmail($_POST, $name, $email);
    }

    function sendComment()
    {
        $this->model->sendCommentSave($_POST);
    }

}

?>