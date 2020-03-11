<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
    <strong>EN: </strong>
    <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_PROFESSIONAL_PAGINACAO.'</span></strong>'; ?>
</div>

<p>Estrutura da requisição:</p>
<li>Authentication: <small><code>Basic Auth</code></small></li>
<p> 
- Usuario : <code><span class="badge badge-dark">chave</span> recebida no response de autenticação</code><br>
- Senha : <code><span class="badge badge-dark">token</span> recebido no response de autenticação</code></p>

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
    foreach($PARAMETROS_PROFISSIONAIS_PAGINACAO as $laudosRoute) {
      $html = "<tr>";
      $html .= "<td>".$laudosRoute['campo']."</td>";
      $html .= "<td>".$laudosRoute['obrigatorio']."</td>";
      $html .= "<td>".$laudosRoute['tipo']."</td>";
      $html .= "<td>".$laudosRoute['criptografado']."</td>";
      $html .= "<td>".$laudosRoute['descricao']."</td>";
      $html .= "</tr>";
      echo $html;
    }
    ?>
  </tbody>
</table>
<li>Paginação</li>
<small>Por padrão esta rota retorna um limite de 100 registros, caso seja especificado os parametros acima poderá ter seu retorno dinâmico.</small>
O resultado da requisição será conforme abaixo:
<strong>EN</strong>
<div class="alert alert-success" role="alert">
    <pre>
        {
            "firstName": "string",
            "lastName": "string",
            "birthDate": "Date",
            "mother": "string",
            "nationality": "string",
            "gender": "string",
            "maritalStatus": "string",
            "contacts": {
                "phone1": "string",
                "phone2": "string",
                "phone3": "string",
                "email": "string",
                "district": "string",
                "address": "string",
                "number": "string"
                "zipCode": "string",
                "city":"string",
            },
            "documents": {
                "type": "string",
                "number": "string",
            },
            "occupations":"string"
        }
    </pre>
</div>