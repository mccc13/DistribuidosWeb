<?php
//include ('adodb.inc.php');
require_once '../adodb5/adodb.inc.php';
require_once '../adodb5/adodb-active-record.inc.php';
require_once '../adodb5/adodb-exceptions.inc.php';



    $nombre = 'lostpeople'; 
    $dbdriver = 'postgres';    
    $dbserver = '127.0.0.1';
    $dbname = $nombre;    
    $dbuser = 'postgres';
    $dbpassword = 'password';  
    
    
    $con= NewADOConnection($dbdriver);
    //ADODB_Active_Record::SetDatabaseAdapter($con);
        
    $con->Connect($dbserver, $dbuser, $dbpassword, $dbname);
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

