<?php
    //Conexion servidor
    $connection = @mysql_connect("localhost","root","") or die("No se encontró el servidor");
    //Conexion base de datos
    mysql_select_db("refaccionaria",$connection)or die("No se encontró la base de datos");
?>