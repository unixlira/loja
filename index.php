<?php require_once 'conexao/conexao.php';
//Abrir consulta ao banco de dados na tabela produtos
    setlocale(LC_ALL, 'pt_BR');
    $consulta_produtos = 'SELECT id, nome, pagina, preco ';
    $consulta_produtos .= 'FROM produtos';
    if (isset($_GET['produto'])) {
        $nome_produto = $_GET['produto'];
        $consulta_produtos .= " WHERE nome LIKE '%{$nome_produto}%' ";
    }
    $produtos = mysqli_query($conecta, $consulta_produtos);

    if (!$produtos) {
        die('<h1>Error: Fail connect in DATABASE</h1>');
    }

?>
<!DOCTYPE html>
<html>	
	<body>
	<!--header-->
	<?php include 'header.php'; ?>
	<!--header-->
	<!--banner-->
	<div class="banner">
		<div class="col-sm-3 banner-mat">
			<img class="img-responsive"	src="images/vr2.jpg" alt="">
		</div>
		<div class="col-sm-6 matter-banner">
			<div class="slider">
				<div class="callbacks_container">
					<ul class="rslides" id="slider">
						<li>
							<img src="images/1.jpg" alt="">
						</li>
						<li>
							<img src="images/2.png" alt="">   
						</li>
						<li>
							<img src="images/3.png" alt="">
						</li>	
						<li>
							<img src="images/4.jpg" alt="">
						</li>	
					</ul>
				</div>
			</div>
		</div>
		<div class="col-sm-3 banner-mat">
			<img class="img-responsive" src="images/vr1.jpg" alt="">
		</div>
		<div class="clearfix"> </div>
	</div>
	<!--//banner-->
	<!--content-->
		<div class="content">
			<div class="container">
				<div class="content-top" id="busca">
					<h1>Novidades até 70% OFF</h1>
					<div class="col-md- top-footer1">
							<form action="index.php" method="get">
								<input style="width:50%;margin-left:200px;" placeholder="Pesquisar" type="text"  value="Pesquisar..." name="produto">
								<input style="width:15%;" type="submit"  value="Enviar" >
							</form>
							<br>
					</div>						
						<div class="row">
							<div class="content-top1">	
								<?php
                                    while ($listagem = mysqli_fetch_assoc($produtos)) {
                                        ?>							
								<div class="col-md-3 col-md2">
									<div class="col-md1 simpleCart_shelfItem">										
										<a href="single.php?codigo=<?php echo $listagem['id']; ?>">
											<img class="img-responsive" src="<?php echo $listagem['pagina']; ?>" alt="<?php echo $listagem['nome']; ?>" title=" <?php echo utf8_encode($listagem['nome']); ?>" />
										</a>
										<h3><a href="single.phpcodigo=<?php echo $listagem['id']; ?>"><?php echo utf8_encode($listagem['nome']); ?></a></h3>
										<div class="price">
											<h5 class="item_price">R$ <?php echo number_format($listagem['preco'], 2, ',', '.'); ?></h5>
											<a href="#" class="item_add">Comprar</a>
											<div class="clearfix"> </div>
										</div>	
									</div>
								</div>
								<?php
                                    }
                                    //Liberar dados da memória do servidor
                                    // mysqli_free_result($produtos);
                                ?>
							</div>								
						</div>							
						<div class="clearfix"> </div>
					</div>	
				</div>
			</div>
		</div>
	<!--content-->
		<!--footer-->
			<?php include 'footer.php'; ?>
		<!--footer-->
	</body>
</html>
<?php
    //Fechar conexão
    mysqli_close($conecta);
