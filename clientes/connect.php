<?php
    $con = mysqli_connect('localhost','root','','bd_clientes');
    mysqli_query($con,"SET NAMES utf8");
    if(!$con){
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    mysqli_query($con, 'SET NAMES utf8');