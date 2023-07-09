<?php
include 'conn.php';
    $query = "SELECT nombre AS nombre, mensaje AS mensaje, DATE_FORMAT(fecha, '%H:%i:%s') AS fecha FROM chat
    ORDER BY id_chat DESC";
    $ejecutar = $conn->query($query);
    while($row = $ejecutar->fetch_array()){ 
?>
    <div id="datos-chat">
        <span class="nombre-chat"><?php echo $row['nombre'];?></span>
        <span class="mensaje-chat"><?php echo $row['mensaje'];?></span>
        <span class="hora-chat"><?php echo $row['fecha'];?></span>
    </div>
<?php
    }
?>