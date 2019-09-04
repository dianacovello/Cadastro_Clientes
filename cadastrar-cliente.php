<style type="text/css">
label {
	font-weight: bold;
}
</style>

<h1>Cadastrar Cliente</h1>	

<div class="row justify-content-center">
	<div class="col-8">
		<form action="index.php?page=salvar-cliente&acao=cadastrar" method="POST" >
			<div class="form-group row form-control" >
				<label>Nome do Cliente</label>
				<input type="text" name="nome_cliente" class="form-control" placeholder="Nome Completo">

				<div class="row">
					<div class="col-6">
						<label>E-mail</label>
						<input type="email" name="email_cliente" class="form-control" placeholder="Email">	
					</div>
					<div class="col-6">
						<label>Telefone Celular</label>
						<input type="number" name="cel_cliente" class="form-control" placeholder="Telefone">
					</div>
				</div>

				<div class="row">
					<div class="col-6">
						<label>Endereço</label>
						<input type="text" name="endereco_cliente" class="form-control" placeholder="Endereço">
					</div>
				</div>

				<label>Observacoes</label>
				<textarea type="textarea" name="obs_cliente" class="form-control" rows="3"></textarea>
			</div>
			<div class="form-group row justify-content-center">
				<button type="submit" class="btn btn-primary">Enviar</button>
			</div>
		</form>
	</div>
</div>