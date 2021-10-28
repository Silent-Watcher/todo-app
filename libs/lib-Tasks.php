<?php 

defined("BASE_PATH") or die("permission denied");

// get currrent user folders from database
function getFolders(){
    global $db;
    $currentUserId = getCurrentUserId();
    $sql = "SELECT * FROM folders WHERE user_id = {$currentUserId}";
    $stmt = $db-> prepare($sql);
    $stmt-> execute();
    $folders = $stmt->fetchAll(PDO::FETCH_OBJ);
    return $folders;
}
// get currrent user folders from database


// delete folder from database
function deleteFolder($folderId = null){
    global $db;
    $sql = "DELETE FROM folders where id = {$folderId};";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}
// 

// get folder info 
function getFolderInfo( string $folderName = null){
    global $db;
    $sql = "SELECT id FROM folders WHERE name = :foldername";
    $stmt = $db->prepare($sql);
    $stmt->execute(["foldername"=>$folderName]);
    $folderInfo = $stmt->fetch(PDO::FETCH_ASSOC);
    return $folderInfo;
}

// add folder to the database with ajax
function addFolder(string $folderName = null){
    global $db;
    $userId = getCurrentUserId();
    $sql = "INSERT INTO folders (user_id,name) VALUES ($userId,:folder_name)";
    $stmt = $db->prepare($sql);
    $stmt->execute(["folder_name"=> $folderName]);
    $folderInfo = getFolderInfo($folderName);
    return $folderInfo["id"] ;
}

