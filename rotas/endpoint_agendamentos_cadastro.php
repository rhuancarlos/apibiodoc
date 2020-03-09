<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_AGENDAMENTOS_CADASTRO.'</span></strong>'; ?>
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
      foreach($PARAMETROS_CADASTRO_AGENDAMENTO as $agendamentoCadastro) {
        $html = "<tr>";
        $html .= "<td>".$agendamentoCadastro['campo']."</td>";
        $html .= "<td>".$agendamentoCadastro['obrigatorio']."</td>";
        $html .= "<td>".$agendamentoCadastro['tipo']."</td>";
        $html .= "<td>".$agendamentoCadastro['criptografado']."</td>";
        $html .= "<td>".$agendamentoCadastro['descricao']."</td>";
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
    "situacao": "sucesso", 
    "idMarcacao": "0985b78e84652f73a8a13dee989d76231a6611", 
    "statusPresente": [],
    "mensagem": "Salvo com sucesso.",
    "avaliacao_atendimento": false
}
  </pre>
</div>