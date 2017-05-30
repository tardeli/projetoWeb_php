<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link href="css/estilo_login.css" rel="stylesheet" type="text/css" /> 

    </head>
    <body>

        <div id="estilo1">
            <legend>Efetue o Login</legend>
            <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                     aria-valuemin="0" aria-valuemax="100" style="width:40%">
                    40% Complete (success)
                </div>
            </div>
            <?php
            if (isset($_GET['opcao'])) {
                echo '<div class="alert alert-danger" role="alert">
                        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                        <span class="sr-only">Erro:</span>Usuário ou Senha Inválidos!</div>';
            }
            ?>

            <form method = "get" action = "../Controller/loginControle.php">
                <label>Usuário: <input type = "text" id = "nome" name = "usuario"  required/></label>
                <label>Senha: <input type = "password" id = "cpf" name = "password" required/></label>
                <input class="btn btn-warning" type = "submit" value ="Entrar" name="entrar"/>
            </form>
        </div>

    </body>
</html>