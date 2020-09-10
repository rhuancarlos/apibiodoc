<br>
Os parametros abaixo não são obrigatórios, contudo o endpoint espera que sejam enviados ao menos 1 parâmetro.</i></small></p> 
<h5><i><span class="badge badge-primary">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_PROCEDIMENTOS.'</span></strong>'; ?>
</div>

<h5><strong>Parâmetros</strong></h5>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo(s)</th>
      <th scope="col">Obrigatório</th>
      <th scope="col">Tipo</th>
      <th scope="col">Cripto</th>
      <th scope="col">Descricão</th>
    </tr>
  </thead>
  <tbody>
    <?PHP 
    foreach($PARAMETROS_PROCEDIMENTOS as $procedimentoRoute) {
      $html = "<tr>";
      $html .= "<td>".$procedimentoRoute['campo']."</td>";
      $html .= "<td>".$procedimentoRoute['obrigatorio']."</td>";
      $html .= "<td>".$procedimentoRoute['tipo']."</td>";
      $html .= "<td>".$procedimentoRoute['criptografado']."</td>";
      $html .= "<td>".$procedimentoRoute['descricao']."</td>";
      $html .= "</tr>";
      echo $html;
    }
    ?>
  </tbody>
</table>

<p>Estrutura da requisição:</p>
<li>Authentication: <small><code>Basic Auth</code></small></li>
<p> 
- Usuario : <code><span class="badge badge-dark">chave</span> recebida no response de autenticação</code><br>
- Senha : <code><span class="badge badge-dark">token</span> recebido no response de autenticação</code>
</p>

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
    {
        "status": "sucesso",
        "size": 1,
        "retorno": [
            {
                "id": "da4181896a501d6533f85e27ae3b387e6988",
                "descricao": "CONSULTA CARDIOLOGISTA",
                "codigo": "10101012",
                "valor": null,
                "valor_parceiro": "40"
            }
        ],
        "mensagem": ""
    }
  </pre>
</div>
<hr>
  Esta requisição deverá ser feita na seguinte rota</i></small></p>
  <h5><i><span class="badge badge-warning">GET</span></i></h5>
  <div class="alert alert-info" role="alert">
    <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_PROCEDIMENTOS.'</span></strong>'; ?>
  </div>

  <h5><strong>Parâmetros</strong></h5>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Campo(s)</th>
        <th scope="col">Obrigatório</th>
        <th scope="col">Tipo</th>
        <th scope="col">Cripto</th>
        <th scope="col">Descricão</th>
      </tr>
    </thead>
    <tbody>
      <?PHP 
      foreach($ROTA_FUNCAO_GET_PROCEDIMENTOS as $prodecimento) {
        $html = "<tr>";
        $html .= "<td>".$prodecimento['campo']."</td>";
        $html .= "<td>".$prodecimento['obrigatorio']."</td>";
        $html .= "<td>".$prodecimento['tipo']."</td>";
        $html .= "<td>".$prodecimento['criptografado']."</td>";
        $html .= "<td>".$prodecimento['descricao']."</td>";
        $html .= "</tr>";
        echo $html;
      }
      ?>
    </tbody>
  </table>

<p>Estrutura da requisição:</p>
<li>Authentication: <small><code>Basic Auth</code></small></li>
<p> 
- Usuario : <code><span class="badge badge-dark">chave</span> recebida no response de autenticação</code><br>
- Senha : <code><span class="badge badge-dark">token</span> recebido no response de autenticação</code></p>
<li>Params:</li>
<p>
<span class="badge badge-dark">Conforme descrito na tabela acima</span>
</p>

A requisição ficará da seguinte forma:
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_MARCACAO_PERIODO.ROTA_FUNCAO_MARCACAO_PERIODO_PARAMETROS.'</span></strong>'; ?>
</div>

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
    {
        "status": "sucesso",
        "size": 1,
        "retorno": [
            {
                "id": "0985b78e8465223f73a8a13dee986d76834a4611",
                "descricao": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT",
                "codigo": "10101012",
                "valor": 0,
                "valor_parceiro": 0
            }
        ],
        "mensagem": ""
    }
  </pre>
</div>