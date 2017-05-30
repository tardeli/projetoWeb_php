<?php

@session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:../View/login.php");
}

$opcao = isset($_GET['opcao']) ? $_GET['opcao'] : null;
if ($opcao == "sair") {
    @session_destroy();
    //Limpa
    unset($_SESSION['usuario']);
    unset($_SESSION['password']);
    header("Location:../View/login.php");
}
?>



