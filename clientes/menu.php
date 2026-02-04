<?php require('head.php')?>

    <body>
    <div class="menu">
        <a href="listarClientes.php">Lista de Clientes</a></li>
        <ul class="menuOpc">
            <a href="addClientes.php">Adicionar Cliente</a>
            <a href="listarClientes.php">Listar Clientes</a>
            <?php
                @session_start();
                if(isset($_SESSION['logado']) && ($_SESSION['logado'] == true)){
                    echo "<a href=#>Olá, $_SESSION[nome]</a>";
                    echo "<a href=logoff.php> Sair</a>";
                } else {
                    echo "<a href=login.php>Entrar</a>";
                }
                ?>
            </ul>  
    </div>
