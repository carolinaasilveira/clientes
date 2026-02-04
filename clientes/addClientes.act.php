<?php
    @session_start();
    require('connect.php');
    extract($_POST);
    extract($_FILES);
    $msg = "";
    $destino = "";
    
       $busca = mysqli_query($con, "Select `email` from `tb_clientes` where `email` like '$email'");


       if($busca->num_rows > 0){
        $msg = "<p class=erro>Email já cadastrado!</p>";
        $_SESSION['msg'] = $msg;
        header("location:addClientes.php");
        exit;
       } else {
        //upload da img
        if (isset($fotoUrl) && $fotoUrl['size']> 0) {
            $destino = "fotosClientes/".md5(time().$fotoUrl['size']).".jpg";
            move_uploaded_file($fotoUrl['tmp_name'],$destino);
        }
        $senha = password_hash($senha, PASSWORD_DEFAULT);
       }
    if((strlen($nome)>0) && (strlen($email)>0) && (strlen($senha)>0)){
        if(mysqli_query($con,"INSERT INTO `tb_clientes`
                (`codigo`,`nome`,`email`,`telefone`,`nascto`,`senha`,`fotoUrl`) VALUES
                (NULL,'$nome','$email','$telefone','$nascto','$senha','$destino');")){
            $msg = "<p class=sucesso>Registro criado com sucesso!</p>";
        }else{
            $msg = "<p class=erro>Erro ao criar registro</p>";
        }
    }else{
        $msg = "<p class=erro>Preencha todos os campos!</p>";
    }

    $_SESSION['msg'] = $msg;
    header("location:addClientes.php");
