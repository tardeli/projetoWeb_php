
<?php

function processo($operacao) {

    switch ($operacao) {
        case 'cadastrar':
            if(isset($_GET['Salvar'])){
                inserir();
            }else if(isset($_GET['Atualizar'])){
                atualizar();
            }else if(isset($_GET['Excluir'])){
                excluir();
            }
            
            break;
        case 'listar':
            break;
        
        default :
            echo 'erro' . "<h1>Oi</h1>";
    }
}

function inserir() {
    include_once '../Model/Pessoa.php';
    include_once '../Dao/pessoaDao.php';
    $pessoa = new pessoa();

    $pessoaDao = new pessoaDao();

    $pessoa->setNome(isset($_GET['nome']) ? $_GET['nome'] : null);
    $pessoa->setCpf(isset($_GET['cpf']) ? $_GET['cpf'] : null);
    $pessoa->setTelefone(isset($_GET['telefone']) ? $_GET['telefone'] : null);
    $pessoa->setDataNascimento(isset($_GET['data']) ? $_GET['data'] : null);
    $pessoa->setEmail(isset($_GET['email']) ? $_GET['email'] : null);

    $retorno = $pessoaDao->salvar($pessoa);
    echo "<script>window.location.href = 'resultado.php';</script>";
    
}

function listaPorId($id){
    include_once '../Dao/pessoaDao.php';
    $pessoaDao = new pessoaDao(); 
    return $pessoaDao->listarById($id);
}

function atualizar(){
    include_once '../Model/Pessoa.php';
    include_once '../Dao/pessoaDao.php';
    $pessoa = new pessoa();

    $pessoaDao = new pessoaDao();
    $pessoa->setCodigo($_GET['id']);
    $pessoa->setNome(isset($_GET['nome']) ? $_GET['nome'] : null);
    $pessoa->setCpf(isset($_GET['cpf']) ? $_GET['cpf'] : null);
    $pessoa->setTelefone(isset($_GET['telefone']) ? $_GET['telefone'] : null);
    $pessoa->setDataNascimento(isset($_GET['data']) ? $_GET['data'] : null);
    $pessoa->setEmail(isset($_GET['email']) ? $_GET['email'] : null);

    $retorno = $pessoaDao->atualizar($pessoa);
    echo "<script>window.location.href = 'resultado.php';</script>";
}

function excluir(){
    include_once '../Model/Pessoa.php';
    include_once '../Dao/pessoaDao.php';
    $pessoa = new pessoa();

    $pessoaDao = new pessoaDao();
    $pessoa->setCodigo($_GET['id']);
   
    $retorno = $pessoaDao->delete($pessoa);
    echo "<script>window.location.href = 'resultado.php';</script>";
}

function listar(){
    include_once '../Dao/pessoaDao.php';
    $pessoaDao = new pessoaDao(); 
    return $pessoaDao->listarAll();
}
?>

	