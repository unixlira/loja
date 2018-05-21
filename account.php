<!DOCTYPE html>
<html>
<body>
<!--header-->
<?php include 'header.php'; ?>
<!--/header-->
<div class="account">
	<div class="container">
		<h1>Conta</h1>
		<div class="account_grid">
			   <div class="col-md-6 login-right form">
				<form class="login-form" method="POST" action="login.php">

					<span>Login</span>
					<input type="text" name="login" id="login"> 
				
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
				 <a class="acount-btn" href="register.php">Criar conta</a>
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