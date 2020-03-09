<p>Neste end-point é possivel obter a lista de todos os convênios médicos atendidos pela clínica.</p>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_CONVENIOS.'</span></strong>'; ?>
</div>

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
                "id": "db13134375881189f6ae629e8480e5aa7d6",
                "descricao": "J SAUDE",
                "url_autorizacao": "w"
            },
            {
                "id": "3389488a51625f68eee0a98a665db37d17",
                "descricao": "UNIMED INTERCÂMBIO",
                "url_autorizacao": "http://saw.trixti.com.br"
            }
        ],
        "mensagem": ""
    }
  </pre>
</div>