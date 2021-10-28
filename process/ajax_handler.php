<?php 
include "C:/xampp/htdocs/php.exp/app/bootstrap/init.php";
sleep(1);
// check if the request is ajax
if(!isAjaxRequest()){
    diePage("invalid <b>request</b> :)");
}
// check if the request is ajax


// check if action is set and not empty
if (!isset($_POST["action"]) || empty($_POST["action"])) {
    diePage("invalid <b>action</b> :)");
}
// check if action is set and not empty

// ajax control actions 
switch($_POST["action"]){
    case "addFolder":
        if ( !isset($_POST["folderName"]) || empty($_POST["folderName"]) || strlen($_POST["folderName"]) < 3) {
            echo 0;
            die();
        }else{
            echo addFolder($_POST["folderName"]);
        }
        break;
    // case "addTask":
        
    //     break;
    // case "removeTask":
        
    //     break;
    default:
        diePage("invalid <b>action</b> :)");
        break;        
}
// ajax control actions 