<?php
session_start(); 
session_destroy();
session_unset();
setcookie("usuarioid", 0);
header("location:index.php"); 
exit();
?>
