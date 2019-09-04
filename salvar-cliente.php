<br>
<?php
$id_cliente = @$_REQUEST["id_cliente"];
$nome = @$_REQUEST["nome_cliente"];
$cel = @$_REQUEST["cel_cliente"];
$email = @$_REQUEST["email_cliente"];
$endereco = @$_REQUEST["endereco_cliente"];
$obs = @$_REQUEST["obs_cliente"];


switch($_REQUEST["acao"]){
	case "cadastrar":
		$sql = "INSERT INTO cliente (nome_cliente, cel_cliente, email_cliente, endereco_cliente, obs_cliente) 
				VALUES ('{$nome}','{$cel}','{$email}','{$endereco}','{$obs}')";

		$resultado = $conn->query($sql);

		if($resultado==true){

			print "<div class='alert alert-success'>Cadastrado com sucesso!</div>";
		}else{
			print "<div class='alert alert-danger'>Nao foi possivel cadastrar</div>";
		}
	break;

	case "editar":
		$sql = "UPDATE cliente SET 
					nome_cliente='{$nome}',
					cel_cliente='{$cel}', 
					email_cliente='{$email}',  
					endereco_cliente='{$endereco}',  
					obs_cliente='{$obs}'  
				WHERE id_cliente = '{$id_cliente}'";

		$result = $conn->query($sql) or die($conn->error);

		if($result==true){
			print "<div class='alert alert-success'>Editado com sucesso!</div>";
		}else{
			print "<div class='alert alert-danger'>Nao foi possivel  editar</div>";
		}
	break;

	case "excluir":
		$sql = "DELETE FROM cliente WHERE id_cliente = '{$id_cliente}'";

		$result = $conn->query($sql) or die($conn->error);

		if($result==true){
			print "<div class='alert alert-success'>Exluido com sucesso!</div>";
		}else{
			print "<div class='alert alert-danger'>Nao foi possivel  excluir</div>";
		}
	break;
}
?>

<a class='btn btn-primary' href="index.php?page=listar-cliente">Lista de Clientes</a>