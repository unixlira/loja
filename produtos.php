<?php 
require_once 'conexao/conexao.php';
//Iniciar sessao
session_start();

if (!isset($_SESSION['user_portal'])) {
    header('location:account.php');
}
?>
<!DOCTYPE php>
<php>
<head>
<title>Up Style | Produtos</title>
</head>
<body>
<!--header-->
<?php include 'header.php'; ?>
<!--/header-->
<!--content-->
<div class="products">
	<div class="container">
		<h1>Produtos</h1>
		<div class="col-md-9">
			<div class="content-top1">
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi2.png" alt="" />
						</a>
						<h3><a href="detalhe.php">T-Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi4.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>	
			<div class="content-top1">
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi1.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi3.png" alt="" />
						</a>
						<h3><a href="detalhe.php">T-Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi5.png" alt="" />
						</a>
						<h3><a href="detalhe.php">T-Shirt</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>	
			<div class="content-top1">
				<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi6.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Jeans</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi7.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			<div class="col-md-4 col-md3">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="detalhe.php">
							<img class="img-responsive" src="images/pi.png" alt="" />
						</a>
						<h3><a href="detalhe.php">Tops</a></h3>
						<div class="price">
								<h5 class="item_price">$300</h5>
								<a href="#" class="item_add">Comprar</a>
								<div class="clearfix"> </div>
						</div>
						
					</div>
				</div>	
			
			<div class="clearfix"> </div>
			</div>	
		</div>
		<br>
		<div class="col-md-3 product-bottom">
			<!--categories-->
				<div class=" rsidebar span_1_of_left">
						<h3 class="cate">Categorias</h3>
							 <ul class="menu-drop">
							<li class="item1"><a href="#">Masculino </a>
								<ul class="cute">
									<li class="subitem1"><a href="detalhe.php">Lançamentos </a></li>
									<li class="subitem2"><a href="detalhe.php">Alternativo </a></li>
									<li class="subitem3"><a href="detalhe.php">Promoção </a></li>
								</ul>
							</li>
							<li class="item2"><a href="#">Feminino </a>
								<ul class="cute">
									<li class="subitem1"><a href="detalhe.php">Lançamentos </a></li>
									<li class="subitem2"><a href="detalhe.php">Alternativo </a></li>
									<li class="subitem3"><a href="detalhe.php">Promoção </a></li>
								</ul>
							</li>
							<li class="item3"><a href="#">Infantil</a>
								<ul class="cute">
									<li class="subitem1"><a href="detalhe.php">Masculino </a></li>
									<li class="subitem2"><a href="detalhe.php">Feminino </a></li>
									<li class="subitem3"><a href="detalhe.php">Promoção </a></li>
								</ul>
							</li>
							<li class="item4"><a href="#">Acessórios</a>
								<ul class="cute">
									<li class="subitem1"><a href="detalhe.php">Colar e Anel </a></li>
									<li class="subitem2"><a href="detalhe.php">Relógios </a></li>
									<li class="subitem3"><a href="detalhe.php">Promoção </a></li>
								</ul>
							</li>
									
							<li class="item4"><a href="#">Sapatos</a>
								<ul class="cute">
									<li class="subitem1"><a href="detalhe.php">Masculino </a></li>
									<li class="subitem2"><a href="detalhe.php">Feminino </a></li>
									<li class="subitem3"><a href="detalhe.php">Promoção </a></li>
								</ul>
							</li>
						</ul>
					</div>
				<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
<!--//menu-->
<!--seller-->
				<div class="product-bottom">
						<h3 class="cate">Mais Vendidos</h3>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="detalhe.php"><img class="img-responsive " src="images/pr.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="detalhe.php" >Camisa Dudalina suave de linho com algodão	  </a></h6>
							<span class=" price-in1"> R$40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="detalhe.php"><img class="img-responsive " src="images/pr1.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="detalhe.php" >Camisa Dudalina suave de linho com algodão	  </a></h6>
							<span class=" price-in1"> R$40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="detalhe.php"><img class="img-responsive " src="images/pr2.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="detalhe.php" >Camisa Dudalina suave de linho com algodão	  </a></h6>
							<span class=" price-in1"> R$40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>	
					<div class="product-go">
						<div class=" fashion-grid">
							<a href="detalhe.php"><img class="img-responsive " src="images/pr3.jpg" alt=""></a>	
						</div>
						<div class=" fashion-grid1">
							<h6 class="best2"><a href="detalhe.php" >Camisa Dudalina suave de linho com algodão	  </a></h6>
							<span class=" price-in1"> R$40.00</span>
						</div>	
						<div class="clearfix"> </div>
					</div>		
				</div>

<!--//seller-->
<!--tag-->
				<div class="tag">	
						<h3 class="cate">Tags</h3>
					<div class="tags">
						<ul>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">dress</a></li>
							<li><a href="#">design</a></li>
							<li><a href="#">fashion</a></li>
							<li><a href="#">lorem</a></li>
							<li><a href="#">dress</a></li>
						<div class="clearfix"> </div>
						</ul>
				</div>					
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!--//content-->

	<!--footer-->
	<?php include 'footer.php'; ?>
	<!--//footer-->
</body>
</php>