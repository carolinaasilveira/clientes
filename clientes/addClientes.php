<?php include('head.php'); ?>
<?php include('menu.php'); ?>

<?php
// início da sessão
    @session_start();
    if (isset($_SESSION['msg'])) {
        echo ($_SESSION['msg']);
        unset ($_SESSION['msg']);
    }
?>
<body>
    <p class="titulo">Adicionar Cliente</p>
    <div class="divForm">
        <form action="addClientes.act.php" method="post" enctype="multipart/form-data">
            <p><input type="text" name="nome" id="" placeholder="Nome"></p>
            <p><input type="email" name="email" id="" placeholder="Email"></p>
            <p><input type="text" name="telefone" placeholder="Telefone"><p>
            <p><input type="date" name="nascto" id=""></p>
            <p><label for="fotoUrl">Escolha a foto de perfil:</label></p>
            <p><input type="file" name="fotoUrl"></p>
            <p><input type="password" name="senha" placeholder="Senha" id=""></p>
            <p><input type="submit" value="Enviar"></p>
        </form>
    </div>
    <script src="app.js"></script>
    <?php include('footer.php'); ?>
</body>
</html>