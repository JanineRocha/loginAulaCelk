<?php

$localhost="localhost";
$user="root";
$passw="";
$banco="coinfo";

//Estrutural

$conect = mysqli_connect($localhost, $user, $passw, $banco);
$sqli = mysqli_query($conecta, "SELECT * FROM usuarios");
echo "Existem".mysqli_num_rows($sql)."registros.";

?>