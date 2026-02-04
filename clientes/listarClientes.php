<?php include('head.php')?>
<?php include('menu.php'); ?>
<?php require('sec.php'); ?>
<body>
<?php
        @session_start();
        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }
    ?>
    <?php
        require('connect.php');
        $clientes = mysqli_query($con, "Select * from `tb_clientes`");
        echo "<div class=cardsClientes>";
        while($cliente = mysqli_fetch_assoc($clientes)){
            echo "<div>";
            echo "<p>Código: $cliente[codigo]</p>";
            echo "<p>Nome: $cliente[nome]</p>";
            echo "<p>Email: $cliente[email]</p>";
            echo "<p>Telefone: $cliente[telefone]</p>";
            echo "<p>Data de Nascimento: $cliente[nascto]</p>";
            echo "<div class=cardFotoContainer>";
                 // show image with proper quoting; if empty, show placeholder
                 $imgSrc = !empty($cliente['fotoUrl']) ? $cliente['fotoUrl'] : 'fotosClientes/placeholder.png';
                 echo "<img src=\"$imgSrc\" alt=\"Foto de $cliente[nome]\">";
                echo "</div>";
                echo "<p class=botao><a href=alterarClientes.php?codigo=$cliente[codigo]>Editar</a></p>";
               echo "<p class=botao><a href=\"javascript:excluir($cliente[codigo], 'tb_clientes')\">Excluir</a></p>";
            echo "</div>";
            }   
        echo "</div>";  
    ?>
    <div class="cardsClientes">

    </div>
</body>
</html>