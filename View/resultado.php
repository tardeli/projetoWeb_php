<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Lista</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-3.2.1.min.js" type="text/javascript" ></script>

    </head>
    <body>

        <div class="container">
            <?php include './templates/header.php'; ?>
            <?php include './templates/menu.php'; ?>

            <?php
            include '../Controller/pessoaControle.php';
            $linha = listar();
            ?>
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th><?php echo "Cód"; ?></th>
                        <th><?php echo "Nome"; ?></th>
                        <th><?php echo "Cpf"; ?></th>
                        <th><?php echo "Telefone"; ?></th>
                        <th><?php echo "Data Nascimento"; ?></th>
                        <th><?php echo "Email"; ?></th>    
                    </tr>

                    <?php while ($li = mysqli_fetch_assoc($linha)) { ?>

                        <tr>
                            <td><?php echo $li['id']; ?></td>
                            <td><?php echo $li['nome']; ?></td>
                            <td><?php echo $li['cpf']; ?></td>
                            <td><?php echo $li['telefone']; ?></td>
                            <td><?php echo $li['datanascimento']; ?></td>
                            <td><?php echo $li['email']; ?></td>
                            <td><a href="cadastro.php?id=<?php echo $li['id']; ?>&opcao=atualizar" id="atualizar" class="opcaoAtualizar"><button class="btn btn-info">Atualizar</button></a></td>
                            <td><a href="cadastro.php?id=<?php echo $li['id']; ?>&opcao=excluir" id="excluir" class="opcaoExcluir"><button class="btn btn-danger">Excluir</button></a></td>
                        </tr>


                    <?php } ?>
                </table>
            </div>
            <?php include './templates/footer.php'; ?>
        </div>
    </body>
</html>