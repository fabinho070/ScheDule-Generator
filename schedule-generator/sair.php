<?php   
session_start();
session_destroy();
unset($_COOKIE['userid']);
unset($_COOKIE['login']);
setcookie("userid", 0);
header("location:index.php"); 
exit();
?>
