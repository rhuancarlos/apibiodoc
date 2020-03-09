<h3><strong>Atendimentos</strong></h3>
<p>No biogeneses a cada atendimento prestado a um paciente é feito uma nova <strong>marcação</strong>, esta por si gera <strong>um novo código de atendimento e prontuário</strong>. Nesta seção temos as rotas para consulta de atendimentos realizados e também os agendados(marcados).</p>
<p>
	<i>Para consumir os dados desta seção você irá necessitar de um <strong>Usuário = <code>chave</code> e Senha = <code>token</code></strong> obtidos na seção anterior.</i>
</p>
<span class="end2">
	<p>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseEnd2" aria-expanded="false" aria-controls="collapseExample">Marcações No Periodo</button>
	</p>
	<div class="collapse" id="collapseEnd2">
		<div class="card card-body">
			<?PHP require_once('endpoint_atendimentos_marcacoesNoPeriodo.php');?>
		</div>
	</div>
</span>