<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p> 
<h5><i><span class="badge badge-primary">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_PACIENTES_FILTRO.'</span></strong>'; ?>
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
    foreach($PARAMETROS_PACIENTES as $pacienteRoute) {
      $html = "<tr>";
      $html .= "<td>".$pacienteRoute['campo']."</td>";
      $html .= "<td>".$pacienteRoute['obrigatorio']."</td>";
      $html .= "<td>".$pacienteRoute['tipo']."</td>";
      $html .= "<td>".$pacienteRoute['criptografado']."</td>";
      $html .= "<td>".$pacienteRoute['descricao']."</td>";
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
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_PACIENTES_FILTRO.'</span></strong>'; ?>
</div>

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
{
    "status": "sucesso",
    "size": "",
    "retorno": [
        {
          "id": "0985b78e84652f73a8a13dee986dfdfk3kkjhjhb",
          "nome": "PAC INTEGRAÇÃO 240321",
          "data_nascimento": "2000-01-01",
          "nome_mae": "MÃE PACINTEGRAÇÃO 240321",
          "sexo": null,
          "telefone1": "8699999955",
          "telefone2": "8699999955",
          "telefone3": "8699999955",
          "email": null,
          "bairro": null,
          "endereco": null,
          "numero": null,
          "cep": null,
          "cidade_descricao": null,
          "rg": null,
          "cpf": null,
          "created": "2021-03-27 17:40:56",
          "integracao_paciente_id": "ID/SEQUENCIAL NO SISTEMA DE ORIGEM",
          "integracaosoftware_key": "TOKEN DE INTEGRAÇÃO ENTRE SISTEMAS"
        },
        {
          ...
        }
     ],
    "mensagem": ""
}
  </pre>
</div>