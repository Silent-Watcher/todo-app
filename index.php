<?php 
include "bootstrap/init.php";

//check for delete folder

if(isset($_GET["deleteFolder"]) and is_numeric($_GET["deleteFolder"])){
    $deleteFolderMsg = deleteFolder($_GET["deleteFolder"]);
}

//check for delete folder

//check for delete task

if(isset($_GET["deleteTask"]) and is_numeric($_GET["deleteTask"])){
    $deleteTaskMsg = deleteTask($_GET["deleteTask"]);
}

//check for delete task

// get folders from database
$folderNames = getFolders();
// get folders from database

// get tasks from database
$tasks = getTasks();
// get tasks from database
// DD($tasks);

include "views/tpl-index.php";