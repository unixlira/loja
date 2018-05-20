<!DOCTYPE html>
<html>
<head>
<title>Up Style | Cadastro</title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (Necessário para pluguins Javascript do Bootstrap) -->
<script src="js/jquery.min.js"></script>
<!-- Customização de tema de arquivo -->
<!--Estilo -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//Estilo-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
</head>
<body>
<!--header-->
<?php include("header.php"); ?>
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
<?php include("footer.php"); ?>
<!--/footer>
</body>
</html>