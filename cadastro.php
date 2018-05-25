<?php 
require_once 'conexao/conexao.php';

    if (isset($_POST['nome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = md5($_POST['password']);
        $confirma_senha = md5($_POST['remember_token']);
        $nascimento = $_POST['nascimento'];
        $rg = $_POST['rg'];
        $cpf = $_POST['cpf'];
        $endereco = $_POST['endereco'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $cep = $_POST['cep'];
        $telefone_res = $_POST['telefone_res'];
        $telefone_cel = $_POST['telefone_cel'];

        $inserir = "INSERT INTO 'users' ";
        $inserir .= "('', 'nome', 'sobrenome', 'email', 'password', 'remember_token', 'nascimento', 'rg', 'cpf', 'endereco', 'bairro', 'numero', 'complemento', 'cidade', 'estado', 'cep', 'telefone_res', 'telefone_cel') ";
        $inserir .= 'VALUES  ';
        $inserir .= "('','$nome','$sobrenome','$email','$senha','$confirma_senha', $nascimento, $rg, $cpf, '$endereco', '$bairro', $numero, '$complemento','$cidade', '$estado', $telefone_res, $telefone_cel )";

        $operacao_inserir = mysqli_query($conecta, $inserir);
        print_r($operacao_inserir);
        if (!$operacao_inserir) {
            die('<h1>Error: Fail connect in DATABASE</h1>');
        }
    }
?>
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
						<input type="password" name="remember_token" id="remember_token">					
						<span>Cpf</span>
						<input type="text"  id="cpf" name="cpf">
						<span>Endereço</span>
						<input type="text"  id="endereco" name="endereco">
						<span>Complemento</span>
						<input type="text"  id="complemento" name="complemento">
						<span>Cidade</span>
						<input type="text"  id="cidade" name="cidade">
						<span>Telefone Residencial</span>
						<input type="text"  id="telefone_res" name="telefone_res">					
					</div>					
				</div>
				<div class=" col-md-6 register-bottom-grid">
					<div class="mation">
						<span>Sobrenome</span>
						<input type="text" name="sobrenome" id="sobrenome">					
						<span>Senha</span>
						<input type="password" name="password" id="password">					
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
						<span>Telefone Celular</span>
						<input type="text" name="telefone_cel" id="telefone_cel">
						<span>Cep</span>
						<input type="text" name="cep" id="cep">
						
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
<?php
//Fechar conexão
mysqli_close($conecta);
?>