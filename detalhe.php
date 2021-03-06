
<?php 

require_once 'conexao/conexao.php';

if (isset($_GET['codigo'])) {
    $produto_id = $_GET['codigo'];
} else {
    header('Location:index.php');
}

//consultar a tabela
$consulta = 'SELECT * ';
$consulta .= 'FROM produtos ';
$consulta .= "WHERE id = {$produto_id} ";
$detalhe = mysqli_query($conecta, $consulta);

//testar erro
if (!$detalhe) {
    die('<h1>Error: Fail connect in DATABASE</h1>');
} else {
    $dados_detalhe = mysqli_fetch_assoc($detalhe);
    $nome = $dados_detalhe['nome'];
    $preco = $dados_detalhe['preco'];
    $pagina = $dados_detalhe['pagina'];
}

// if (!isset($_SESSION['user_portal'])) {
//     alert('Você precisa se cadastrar para Comprar.');
// }

?>
<!DOCTYPE html>
<html>
<!--header-->
<?php include 'header.php'; ?>
<!--/header-->
<div class="single">
	<div class="container">
		<div class="col-md-9">
			<div class="col-md-5 grid">		
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="<?php  echo $dados_detalhe['pagina']; ?>">
							<div class="thumb-image"> <img src="<?php  echo $dados_detalhe['pagina']; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="<?php  echo $dados_detalhe['pagina']; ?>">
							<div class="thumb-image"> <img src="<?php  echo $dados_detalhe['pagina']; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="<?php  echo $dados_detalhe['pagina']; ?>">
						<div class="thumb-image"> <img src="<?php  echo $dados_detalhe['pagina']; ?>" data-imagezoom="true" class="img-responsive"> </div>
						</li> 
					</ul>
				</div>
			</div>
			<div class="col-md-7 single-top-in">
				<div class="single-para simpleCart_shelfItem">
					<h1><?php  echo utf8_encode($dados_detalhe['nome']); ?></h1>
					<p><?php  echo utf8_encode($dados_detalhe['detalhe']); ?></p>
					<div class="star-on">
						<ul>
							<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
							<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
							<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
							<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
							<li><a href="#"><i class="glyphicon glyphicon-star"> </i></a></li>
						</ul>
						<div class="review">
							<a href="#"> 103 avaliações </a>/
							<a href="#"> Faça uma avaliação</a>
						</div>
					<div class="clearfix"> </div>
					</div>					
						<label  class="add-to item_price">R$<?php  echo number_format($preco, 2, ',', '.');
 ?></label>					
						<div class="available">
							<h6>Opções disponíveis:</h6>
							<ul>							
								<li>Tamanho:
									<select>
										<option>Pequeno</option>
										<option>Médio  </option>
										<option>Grande </option>							
									</select>
								</li>
							</ul>
						</div>
						
						<a id="comprar" href="checkout.php" class="cart item_add">Comprar</a>
				</div>
				<div class="face">
					<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&width=450&layout=standard&action=like&size=large&show_faces=false&share=true&height=35&appId" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe><br>
				</div>	
		</div>
		<div class="clearfix"> </div>
			<div class="content-top1">
				<div class="row">
					<?php
                        $dados_detalhe = mysqli_fetch_assoc($detalhe);

                            ?>
							<div class="col-md-4 col-md3">
									<div class="col-md1 simpleCart_shelfItem">
								<a href="detalhe.php">
									<img class="img-responsive" src="<?php echo $dados_detalhe['pagina']; ?>" alt="" />
								</a>
								<h3><a href="detalhe.php"><?php echo utf8_encode($dados_detalhe['nome']); ?></a></h3>
								<div class="price">
										<h5 class="item_price">R$<?php echo number_format('%.2n', $dados_detalhe['preco']); ?></h5>
										<a href="checkout.php" class="item_add">Comprar</a>
										<div class="clearfix"> </div>
								</div>
							</div>
						</div>
					<?php

                        unset($lista);
                        //Liberar dados da memória do servidor
                        mysqli_free_result($lista);
                    ?>
				</div>						
				<div class="clearfix"> </div>
			</div>		
		</div>
		<!----->
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
<!--footer-->
<?php include 'footer.php'; ?>
<!--//footer-->
