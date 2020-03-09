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
            "id": "a883824b967de175851469daf870831ea36e8",
            "nome": "SZKBEL LSMK BUENO",
            "data_nascimento": "1999-01-01",
            "nome_mae": "ANGELITA LIMA BUENO",
            "sexo": "F ",
            "estado_civil_descricao": null,
            "telefone1": "9999999999",
            "telefone2": "9999999999",
            "telefone3": null,
            "email": "",
            "bairro": "BAIRRO TESTE DEMO",
            "endereco": "ENDEREÇO TESTE PACIENTE DEMO",
            "numero": "S                 ",
            "cep": "64000000  ",
            "cidade_descricao": "Francisco Ayres",
            "rg": "999999999999",
            "cpf": "                    "
        },
        {
          ...
        }
     ],
    "mensagem": ""
}
  </pre>
</div>