<h3><strong>Consulta de Convênios Médicos</strong></h3>
<p>-Para consumir os dados desta seção você irá necessitar de um <strong>Usuário = <code>chave</code> e Senha = <code>token</code></strong> obtidos na seção anterior.</i>.</p>
<span class="end2">
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd2">Por Parametros</button>
	<div class="collapse" id="collapseEnd2">
		<div class="card card-body">
			<?PHP require_once('endpoint_convenios_consulta.php');?>
		</div>
	</div>

	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd3">Cadastro / Atualização</button>
	<div class="collapse" id="collapseEnd3">
		<div class="card card-body">
			<?PHP require_once('endpoint_convenios_cadastrar.php');?>
		</div>
	</div>
</span>