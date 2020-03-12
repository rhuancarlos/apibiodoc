<h3><strong>Consulta de Profissionais</strong></h3>
<p>-</p>
<span class="end2">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd1">Todos os Profissionais</button>
	<div class="collapse" id="collapseEnd1">
		<div class="card card-body">
			<?PHP require_once('endpoint_profissionais_geral.php');?>
		</div>
	</div>	
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd2">Por Parametros</button>
	<div class="collapse" id="collapseEnd2">
		<div class="card card-body">
			<?PHP require_once('endpoint_profissionais_por_parametros.php');?>
		</div>
	</div>	
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd3">Com Paginação</button>
	<div class="collapse" id="collapseEnd3">
		<div class="card card-body">
			<?PHP require_once('endpoint_profissionais_paginacao.php');?>
		</div>
	</div>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd4">Com Horários</button>
	<div class="collapse" id="collapseEnd4">
		<div class="card card-body">
			<?PHP require_once('endpoint_profissionais_com_horarios.php');?>
		</div>
	</div>
</span>