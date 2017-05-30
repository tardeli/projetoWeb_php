<?php

$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : null;
$password = isset($_GET['password']) ? $_GET['password'] : null;


if ($usuario == "Tardeli" && $password == "admin") {
    session_start();
    $_SESSION["usuario"] = $_GET['usuario'];
    $_SESSION["password"] = $_GET['password'];
    header("Location:../View/principal.php");
    
} else {

    header("Location:../View/login.php?opcao=erro");   
}
?>

