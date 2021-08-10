<?php
session_start();

//mata a sessão
unset($_SESSION['idUser']);

header("Location: ./../login.php");

?>