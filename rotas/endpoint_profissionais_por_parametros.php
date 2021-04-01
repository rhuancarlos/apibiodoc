<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p> 
<h5><i><span class="badge badge-primary">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_PROFISSIONAIS_FILTRO.'</span></strong>'; ?>
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
    foreach($PARAMETROS_PROFISSIONAIS as $profissionalRoute) {
      $html = "<tr>";
      $html .= "<td>".$profissionalRoute['campo']."</td>";
      $html .= "<td>".$profissionalRoute['obrigatorio']."</td>";
      $html .= "<td>".$profissionalRoute['tipo']."</td>";
      $html .= "<td>".$profissionalRoute['criptografado']."</td>";
      $html .= "<td>".$profissionalRoute['descricao']."</td>";
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

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
  {
      "status": "sucesso",
      "size": 1,
      "retorno": [
          {
            "id": "3389488a51625f68eee0a98a685db37d17",
            "nome": "PROFISSIONAL_58",
            "data_nascimento": "-",
            "nome_mae": null,
            "sexo": null,
            "telefone1": "",
            "telefone2": "",
            "telefone3": null,
            "email": "",
            "bairro": "",
            "endereco": "",
            "numero": null,
            "cep": "               ",
            "cidade_descricao": null,
            "rg": "",
            "cpf": "",
            "funcao_descricao": "MÉDICO",
            "sigla_conselho": "CRM       ",
            "num_conselho": "2501"
          }
      ],
      "mensagem": ""
  }
  </pre>
</div>