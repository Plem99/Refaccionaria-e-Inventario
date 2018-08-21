<?php
    //Conexion servidor, con mysql_connect asignando los datos correspondientes de la bd
    $connection = @mysql_connect("localhost","root","") or die("No se encontró el servidor");
    //Conexion base de datos, si no se encuentra se ostrara el mensaje qeu no se encontro la bd
    mysql_select_db("refaccionaria",$connection)or die("No se encontró la base de datos");
?>