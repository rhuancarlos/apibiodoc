<h3><strong>Consulta de Procedimentos</strong></h3>
<span class="end2">
	
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd2">Por Parametros</button>
	<div class="collapse" id="collapseEnd2">
		<div class="card card-body">
			<?PHP //require_once('endpoint_pacientes_por_parametros.php');?>
		  	<?PHP require_once('endpoint_procedimentos.php');?>
		</div>
	</div>

	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd3">Cadastro / Atualização</button>
	<div class="collapse" id="collapseEnd3">
		<div class="card card-body">
			<?PHP require_once('endpoint_procedimentos_cadastro.php');?>
		</div>
	</div>

</span>