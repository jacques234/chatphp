<?php
include "config/conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Mukta+Vaani:wght@200&display=swap" rel="stylesheet">
    <script>
        function ajax(){
            var req = new XMLHttpRequest();
            req.onreadystatechange = function(){
                if(req.readyState == 4 && req.status == 200) {
                    document.getElementById('chat').innerHTML = req.responseText;
                }
            }
            req.open('GET','config/chat.php',true);
            req.send();
        }

        // hace el refresh a la pagina 

        setInterval(function(){ajax();},1000);
    </script>
    <title>Chat</title>
</head>
<body onload ="ajax();">
    
    <div id="contenedor">
        <div id="caja-chat">
            <div id="chat">
            </div>
        </div>
        <form action="config/create.php" method="post">
            <input type="text" name="nombre" id="" placeholder="Ingresa tu nombre">
            <textarea name="mensaje" placeholder="Ingresa tu mensaje"></textarea>
            <input type="submit" name= "enviar" value="Enviar">
        </form>
    </div>

</body>
</html>