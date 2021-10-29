<?php 
include "constants.php";
include BASE_PATH."libs/helper.php";
include BASE_PATH."bootstrap/config.php";
include BASE_PATH."vendor/autoload.php";
// check connection
try {
    
    $db = new PDO("{$RDBMS}:host=$hostName;dbname=$dbName;charset=utf8mb4",$userName,$pass);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
} catch (PDOException $pdoErr) {
    
    diePage("error {$pdoErr->getCode()}: 
    {$pdoErr->getMessage()}
    in line : {$pdoErr->getLine()}");
}
// check connection
include BASE_PATH."libs/lib-auth.php";
include BASE_PATH."libs/lib-Tasks.php";

