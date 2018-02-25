<?php

class Controller
{
    function __construct()
    {
        date_default_timezone_set("Asia/Tehran");
        if (isset($_GET['code'])) {
            $client = new Google_Client();
            $model = new Model;
            $client->setClientId(CLIENT_ID);
            $client->setClientSecret(CLIENT_SECRET);
            $client->setRedirectUri(URL);
            $client->addScope("email");
            $client->addScope("profile");
            $client->authenticate($_GET['code']);
            $client->getAccessToken();
            $service = new Google_Service_Oauth2($client);
            $user = $service->userinfo->get();
            $model->googleLogin($user);
            echo "<script>history.back();</script>";
//            echo "<script>location.reload();</script>";
            exit;
        }
    }

    function view($viewUrl, $data = array())
    {
        $data['getGoogleLoginLink'] = $this->getGoogleLoginLink();
        array_push($data,$data['getGoogleLoginLink']);
        require ('app/views/' . $viewUrl . '.php');
    }

    function model($modelUrl)
    {
        require ('app/models/model_' . $modelUrl . '.php');
        $classname = 'model_' . $modelUrl;
        $this->model = new $classname;
    }

    function getGoogleLoginLink()
    {
        $client = new Google_Client();
        $client->setClientId(CLIENT_ID);
        $client->setClientSecret(CLIENT_SECRET);
        $client->setRedirectUri(URL);
        $client->addScope("email");
        $client->addScope("profile");
        $authUrl = $client->createAuthUrl();

        return $authUrl;
    }
}

?>