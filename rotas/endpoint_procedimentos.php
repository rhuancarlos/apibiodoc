<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p> 
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