<h1>Listar Clientes</h1>

<?php 
$sql = "SELECT * FROM cliente";


$resultado = $conn->query($sql) or die($conn->error);

$qtd = $resultado->num_rows;

if ($qtd >0) {
	print "<p>Existe(m) <b> $qtd </b> registro(s)";
	print "<table class='table table-striped table-bordered table-hover'>";
	print "<tr><th>#</th>";
	print "<th>Nome do Cliente</th>";
	print "<th>Telefone Celular</th>";
	print "<th>E-mail</th>";
	print "<th>Endereço</th>";
	print "<th>Observações</th>";
	print "<th>Ações </th></tr>";

	while ($row = $resultado->fetch_assoc()){
		print "<tr>";
		print "<td>" . $row["id_cliente"] . "</td>";
		print "<td>" . $row["nome_cliente"] ."</td>";
		print "<td>" . $row["cel_cliente"] . "</td>";
		print "<td>" . $row["email_cliente"] . "</td>";
		print "<td>" . $row["endereco_cliente"] . "</td>";
		print "<td>" . $row["obs_cliente"] . "</td>";
		print "<td> <div class='btn-group'> 
		<button class='btn btn-success' onclick=\"location.href='index.php?page=editar-cliente&id_cliente=".$row["id_cliente"] ."'\"><i class='fa fa-edit'></i></button>
		<button class='btn btn-danger' onclick= \"if(confirm('Tem certeza que deseja excluir?')){location.href='index.php?page=salvar-cliente&acao=excluir&id_cliente=".$row["id_cliente"]."'}else{false;}\"><i class='fa fa-trash'></i></button> 
		</td> </tr>";
	} 
} else {
	print "<p>Não foram encontrado(s) registro(s)";
}
?>

