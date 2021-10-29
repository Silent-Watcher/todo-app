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
##
function isAjaxRequest(){

    if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) 
       && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
   {
        return true; 
   }
   return false;
}
##
function DD($var){
    echo '<pre style = "width : 80%;border-radius:5px ; background: #393838; position: absolute; z-index: 1000; margin: 100px auto; text-align: left; padding: 40px ; color: #f5f5f5; display: block;">';
    print_r($var);
    echo '</pre>';
}
##