<?php include('head.php'); ?>
<?php include('menu.php'); ?>
    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <body>
    <?php
        @require('connect.php');
        extract($_GET);
        $cliente = mysqli_query($con, "Select * from `tb_clientes` where `codigo` = '$codigo'");
        $cliente = mysqli_fetch_assoc($cliente);
        
    ?>
    
        <div class="divForm">
            <p class="titulo">Alterar Funcionários</p>
            <form action="alterarClientes.act.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="codigo" value="<?php echo $cliente['codigo'];?>">
                <input type="hidden" name="destino" value="<?php echo $cliente['fotoUrl'];?>">
                <p><input type="text" name="nome" placeholder="Nome" value="<?php echo $cliente['nome'];?>"></p>
                <p><input type="text" name="telefone" placeholder="Telefone" value="<?php echo $cliente['telefone'];?>"></p>
                <p><img src="<?php echo $cliente['fotoUrl']; ?>" alt="Foto do cliente"></p>
                <p>
                    <label for="fileFoto">Escolher Imagem</label>
                    <input type="file" name="fotoUrl" id="fileFoto">
                </p>
                <p><input type="submit" value="Enviar"></p>
            </form>
        </div>
        <?php include('footer.php'); ?>
