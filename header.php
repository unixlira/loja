<?php 
require_once 'conexao/conexao.php';
//Iniciar sessao
session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Up Style Fashion</title>
		<link rel="shortcut icon" href="favicon.ico">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Custom Theme files -->
		<!--theme-style-->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
		<!--//theme-style-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Up Sites Now Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design , sites mooca, e-commerce mooca, loja virtual Mooca, Loja Roupas Up Style" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- start menu -->
		<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
		<script type="text/javascript" src="js/memenu.js"></script>
		<script>$(document).ready(function(){$(".memenu").memenu();});</script>
		<script src="js/simpleCart.min.js"> </script>
		<!-- slide -->
		<script src="js/responsiveslides.min.js"></script>
		<script src="js/functions.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
		<script src="main.js"></script> -->
	</head>
	<body>
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="col-sm-8 logo">
						<a href="index.php"><img src="images/logo2.png" alt="" style="float:left;clear:both;"></a>	
					</div>
					<div class="col-sm-4 header-left">
						<?php

                            if (isset($_SESSION['user_portal'])) {
                                echo "<span  class='col-sm-8 header-left'><i><h5  style='font-size:24px;font-family:OleoScript-Regular;'>Bem Vindo, &nbsp".utf8_encode($_SESSION['user_portal']).
                                 "</i></h5></span><p class='col-sm-12 log '><a href='logout.php'>Sair</a></p>";
                            } else {
                                echo "<p class='log'><a href='login.php'  >Entre</a>
						<span>ou</span><a  href='cadastro.php'  >Cadastrar</a></p>";
                            }
                        ?>
						<div class="cart box_1">
							<a href="checkout.php">
								<h3> <div class="total">
								<span class="simpleCart_total"></span></div>
								<img src="images/cart.png" alt=""/></h3>
							</a>
								<p><a href="javascript:;" class="simpleCart_empty">Carrinho Vazio</a></p>
						</div>
						<div class="clearfix"></div>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
			<div class="container">
				<div class="head-top">
					<div class="col-sm-2 number">
						<span><a href="https://api.whatsapp.com/send?phone=5511989779694"><img src="images/media.png"   alt="whatsapp" width="30" height="30"></a> Atendimento</span>
					</div>
					<div class="col-sm-8 h_menu4">
						<ul class="memenu skyblue">
							<li class=" grid"><a  href="index.php">Home</a></li>	
							<li><a  href="#">Feminino</a>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<h4>Todas Roupas</h4>
												<ul>
													<!-- <li><a href="produtos.php">Camisas</a></li> -->
													<!-- <li><a href="produtos.php">Esportiva</a></li> -->
													<li><a href="produtos.php">Shorts</a></li>
													<!-- <li><a href="produtos.php">Ternos e Blazers</a></li>
													<li><a href="produtos.php">Camisa Social</a></li> -->
													<!-- <li><a href="produtos.php">Moletom</a></li> -->
													<li><a href="produtos.php">Calças</a></li>
													<li><a href="produtos.php">Camisetas</a></li>
													<li><a href="produtos.php">Lingerie e Meias</a></li>
													
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<h4>Calçados</h4>
												<ul>
													<!-- <li><a href="produtos.php">Botas</a></li>
													<li><a href="produtos.php">Tênis</a></li>										
													<li><a href="produtos.php">Tênis esportivos</a></li>
													<li><a href="produtos.php">Sapatos casuais</a></li>
													<li><a href="produtos.php">Tênis de corrida</a></li>										 -->
													<li><a href="produtos.php">Rasterinhas</a></li>
													<li><a href="produtos.php">Chinelos</a></li>
													<li><a href="produtos.php">Sandálias</a></li>
													<li><a href="produtos.php">Sapatilhas</a></li>
												
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<h4>Marcas Populares</h4>
												<ul>
													<li><a href="produtos.php">Levis</a></li>
													<li><a href="produtos.php">Persol</a></li>
													<li><a href="produtos.php">Nike</a></li>
													<li><a href="produtos.php">Edwin</a></li>
													<!-- <li><a href="produtos.php">New Balance</a></li>
													<li><a href="produtos.php">Jack & Jones</a></li>
													<li><a href="produtos.php">Paul Smith</a></li>
													<li><a href="produtos.php">Ray-Ban</a></li>
													<li><a href="produtos.php">Wood Wood</a></li> -->
												</ul>	
											</div>												
										</div>
									</div>
								</div>
							</li>
							
							<li class="grid"><a  href="#">Acessórios</a>
								<div class="mepanel">
									<div class="row">
										<div class="col1">
											<div class="h_nav">
												<h4>Todas Roupas</h4>
												<ul>
													<li><a href="produtos.php">Tiaras</a></li>
													<li><a href="produtos.php">Relogios</a></li>
													<li><a href="produtos.php">Brincos</a></li>
													<li><a href="produtos.php">Cintos e colares</a></li>
													<!-- <li><a href="produtos.php">Camisa Social</a></li>
													<li><a href="produtos.php">Moletom</a></li>
													<li><a href="produtos.php">Calças</a></li>
													<li><a href="produtos.php">Camisetas</a></li>
													<li><a href="produtos.php">Lingerie e Meias</a></li> -->
													
												</ul>	
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<h4>Calçados</h4>
												<ul>
													<!-- <li><a href="produtos.php">Botas</a></li>
													<li><a href="produtos.php">Tênis</a></li>										
													<li><a href="produtos.php">Tênis esportivos</a></li>
													<li><a href="produtos.php">Sapatos casuais</a></li>
													<li><a href="produtos.php">Tênis de corrida</a></li>										 -->
													<li><a href="produtos.php">Rasterinhas</a></li>
													<li><a href="produtos.php">Chinelos</a></li>
													<li><a href="produtos.php">Sandálias</a></li>
													<li><a href="produtos.php">Sapatilhas</a></li>
												
												</ul>
											</div>							
										</div>
										<div class="col1">
											<div class="h_nav">
												<h4>Marcas Populares</h4>
												<ul>
													<li><a href="produtos.php">Levis</a></li>
													<li><a href="produtos.php">Persol</a></li>
													<li><a href="produtos.php">Nike</a></li>
													<li><a href="produtos.php">New Balance</a></li>
														<!--<li><a href="produtos.php">Edwin</a></li>
													<li><a href="produtos.php">Jack & Jones</a></li>
													<li><a href="produtos.php">Paul Smith</a></li>
													<li><a href="produtos.php">Ray-Ban</a></li>
													<li><a href="produtos.php">Wood Wood</a></li> -->
												</ul>	
											</div>												
										</div>
									</div>
								</div>
							</li>			
								<li><a class="color6" href="contact.php">Contato</a></li>
						</ul> 
					</div>
					<div class="col-sm-2 search form">
								
					</div>
				</div>		
			</div>
		</div>		
	</body>
<?php	
//Fechar conexão
mysqli_close($conecta);
?>
