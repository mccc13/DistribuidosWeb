<?php
require_once '../datos/Usuario.php';
require_once '../negocio/DaoUsuario.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PageAuth
 *
 * @author Tory
 */
class PageAuth {
    protected  $usuario;
    function __construct() {
        $this->usuario=new Usuario();
    }
    public function isLoggedIn() {
        return isset($_SESSION['access_token']);
    }
    public function checkRedirectCode() {
        if (isset($_REQUEST['code'])) {
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

    
    //put your code here
}
