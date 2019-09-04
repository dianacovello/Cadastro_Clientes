<style type="text/css">
label {
	font-weight: bold;
}
</style>

<h1>Editar Cliente</h1>
<?php
$sql = "SELECT * FROM cliente WHERE id_cliente = ".$_REQUEST["id_cliente"]; 

$result = $conn->query($sql) or die($conn->error);

$qtd = $result->num_rows;

if($qtd > 0){
	while($row = $result->fetch_assoc()){ 
		?>
		<div class="row justify-content-center">
			<div class="col-8">
				<form action="index.php?page=salvar-cliente&acao=editar&id_cliente=<?php print $_REQUEST["id_cliente"]; ?>" method="POST" >
					<div class="form-group row form-control" >
						<label>Nome do Cliente</label>
						<input type="text" name="nome_cliente" class="form-control" value="<?php print $row["nome_cliente"]; ?>">

						<div class="row">
							<div class="col-6">
								<label>E-mail</label>
								<input type="email" name="email_cliente" class="form-control" value="<?php print $row["email_cliente"]; ?>">
							</div>

							<div class="col-6">
								<label>Telefone Celular</label>
								<input type="number" name="cel_cliente" class="form-control" value="<?php print $row["cel_cliente"]; ?>">
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<label>Endereço</label>
								<input type="text" name="endereco_cliente" class="form-control" value="<?php print $row["endereco_cliente"]; ?>">
							</div>
						</div>

						<label>Observacoes</label>
						<textarea type="textarea" name="obs_cliente" id="obs_cliente" class="form-control" rows="4" ><?php print $row["obs_cliente"]; ?></textarea>
					</div>
					<div class="form-group row justify-content-center">
						<button type="submit" class="btn btn-primary">Enviar</button> &nbsp&nbsp
						<a class='btn btn-danger' href="index.php?page=listar-cliente">Voltar</a>
					</div>
				</form>
			</div>
		</div>

		<?php
	}//fim do while
}else{
	print "Não encontrou resultado";
}

?>

