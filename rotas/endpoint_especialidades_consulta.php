<p>Neste end-point é possivel obter a lista de todas as especialidades médicas atendidas pela clínica.</p>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_ESPECIALIDADES.'</span></strong>'; ?>
</div>

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
        "id": "41606395d382e5feab7973868a5e8d18a",
        "descricao": "CONSECTETUR ADIPISCING ELIT",
        "created": "2018-03-03 17:25:52",
        "status": "1",
        "area_id": "1",
        "permissao": "0",
        "id_antigo": null,
        "cbo_id": null,
        "imagem": null
      },
      {
        "id": "3389488a51624f68eee0a98a615db37d17",
        "descricao": "SED DO EIUSMOD TEMPOR INCIDIDUNT",
        "created": "2018-03-04 18:47:19",
        "status": "1",
        "area_id": "1",
        "permissao": "0",
        "id_antigo": null,
        "cbo_id": "49018",
        "imagem": null
      }
    ],
    "mensagem": ""
  }
  </pre>
</div>