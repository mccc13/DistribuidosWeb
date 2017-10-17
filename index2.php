<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './smarty/libs/Smarty.class.php';

function contenido() {
    $smarty = new Smarty();
    $smarty->debugging = FALSE;
    $smarty->caching = true;
    $smarty->cache_lifetime = 120;
    $smarty->display('./views/index2.tpl');
}
require_once './master.php';
?>