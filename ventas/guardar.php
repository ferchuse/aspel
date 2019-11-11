<?php
    include('../../conexi.php');
    $link = Conectarse();
    $consulta = "INSERT INTO ventas (id_venta, nombre_cliente) 
    VALUES ('{$_POST["id_ventas"]}', '{$_POST["nombre_cliente"]}')";
    $result = mysqli_query($link, $consulta);
?>

