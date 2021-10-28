<?php 
include "bootstrap/init.php";



//check for delete folder

if(isset($_GET["deleteFolder"]) and is_numeric($_GET["deleteFolder"])){
    $deleteFolderMsg = deleteFolder($_GET["deleteFolder"]);
    echo $deleteFolderMsg;
}

//check for delete folder

// get folders from database
$folderNames = getFolders();
// get folders from database

include "views/tpl-index.php";