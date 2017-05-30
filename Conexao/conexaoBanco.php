<?php

class conection{
    
    function __construct() {
        $this->conexao();
    }
            
    function conexao(){
        $conexao = mysqli_connect('localhost', 'root', '11r4954388', 'programacaoweb', '3306'); 
        return $conexao;
    }
}   
?>

