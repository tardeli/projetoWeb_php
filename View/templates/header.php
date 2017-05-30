<?php include_once'./../Configuracao/config.php'; ?>
<div class="panel-heading">
    <h1>Carrinho de Compras!</h1>

    <div class="row">
        <label>Usuário Logado >> <?php echo $_SESSION['usuario']; ?> </label>
        <a class="btn btn-danger" href="?opcao=sair" class="right">Sair</a>
    </div>
</div>
