<h4>Cadastro</h4>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_CONVENIOS_CADASTRO.'</span></strong>'; ?>
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
      foreach($PARAMETROS_CONVENIO_PACIENTE as $convenioCadastro) {
        $html = "<tr>";
        $html .= "<td>".$convenioCadastro['campo']."</td>";
        $html .= "<td>".$convenioCadastro['obrigatorio']."</td>";
        $html .= "<td>".$convenioCadastro['tipo']."</td>";
        $html .= "<td>".$convenioCadastro['criptografado']."</td>";
        $html .= "<td>".$convenioCadastro['descricao']."</td>";
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
          "id": "00000000000000000000000000000000000000",
          "nome": "PAC INTEGRAÇÃO 30032021",
          "data_nascimento": "2000-01-01",
          "nome_mae": "MÃE PACINTEGRAÇÃO 30032021",
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
          "created": "2021-03-30 10:10:44",
          "integracao_paciente_id": "115",
          "integracaosoftware_key": "000000000000000000000000000000-00000000"
        }
      ],
      "mensagem": "MENSAGEM RETORNO"
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