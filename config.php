<?php

    session_start();
        include_once "settings.php";
        include_once "functions.php";
        $idAPP="";
        $APPname="Sokol";

    switch($_SERVER["HTTP_HOST"]){
        case "localhost":
        $APPpath="/projekt1/";
        $server = "localhost";
        $dbName="projekt1";
        $user="edunova";
        $password="edunova";
        break;
        
        case "":
        case "www.":
        $APPpath="/PP17/";
        $server = "sql209.byethost.com";
        $dbName="b33_21172594_pp17";
        $user="b33_21172594";
        $password="Edunova123.";
        break;
    }
    
?>