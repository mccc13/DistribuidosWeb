<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoogleAuth
 *
 * @author Tory
 */
class GoogleAuth {

    //put your code here
    protected $client;

    public function __construct(Google_Client $googleClient = null) {
        $this->client = $googleClient;
        if ($this->client) {
            $this->client->setClientId('238471169057-3u4u1i0bcvlqqqqmde8spm9gep4iq2fn.apps.googleusercontent.com');
            $this->client->setClientSecret('0KzTqDGg0WpOkm-bW-CmDYSI');
            $this->client->setRedirectUri('http://localhost:8080/tutorialgoogle/index.php');
            $this->client->setScopes('email');
        }
    }

    public function isLoggedIn() {
        return isset($_SESSION['access_token']);
    }

    public function getAutUrl() {
        return $this->client->createAuthUrl();
    }

    public function checkRedirectCode() {
        if (isset($_GET['code'])) {
            $this->client->authenticate($_GET['code']);
            $this->setToken($this->client->getAccessToken());
            return TRUE;
        }
        return FALSE;
    }

    public function setToken($param) {
        $_SESSION['access_token'] = $param;
        $this->client->setAccessToken($param);
    }
    public function logout() {
        unset($_SESSION['access_token']);
    }

}
