<?php require_once 'conexao/conexao.php'; ?>
<?php
//inserir no banco
if (isset($_POST)) {
    $cliente = array();

    if (isset($_POST['nome'])) {
        $cliente['nome'] = $_POST['nome'];
        $cliente['sobrenome'] = $_POST['sobrenome'];
        $cliente['email'] = $_POST['email'];
        $cliente['nascimento'] = $_POST['nascimento'];
        $cliente['cpf'] = $_POST['cpf'];
        $cliente['telefone'] = $_POST['telefone'];
        $cliente['endereco'] = $_POST['endereco'];
        $cliente['complemento'] = $_POST['complemento'];
        $cliente['cep'] = $_POST['cep'];
        $cliente['cidade'] = $_POST['cidade'];
        $cliente['estados'] = $_POST['estados'];
        $cliente['senha'] = $_POST['senha'];

        if (gravarCliente($conecta, $cliente)) {
            echo "<div class='msgcad'><h1>Gravado com Sucesso.</h1></div>";
        } else {
            echo "<div class='msgcad'><h1>Algo deu errado, reenvie o cadastro novamente.</h1></div>";
        }
    }
}

function gravarCliente()
{
    $campos = '(nome,sobrenome,email,nascimento,cpf,telefone,endereco,complemento,cep,cidade,estados,senha)';
    $values = "('{$cliente['nome']}','{$cliente['sobrenome']}','{$cliente['email']}','{$cliente['nascimemnto']}','{$cliente['cpf']}','{$cliente['telefone']}','{$cliente['endereco']}','{$cliente['complemento']}','{$cliente['cep']}','{$cliente['cidade']}','{$cliente['estados']}','{$cliente['senha']}')";

    print_r($values);
    $query = "INSERT INTO users {$campos} VALUES {$values}";

    if (mysqli_query($conecta, $query)) {
        return true;
    } else {
        return false;
    }
}

?>

<?php include 'header.php'; ?>
<!--/header-->
	<div class="container">
		<div class="register">
			<h1>Criar Conta</h1>
			<form action="cadastro.php" method="post"> 
				<div class="col-md-6  register-top-grid">				
					<div class="mation log">						
						<span>Nome</span>
						<input type="text" name="nome">
						<span>Sobrenome</span>
						<input type="text" name="sobrenome">
						<span>Email</span>
						<input type="text" name="email">
						<span>Data de Nascimento</span>
						<input type="text" name="nascimento">
						<span>CPF</span>
						<input type="text" name="cpf">
						<span>Telefone</span>
						<input type="text" name="telefone">
					</div>					
				</div>
				<div class=" col-md-6 register-bottom-grid">
					<div class="mation">
						<span>Endereço</span>
						<input type="text" name="endereco">
						<span>Complemento</span>
						<input type="text" name="complemento">					
						<span>Cep</span>
						<input type="text" name="cep">
						<span>Cidade</span>
						<input type="text" name="cidade">
						<span>Estado</span>
						<select>
							<option name="estados">SP</option>
						</select>
						<span>Senha</span>
						<input type="password" name="senha">				
					</div>
				</div>
				<!-- <div class="clearfix"></div>	 
				<a class="news-letter" href="#ao inscrever você concorda com os termos e regras da loja etc..."><label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Aceito Termos e Condições de Uso</label></a> -->
				<input type="submit" value="CADASTRAR" id="cadastrar">
			</form>			
		</div>
	</div>
<!--footer-->
<?php include 'footer.php'; ?>
</body>
