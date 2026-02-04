<?php
    @session_start();
        if(!isset($_SESSION['logado']) || $_SESSION['logado'] != true){
            $_SESSION['msg'] = "<p class=erro>Você precisa estar logado para acessar ess função!</p>";
            header("location:login.php");
        }
?>