<p>Neste end-point é possivel obter a lista de todos os convênios médicos atendidos pela clínica.</p>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_CONVENIOS.'</span></strong>'; ?>
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
    foreach($PARAMETROS_CONVENIOS as $convenioRoute) {
      $html = "<tr>";
      $html .= "<td>".$convenioRoute['campo']."</td>";
      $html .= "<td>".$convenioRoute['obrigatorio']."</td>";
      $html .= "<td>".$convenioRoute['tipo']."</td>";
      $html .= "<td>".$convenioRoute['criptografado']."</td>";
      $html .= "<td>".$convenioRoute['descricao']."</td>";
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
        "size": 100,
        "retorno": [
            {
                "id": "00000000000000000000000000000000000000000",
                "descricao": "NOME CONVENIO",
                "url_autorizacao": "w",
                "registro_ans": "999",
                "codigo_prestador_na_operadora": null,
                "created": "2021-03-25 17:58:08",
                "integracao_tipo_convenio_id": "10",
                "integracaosoftware_key": "0000000000000000000000000000-00000000"
            },
            {
                "id": "00000000000000000000000000000000000000000",
                "descricao": "NOME CONVENIO",
                "url_autorizacao": "w",
                "registro_ans": "999",
                "codigo_prestador_na_operadora": null,
                "created": "2021-03-25 17:58:08",
                "integracao_tipo_convenio_id": "11",
                "integracaosoftware_key": "0000000000000000000000000000-00000000"
            }
        ],
        "mensagem": ""
    }
  </pre>
</div>