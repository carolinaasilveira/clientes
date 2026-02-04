<?php include ('head.php');?>
<?php include ('menu.php');?>
    <?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo "$_SESSION[msg]";
            unset($_SESSION['msg']);
        }
    ?>
    <p class="titulo">Login</p>
    <p class="subtexto">Faça login para ter acesso total ao sistema!</p>
    <div class="divForm">
        <form action="login.act.php" method="post" enctype="multipart/form-data">
            <p><input type="text" name="email" id="" class="email" placeholder="Email"></p>
            <p><input type="password" name="senha" class="txtSenha" placeholder="Senha"></p>
            <p><input type="submit" value="Enviar" class="btnEnviar"></p>
        </form>
    </div>
    <script>
        $('.sucesso,.erro').click(function (e) {
            e.preventDefault();
            $(this).fadeOut(800);
        });
    </script>
    <?php include('footer.php'); ?>
