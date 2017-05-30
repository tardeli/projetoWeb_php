<?php

include_once '../Conexao/conexaoBanco.php';

class pessoaDao {

    public function salvar(Pessoa $obj) {
        $retorno = "";
        $query = "insert into pessoa (nome, cpf, telefone, datanascimento, email)"
                . "values ('" . $obj->getNome() . "', '" . $obj->getCpf() . "', '" . $obj->getTelefone() . "'"
                . " , '" . $obj->getDataNascimento() . "', '" . $obj->getEmail() . "' );";
        $conexao = new conection();
        $conn = $conexao->conexao();
        $inserir = mysqli_query($conn, $query);
        if ($inserir) {
            $retorno = "salvo";
        } else {
            $retorno = "nao salvo";
        }

        return $retorno;
    }

    public function atualizar(Pessoa $obj) {
        $retorno = "";
        $query = "update pessoa set nome = '" . $obj->getNome() . "', cpf = '" . $obj->getCpf() . "', "
                . "telefone = '" . $obj->getTelefone() . "', datanascimento = '" . $obj->getDataNascimento() . "', "
                . "email = '" . $obj->getEmail() . "' where id = '" . $obj->getCodigo() . "'";
        $conexao = new conection();
        $conn = $conexao->conexao();
        $inserir = mysqli_query($conn, $query);
        if ($inserir) {
            $retorno = "salvo";
        } else {
            $retorno = "nao salvo";
        }

        return $retorno;
    }

    public function delete(Pessoa $obj) {
        $conexao = new conection();
        $conn = $conexao->conexao();
        mysqli_select_db($conn, "programacaoweb");
        $query = "delete from pessoa where id = '" . $obj->getCodigo() . "';";

        $resultado = mysqli_query($conn, $query) or die(mysql_error());

        return $resultado;
    }

    public function listarAll() {
        $conexao = new conection();
        $conn = $conexao->conexao();
        mysqli_select_db($conn, "programacaoweb");
        $query = "SELECT id, nome, cpf, telefone, datanascimento, email FROM pessoa;";

        $resultado = mysqli_query($conn, $query) or die(mysql_error());

        return $resultado;
    }

    public function listarById($id) {
        $conexao = new conection();
        $conn = $conexao->conexao();
        mysqli_select_db($conn, "programacaoweb");
        $query = "SELECT nome, cpf, telefone, datanascimento, email FROM pessoa where id = '$id';";

        $resultado = mysqli_query($conn, $query) or die(mysql_error());

        return $resultado;
    }

}

?>
