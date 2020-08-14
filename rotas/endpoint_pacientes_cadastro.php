<h4>Cadastro</h4>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_PACIENTES_CADASTRO.'</span></strong>'; ?>
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
      foreach($PARAMETROS_CADASTRO_PACIENTE as $pacienteCadastro) {
        $html = "<tr>";
        $html .= "<td>".$pacienteCadastro['campo']."</td>";
        $html .= "<td>".$pacienteCadastro['obrigatorio']."</td>";
        $html .= "<td>".$pacienteCadastro['tipo']."</td>";
        $html .= "<td>".$pacienteCadastro['criptografado']."</td>";
        $html .= "<td>".$pacienteCadastro['descricao']."</td>";
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

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
{
    "status": "sucesso",
    "retorno": {
        "id": "88184",
        "nome": "NOME PACIENTE",
        "nome_mae": "NOME MAE",
        "endereco": null,
        "numero": null,
        "complemento": null,
        "cidade": null,
        "estado": null,
        "telefone1": "8699999999",
        "telefone2": "",
        "data_nascimento": "01/01/1999",
        "prontuario_id": "88184",
        "num_prontuario": "88184",
        "dados_convenio_id": 96890
    },
    "mensagem": ""
}
  </pre>
</div>
<h4>Atualização</h4>
<br>
<div class="alert alert-warning">
  Para este tipo de ação deve-se seguir o mesmo padrão de parametros no processo de cadastro. porém, deve-se <strong>informar o parametor "id" com o valor criptografado. Com o envio do parametro "ID" à api deverá realizar a atualização dos dados conforme sejam informados em parametros.</strong>
</div>