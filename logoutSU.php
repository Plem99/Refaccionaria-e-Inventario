<?php
//Inicamos sesion.
session_start();
//Cerramos sesion.
session_destroy();
echo 'Cerraste sesión';
//Te redireccionara al index cuando se ejecute.
echo '<script> window.location="index.php"; </script>';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saliendo...</title>
	<meta charset="utf-8">
</head>
<body>
<script language="javascript">location.href = "index.php";</script>
</body>
</html>