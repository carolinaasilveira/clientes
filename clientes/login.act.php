<?php
    @session_start();
    extract($_POST);
    require('connect.php');
    $destino = "";
    $msg = "";

    $cliente = mysqli_query($con, "Select * from `tb_clientes` where `email` = '$email'");
    if($cliente->num_rows == 1){
        //desloga o usuario
        $cliente = mysqli_fetch_assoc($cliente);
        
        if(password_verify($senha, $cliente['senha'])){
            //senha correta
            $_SESSION['logado'] = true;
            $_SESSION['nome'] = $cliente['nome'];
            $_SESSION['email'] = $cliente['email'];
            $_SESSION['fotoUrl'] = $cliente['fotoUrl'];
            $destino = "location: listarClientes.php";
        }else{
            //senha incorreta
            echo "senha incorreta";
            $destino = "location:login.php";
            $msg = "<p class=erro>Erro</p>";
        }
 
    }else{
        //email nao encontrado
        $destino = "location:login.php";
        $msg = "<p class=erro>Email não encontrado</p>";
    }
   
    $_SESSION['msg'] = $msg;
    header($destino);