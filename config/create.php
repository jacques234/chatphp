<?php
include "conn.php";

if (isset($_POST['enviar'])){
   //header("Location: ../index.php"); 

    $name = $_POST['nombre'];
    $message = $_POST['mensaje'];

    $query = "INSERT INTO chat (nombre,mensaje)values('$name','$message')";
    $execute = $conn->query($query); 

    if ($execute){
        header("Location: ../index.php");
    }else{
        echo "error";
    }
}else{
    echo "Error";
}


?>