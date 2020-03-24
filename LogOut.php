<?php 
session_start();
unset($_SESSION['login1']);
unset($_SESSION['senha1']);
session_destroy();
header("Location: Login.php");
?>