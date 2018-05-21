<?php require_once 'conexao/conexao.php'; ?>


<!DOCTYPE html>
<html lang="pt">
<head></head>
<body>

    <!-- Passo 4 - Visualizar tabela do banco -->
    <?php
        while ($listagem = mysqli_fetch_assoc($produtos)) {
            print_r($listagem); ?><br>

    <?php
        }
        //Liberar dados da memória do servidor
        mysqli_free_result($produtos);
    ?>
</body>
</html>
<?php
    //Fechar conexão
    mysqli_close($conecta);
?>