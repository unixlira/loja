<!DOCTYPE html>
<html>
	<body>
	<!--header-->
	<?php include 'header.php'; ?>
	<!--/header-->
	<div class="container">
		<div class="register">
			<h1>Criar Conta</h1>
			<form method="POST" action="cadastro.php"> 
				<div class="col-md-6  register-top-grid">				
					<div class="mation log">						
						<span>Nome</span>
						<input type="text"  id="nome" name="nome"> 
						<span>Email</span>
						<input type="text"  id="email" name="email">
						<span>Confirme a senha</span>
						<input type="text" name="senha" id="senha">					
						<span>Cpf</span>
						<input type="text"  id="cpf" name="cpf">
						<span>Endereço</span>
						<input type="text"  id="nome" name="nome">
						<span>Complemento</span>
						<input type="text"  id="complemento" name="complemento">
						<span>Cidade</span>
						<input type="text"  id="cidade" name="cidade">						
					</div>					
				</div>
				<div class=" col-md-6 register-bottom-grid">
					<div class="mation">
						<span>Sobrenome</span>
						<input type="text" name="sobrenome" id="sobrenome">					
						<span>Senha</span>
						<input type="password" id="senha" name="senha" >					
						<span>Data Nascimento</span>
						<input type="text" name="nascimento" id="nascimento">
						<span>Rg</span>
						<input type="text" name="rg" id="rg">
						<span>Número</span>
						<input type="text" name="numero" id="numero">
						<span>Bairro</span>
						<input type="text" name="bairro" id="bairro">
						<span>Estado</span>
						<input type="text" name="estado" id="estado">
					</div>
				</div>
					<div class="clearfix"> </div>
					<a class="news-letter" href="#ao inscrever você concorda com os termos e regras da loja etc...">
						<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Inscrever</label>
					</a>
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
		<?php include 'footer.php'; ?>
		<!--//footer-->
	</body>
</html>