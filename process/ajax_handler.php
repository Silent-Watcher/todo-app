<?php 
include "../bootstrap/init.php";

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

switch($_POST["action"]){
    case "addFolder":
        if (empty($_POST["folderName"]) || strlen($_POST["folderName"]) < 3) {
            diePage("the folder name should have at least 3 character!!");
        }
        print_r(addFolder($_POST["folderName"]));
        break;
    // case "addTask":
        
    //     break;
    // case "removeTask":
        
    //     break;
    default:
        diePage("invalid <b>action</b> :)");
        break;        
}


