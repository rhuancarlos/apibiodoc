<div class="accordion" id="accordionExample">

  <div class="card">
    <div class="card-header" id="heading1">
      <h2 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <strong>1 - Autenticação</strong>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="heading1" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-autenticacao.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading2">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <strong>2 - Atendimentos</strong>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse " aria-labelledby="heading2" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-atendimentos.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading3">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTree" aria-expanded="false" aria-controls="collapseTree">
          <strong>3 - Especialidades</strong>
        </button>
      </h2>
    </div>
    <div id="collapseTree" class="collapse " aria-labelledby="heading3" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-especialidade.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading4">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
          <strong>4 - Espaço Fisico</strong>
        </button>
      </h2>
    </div>

    <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-espacofisico.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading5">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
          <strong>5 - Pacientes</strong>
        </button>
      </h2>
    </div>

    <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-pacientes.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading6">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
          <strong>6 - Convênios</strong>
        </button>
      </h2>
    </div>

    <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-convenios.php');?>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header" id="heading7">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
          <strong>7 - Profissionais</strong>
        </button>
      </h2>
    </div>

    <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-profissionais.php');?>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="heading8">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
          <strong>8 - Procedimentos</strong>
        </button>
      </h2>
    </div>

    <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-procedimentos.php');?>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="heading9">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
          <strong>9 - Agendamentos</strong>
        </button>
      </h2>
    </div>

    <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-agendamentos.php');?>
      </div>
    </div>
  </div>


  <div class="card">
    <div class="card-header" id="heading10">
      <h2 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
          <strong>10 - Laudos</strong>
        </button>
      </h2>
    </div>

    <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordionExample">
      <div class="card-body">
        <?php include_once('rotas/secao-laudos.php');?>
      </div>
    </div>
  </div>






</div>