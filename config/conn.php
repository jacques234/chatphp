<?php
$servidor = "localhost";
$user = "root";
$pass = "";
$db = "appchat";



try {
    $conn = new mysqli($servidor, $user, $pass, $db);
    //echo "Connection successful";
}catch(Exception $e){
    echo "Error: " . $e->getMessage;
}


// function formatDate($fecha){
//  return date('g:i a',strtotime($fecha));
// }
?>