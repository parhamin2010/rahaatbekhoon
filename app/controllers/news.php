<?php
    
    class News extends Controller
    {
        function __construct()
        {
            parent::__construct();
        }
        
        function index($id = '')
        {

            if ($id != '' && is_numeric($id)) {
                $detect = new Mobile_Detect;
                $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

                $id_isset = $this->model->getIssetNews($id);
                if (sizeof($id_isset) > 0) {
                    Model::sessionInit();
                    $UserID = Model::sessionGet('userId');
                    $infoUser = $this->model->getinfoUser($UserID);
                    $getNews = $this->model->getNews($id);
                    $RateStatus = $this->model->getRating($UserID, "track-" . $id);
                    $comment = $this->model->getComment($id);
                    $iconfavCheck = $this->model->iconfavCheck($UserID, "track-" . $id);
                    $sameNews = $this->model->sameNews($id);
                    $getCategory = $this->model->getCategory();
                    $getsuggestNews = $this->model->getsuggestNews();

                    $data = array('infoUser'     => $infoUser, 'getNews' => $getNews, 'RateStatus' => $RateStatus,
                                  'iconfavCheck' => $iconfavCheck, 'comment' => $comment, 'sameNews' => $sameNews,
                                  'getCategory'  => $getCategory, 'getsuggestNews' => $getsuggestNews, 'idNews' => $id);

                    $this->view('news/index', $data);
                    if($deviceType=='computer') {
                        $this->view('news/index', $data);
                    }
                    else if($deviceType=='tablet') {
                        $this->view('news/index', $data);
                    }
                    else {
                        $this->view('news/indexMobile', $data);
                    }
                } else {
                    $detect = new Mobile_Detect;
                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
                    
                    $getsuggestNews = $this->model->getsuggestNews();
                    $getCategory = $this->model->getCategory();
                    $data = array('getsuggestNews' => $getsuggestNews, 'getCategory' => $getCategory);
                    
                    if ($deviceType == 'computer') {
                        $this->view('notfound/index', $data);
                    } else {
                        $this->view('notfound/indexMobile', $data);
                    }
                }
            } else {
                if ($id == '' && !is_numeric($id)) {
                    $CountNews = $this->model->getCountNews();
                    if ($CountNews[0]['count'] > 0) {
                        $getNews = $this->model->getNewsAll();
                        $getCountNewsPage = $this->model->getCountNewsPage();
                        $getCategory = $this->model->getCategory();
                        
                        $data = array('getNews'     => $getNews,
                                      'getCountNewsPage' => $getCountNewsPage,
                                      'getCategory' => $getCategory);
                        
                        $this->view('news/indexAll', $data);
                    } else {
                        $detect = new Mobile_Detect;
                        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
                        
                        $getsuggestNews = $this->model->getsuggestNews();
                        $getCategory = $this->model->getCategory();
                        $data = array('getsuggestNews' => $getsuggestNews, 'getCategory' => $getCategory);
                        
                        if ($deviceType == 'computer') {
                            $this->view('topic/noNews', $data);
                        } else {
                            $this->view('topic/noNewsMobile', $data);
                        }
                    }
                } else {
                    $detect = new Mobile_Detect;
                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
                    
                    $getsuggestNews = $this->model->getsuggestNews();
                    $getCategory = $this->model->getCategory();
                    $data = array('getsuggestNews' => $getsuggestNews, 'getCategory' => $getCategory);
                    
                    if ($deviceType == 'computer') {
                        $this->view('notfound/index', $data);
                    } else {
                        $this->view('notfound/indexMobile', $data);
                    }
                }
            }
        }
        
        function addRatingAjax()
        {
            $this->model->addRating($_POST);
        }
        
        function Addtofavorite()
        {
            Model::sessionInit();
            $UserID = Model::sessionGet('userId');
            $this->model->addfavorite($_POST, $UserID);
        }
        
        function sendComment()
        {
            $this->model->sendCommentSave($_POST);
        }
    
        public function GetItems()
        {
            $this->model->getItems($_POST);
        }
        
    }

?>