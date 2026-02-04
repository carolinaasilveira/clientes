<?php
    @session_start();
    require('connect.php');
    extract($_POST);
    extract($_FILES);

    if ($fotoUrl['size'] != 0){
        $destino = "fotosClientes/".md5(time().$fotoUrl['size']).".jpg";
        move_uploaded_file($fotoUrl['tmp_name'],$destino);
    }
    mysqli_query($con, "UPDATE `tb_clientes` SET
    `nome` = '$nome',
    `telefone` = '$telefone',
    `fotoUrl` = '$destino'
    WHERE `tb_clientes`.`codigo` = '$codigo';"); 
    
header("location:listarClientes.php");

