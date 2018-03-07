<?php

class adminPanel extends Controller
{
    public $checkLoginAdmin = '';

    function __construct()
    {
        parent::__construct();
        Model::sessionInit();
        $this->checkLoginAdmin = Model::sessionGet('adminId');
    }

    function index()
    {
        $detect = new Mobile_Detect;
        $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

        $getsuggestNews = $this->model->getsuggestNews();
        $getCategory =$this->model->getCategoryNotFound();
        $data = array('getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

        if($deviceType=='computer') {
            $this->view('notfound/index', $data);
        }
        else {
            $this->view('notfound/indexMobile', $data);
        }
    }

    function login()
    {
        $this->view('admin/login');
    }

    function loginCheck()
    {
        $this->model->Login($_POST);
    }

    function logout()
    {
        $this->model->logout();
        echo "<script>window.location='" . URL . "adminpanel/login';</script>";
    }

    function dashboard()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $infoAdmin = $this->model->getinfoAdmin($AdminID);
            $orderStat = $this->model->getStat();
            $bannerTop = $this->model->bannerTop();
            $userGetlatest = $this->model->userGetlatest();
            $newComment = $this->model->getnewComment();
            $latesrNews = $this->model->latesrNews();
            $newContact = $this->model->getnewContact();
            $data = array('latesrNews' => $latesrNews,'orderStat' => $orderStat, 'bannerTop' => $bannerTop,
                'userGetlatest' => $userGetlatest,'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                'newContact' => $newContact
            );
            $this->view('admin/index', $data);
        }
    }

    function support()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $infoAdmin = $this->model->getinfoAdmin($AdminID);
            $ContactMessages = $this->model->getContactMessages();
            $newComment = $this->model->getnewComment();
            $newContact = $this->model->getnewContact();
            $data = array('ContactMessages' => $ContactMessages, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                'newContact' => $newContact);
            $this->view('admin/support', $data);
        }
    }

    function readMessage()
    {
        $this->model->readMessage($_POST);
    }

    function news($func = '', $attrId = 0)
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            if ($func != '' && $func == "newsAdd") {
                Model::sessionInit();
                $AdminID = Model::sessionGet('adminId');
                $infoAdmin = $this->model->getinfoAdmin($AdminID);
                $newComment = $this->model->getnewComment();
                $newContact = $this->model->getnewContact();
                $category = $this->model->getCategory();
                $data = array('category' => $category, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                    'newContact' => $newContact);
                $this->view('admin/news-add', $data);
            } else if ($func != '' && is_numeric($attrId) && $func == "newsEdit") {
                $id_isset = $this->model->getIssetNews($attrId);
                if (sizeof($id_isset) > 0) {
                    Model::sessionInit();
                    $AdminID = Model::sessionGet('adminId');
                    $infoAdmin = $this->model->getinfoAdmin($AdminID);
                    $newsInfoEdit = $this->model->getNewsInfoEdit($attrId);
                    $newComment = $this->model->getnewComment();
                    $newContact = $this->model->getnewContact();
                    $category = $this->model->getCategory();
                    $data = array('newsInfo' => $newsInfoEdit, 'attrId' => $attrId,
                        'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                        'category' => $category, 'newContact' => $newContact);
                    $this->view('admin/news-edit', $data);
                } else {
                    $detect = new Mobile_Detect;
                    $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

                    $getsuggestNews = $this->model->getsuggestNews();
                    $getCategory =$this->model->getCategoryNotFound();
                    $data = array('getsuggestNews' => $getsuggestNews,'getCategory' => $getCategory);

                    if($deviceType=='computer') {
                        $this->view('notfound/index', $data);
                    }
                    else {
                        $this->view('notfound/indexMobile', $data);
                    }
                }
            }  else {
                Model::sessionInit();
                unset($_SESSION["attrId"]);
                $AdminID = Model::sessionGet('adminId');
                $infoAdmin = $this->model->getinfoAdmin($AdminID);
                $newsInfo = $this->model->getnewsInfo();
                $newComment = $this->model->getnewComment();
                $newContact = $this->model->getnewContact();
                $data = array('news' => $newsInfo, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                    'newContact' => $newContact);
                $this->view('admin/news', $data);
            }
        }
    }

    function addNews()
    {
        $this->model->addnews($_POST);
    }

    function editNews()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            if (isset($_POST['titleNews'])) {
                $this->model->editNews($_POST);
            }
        }
    }

    function delnews()
    {
        $this->model->delNews($_POST);
    }

    function users()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $infoAdmin = $this->model->getinfoAdmin($AdminID);
            $userGetlist = $this->model->userGetlist();
            $newComment = $this->model->getnewComment();
            $newContact = $this->model->getnewContact();
            $data = array('users' => $userGetlist, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                'newContact' => $newContact);
            $this->view('admin/users', $data);
        }
    }

    function comments()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $infoAdmin = $this->model->getinfoAdmin($AdminID);
            $comments = $this->model->getComments();
            $newComment = $this->model->getnewComment();
            $newContact = $this->model->getnewContact();
            $data = array('comments' => $comments, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                'newContact' => $newContact);
            $this->view('admin/comments', $data);
        }
    }

    function submitComment()
    {
        $this->model->submitComments($_POST);
    }

    function delComment()
    {
        $this->model->delComments($_POST);
    }

    function categories($func = '', $attrId = 0)
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            if ($func != '' && $func == "add") {
                Model::sessionInit();
                $AdminID = Model::sessionGet('adminId');
                $infoAdmin = $this->model->getinfoAdmin($AdminID);
                $newComment = $this->model->getnewComment();
                $newContact = $this->model->getnewContact();
                $data = array('infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                    'newContact' => $newContact);
                $this->view('admin/categories-add', $data);
            } else if ($func != '' && is_numeric($attrId) && $func == "edit") {
                Model::sessionInit();
                $AdminID = Model::sessionGet('adminId');
                $infoAdmin = $this->model->getinfoAdmin($AdminID);
                $styleInfoEdit = $this->model->getstyleInfoEdit($attrId);
                $newComment = $this->model->getnewComment();
                $newContact = $this->model->getnewContact();
                $data = array('style' => $styleInfoEdit, 'attrId' => $attrId, 'infoAdmin' => $infoAdmin,
                    'newComment' => $newComment, 'newContact' => $newContact);
                $this->view('admin/categories-edit', $data);
            } else {
                Model::sessionInit();
                $AdminID = Model::sessionGet('adminId');
                $infoAdmin = $this->model->getinfoAdmin($AdminID);
                $styleInfo = $this->model->getstyleInfo();
                $newComment = $this->model->getnewComment();
                $newContact = $this->model->getnewContact();
                $data = array('style' => $styleInfo, 'infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                    'newContact' => $newContact);
                $this->view('admin/categories', $data);
            }
        }
    }

    function addcategory()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            if (isset($_POST['name'])) {
                $this->model->addCategories($_POST['name'], $_POST['category'], $_POST['icon']);
            }
        }
    }

    function editcategory()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            if (isset($_POST['name'])) {
                $this->model->editCategories($_POST['name'], $_POST['category'], $_POST['icon'], $_POST['status'], $_POST['id']);
            }
        }
    }

    function delcategory()
    {
        $this->model->delcategories($_POST);
    }

    function settings()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $infoAdmin = $this->model->getinfoAdmin($AdminID);
            $newComment = $this->model->getnewComment();
            $newContact = $this->model->getnewContact();
            $data = array('infoAdmin' => $infoAdmin, 'newComment' => $newComment,
                'newContact' => $newContact);
            $this->view('admin/settings', $data);
        }
    }

    function settingsEdit()
    {
        if ($this->checkLoginAdmin == false) {
            header("Location:" . URL . "adminpanel/login");
        } else {
            Model::sessionInit();
            $AdminID = Model::sessionGet('adminId');
            $this->model->settingsEdit($_POST, $AdminID);
        }
    }

}