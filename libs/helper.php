<?php 
defined("BASE_PATH") or die("permission denied");
function diePage(string $string){
    echo "<div style =' width: 80%; 
            text-align: center; 
            background: #ff00001f;
            color: #303030;
            margin: 20px auto;
            padding: 20px;
            border-radius: 5px;'>{$string}</div";
    die();
}

function isAjaxRequest(){

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
       && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
   {
        return true; 
   }
   return false;
}