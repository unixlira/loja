<!DOCTYPE html>
<html>
<head>
<title>Up Style | Cadastro</title>
<link rel="shortcut icon" href="favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff"><link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Mania Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
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
<div class="container">
	<div class="register">
		<h1>Criar Conta</h1>
		  	  <form method="POST" action="cadastro.php"> 
				 <div class="col-md-6  register-top-grid">
					
					<div class="mation log">
						
						<span>E-Mail</span>
						<input type="text"  id="email" name="email"> 

						<span>Senha</span>
						<input type="password" id="senha" name="senha" >
					
						<span>Nome</span>
						<input type="text"  id="nome" name="nome"> 

					</div>
					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#ao inscrever você concorda com os termos e regras da loja etc...">
						 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Inscrever</label>
					   </a>
					 </div>
				     <div class=" col-md-6 register-bottom-grid">
						   
							<div class="mation">
							
						<span>Sobrenome</span>
						<input type="text" name="sobrenome" id="sobrenome">
					 
						 <span>Email</span>
						 <input type="text" name="email" id="email"> 
						 
						 <span>Cpf</span>
						 <input type="text" name="cpf" id="cpf">
							</div>
					 </div>
					 <div class="clearfix"> 
					 	
					 </div>
				</form>
				
				<div class="form">
				   <form method="POST" action="cadastro.php">
					   <input type="submit" value="CADASTRAR" name="cadastrar" id="cadastrar">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
</div>

<!--footer-->
	<?php include("footer.php"); ?>
	<!--//footer-->
</body>
</html>