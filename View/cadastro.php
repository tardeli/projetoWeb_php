<?php include_once'./../Configuracao/config.php';?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript" ></script>
    </head>
    <body>
        <div class="container">
            <?php include './templates/header.php';?>
            
            
            <?php include './templates/menu.php';?>
           
            <h2>Cadastro</h2>
            <?php
            include '../Controller/pessoaControle.php';
            processo('cadastrar');
            $operacao = isset($_GET['opcao']) ? $_GET['opcao'] : $situacao = 'Salvar';
            $id = isset($_GET['id']) ? $_GET['id'] : null;

            $nome = null;
            $cpf = null;
            $telefone = null;
            $data = null;
            $email = null;

            if ($operacao == 'atualizar') {
                $situacao = 'Atualizar';
                $linha = listaPorId($id);
                while ($li = mysqli_fetch_assoc($linha)) {

                    $nome = $li['nome'];
                    $cpf = $li['cpf'];
                    $telefone = $li['telefone'];
                    $data = $li['datanascimento'];
                    $email = $li['email'];
                }
            } else if ($operacao == 'excluir') {
                $situacao = 'Excluir';
                $linha = listaPorId($id);
                while ($li = mysqli_fetch_assoc($linha)) {

                    $nome = $li['nome'];
                    $cpf = $li['cpf'];
                    $telefone = $li['telefone'];
                    $data = $li['datanascimento'];
                    $email = $li['email'];
                }
            }
            ?>
            <div class="panel-group">
                <fieldset>
                    <legend>Cadastro Cliente</legend>

                    <form class="form-horizontal" method = "get" action = "">
                        <label>Nome: <input type = "text" id = "nome" name = "nome" value="<?php echo $nome; ?>" required/></label>
                        <label>Cpf: <input type = "text" id = "cpf" name = "cpf" value="<?php echo $cpf; ?>"/></label></br>
                        <label>Telefone: <input type = "text" id = "telefone" name = "telefone" value="<?php echo $telefone; ?>"/></label>
                        <label>Data Nascimento: <input type = "date" id = "data" name = "data" value="<?php echo $data; ?>"/></label></br>
                        <label>Email: <input type = "email" id = "email" name = "email" value="<?php echo $email; ?>"/></label>

                        <input type = "hidden" name="id" value="<?php echo $id; ?>"/>
                        <input class="btn btn-success" type = "submit" value ="<?php echo $situacao ?>" name="<?php echo $situacao ?>"/>
                        <a href="cadastro.php"><button class="btn btn-danger">Cancelar</button></a>
                    </form>
                </fieldset>
            </div>
            
            <?php include './templates/footer.php';?>
        </div>



    </body>
</html>