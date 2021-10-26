<?php 

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