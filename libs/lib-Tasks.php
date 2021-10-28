<?php 



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
function deleteFolder($folderId){
    global $db;
    $sql = "DELETE FROM folders where id = {$folderId};";
    $stmt = $db->prepare($sql);
    $stmt->execute();
}


