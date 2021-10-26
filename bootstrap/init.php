<?php 
include "config.php";
include "libs/helper.php";
include "vendor/autoload.php";
include "constants.php";
// check connection
try {
    
    $db = new PDO("{$RDBMS}:host=$hostName;dbname=$dbName;charset=utf8mb4",$userName,$pass);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // echo "successfully connected to {$dbName} database :)".PHP_EOL;
    
} catch (PDOException $pdoErr) {
    
    diePage("error {$pdoErr->getCode()}: 
    {$pdoErr->getMessage()}
    in line : {$pdoErr->getLine()}");
}
// check connection
include "libs/lib-Tasks.php";
include "libs/lib-auth.php";
