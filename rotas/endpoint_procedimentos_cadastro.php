<h4>Cadastro</h4>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_PROCEDIMENTO_CADASTRO.'</span></strong>'; ?>
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
      foreach($PARAMETROS_CADASTRO_PROCEDIMENTO as $procedimentoCadastro) {
        $html = "<tr>";
        $html .= "<td>".$procedimentoCadastro['campo']."</td>";
        $html .= "<td>".$procedimentoCadastro['obrigatorio']."</td>";
        $html .= "<td>".$procedimentoCadastro['tipo']."</td>";
        $html .= "<td>".$procedimentoCadastro['criptografado']."</td>";
        $html .= "<td>".$procedimentoCadastro['descricao']."</td>";
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
        "retorno": [
            {
                "id": "da4141896a500d6533f81e27ae3b187e6988",
                "descricao": "TESTE",
                "codigo": "123456789",
                "valor": 0,
                "valor_parceiro": 0,
                "integracao_procedimento_id": "2342",
                "integracaosoftware_key": "0000000000000000000000000000000-000000000"
            }
        ],
        "mensagem": "Registro salvo com sucesso"
    }
  </pre>
</div>
<h4>Atualização</h4>
<br>
<div class="alert alert-warning">
  - Informar o parâmetro "id" com o valor criptografado e correspondente ao registro no sistemo de destino<br>
  - Informar o parâmetro "integracaosoftware_key"<br>
  - Seguir o mesmo padrão de parâmetros no processo de cadastro.<br>
</div>