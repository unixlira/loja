<?php 
require_once 'conexao/conexao.php';
//Iniciar sessao
session_start();
if (!isset($_SESSION['user_portal'])) {
    header('location:account.php');
}

//excluir a sessão
//unset($_SESSION['usuario']);
//destruir sessão
session_destroy();

?>
<!DOCTYPE html>
<html>	
	<body>
	<!--header-->
	<?php include 'header.php'; ?>
	<!--header-->
    <div class="clearfix"></div>
	<div class="content-top" id="busca">
		<h1>Obrigado e Volte Sempre!</h1>
    </div>
    <div class="clearfix"></div>
    <!--footer-->
        <?php include 'footer.php'; ?>
    <!--footer-->
	</body>
</html>
<?php
//Fechar conexão
mysqli_close($conecta);
?>
