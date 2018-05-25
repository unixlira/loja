<?php
require_once 'conexao/conexao.php';
//add sessão
session_start();

if (isset($_POST['email'])) {
    $usuario = $_POST['email'];
    $senha = $_POST['senha'];

    $login = 'SELECT * ';
    $login .= 'FROM users ';
    $login .= "WHERE email = '{$usuario}' and password = '{$senha}'";

    $acesso = mysqli_query($conecta, $login);
    if (!$acesso) {
        die("<div style='text-algin:center;'><h1>Error: Fail connect in DATABASE</h1></div>");
    }

    $informacao = mysqli_fetch_assoc($acesso);

    if (empty($informacao)) {
        $mensagem = 'Usuário não encontrado!';
    } else {
        $_SESSION['user_portal'] = $informacao['nome'];
        header('location:index.php');
    }
}

?>

<!DOCTYPE html>
<html>
<body>
<!--header-->
<?php include 'header.php'; ?>
<!--/header-->
<div class="account">
	<div class="container">
		<h1>Conta</h1>
		<?php
            if (isset($mensagem)) {
                ?>
		<p><?php echo "<h1>  $mensagem </h1>"; ?></p>
		<?php
            }
        ?>
		<div class="account_grid">
			   <div class="col-md-6 login-right form">
				<form class="login-form" method="POST" action="login.php">
					<span>Email</span>
					<input type="text" name="email" id="email"> 
				
					<span>Senha</span>
					<input type="password" name="senha" id="senha"> 
					<div class="word-in">
				  		<a class="forgot" href="#">Esqueceu a senha?</a>
				 		 <input type="submit" value="Entrar" id="entrar" name="entrar">
				  	</div>
			    </form>
			   </div>	
			    <div class="col-md-6 login-left">
			  	 <h4>NOVOS CLIENTES</h4>
				 <p>Ao criar uma conta com a nossa loja, você poderá passar pelo processo de compra mais rápido, armazenar vários endereços de remessa, visualizar e rastrear seus pedidos em sua conta e muito mais.</p>
				 <a class="acount-btn" href="cadastro.php">Criar conta</a>
			   </div>
			   <div class="clearfix"> </div>
			 </div>
	</div>
</div>
<!--footer-->
<?php include 'footer.php'; ?>
<!--/footer>
</body>
</html>