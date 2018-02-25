<?php

class User extends Controller
{
    public $checkLogin = '';
    public $checkArtist = '';

    function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLogin = Model::sessionGet('userId');
        $this->checkArtist = Model::sessionGet('artistId');
        if ($this->checkLogin == false) {
            header("Location:".URL);
        }
        if ($this->checkArtist != 0) {
            header("Location:".URL);
        }
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

    function profile()
    {
        Model::sessionInit();
        $UserID = Model::sessionGet('userId');
        $infoUser = $this->model->getinfoUser($UserID);
        $getCategory =$this->model->getCategory();

        $data = array('infoUser'=>$infoUser,'getCategory' => $getCategory);
        $this->view('user/index', $data);
    }

    function edit()
    {
        Model::sessionInit();
        $UserID = Model::sessionGet('userId');
        $infoUser = $this->model->getinfoUser($UserID);
        $getCategory =$this->model->getCategory();

        $data = array('infoUser'=>$infoUser,'getCategory' => $getCategory);
        $this->view('user/edit', $data);
    }

    function deleteFavorite()
    {
        Model::sessionInit();
        $UserID = Model::sessionGet('userId');
        $this->model->deleteFav($_POST,$UserID);
    }

    function logout()
    {
        $this->model->logout();
        echo "<script>history.back();</script>";
    }

    function submitEdit()
    {
        Model::sessionInit();
        $check = Model::sessionGet('userId');
        $this->model->submitEdit($_POST,$check);

    }
}
?>