<?php
    require("connect.php");

    if (isset($_POST['codigo']) && isset($_POST['tabela'])) {
        $codigo = intval($_POST['codigo']);
        $tabela = $_POST['tabela'];

        if ($tabela === 'tb_clientes' || $tabela === 'tb_clientes') {
            $sql = "DELETE FROM $tabela WHERE codigo = $codigo";
            if (mysqli_query($con, $sql)) {
                echo "Excluído com sucesso!";
            } else {
                echo "Erro ao excluir: " . mysqli_error($con);
            }
        } else {
            echo "Tabela inválida.";
        }
    } else {
        echo "Dados não informados.";
    }
?>