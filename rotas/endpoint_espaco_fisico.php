<p>Neste end-point é possivel obter a lista de todos os espaços fisicos da clínica.</p>
<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_ESPACO_FISICO.'</span></strong>'; ?>
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
    "size": 2,
    "retorno": [
        {
            "id": "41606395d382e5feab7973868a2e8d18a",
            "classificacao": "MATRIZ",
            "descricao": " ĹOREN IPSUN - A"
        },
        {
            "id": "41606395d382e5feab7973868a1e8d18a",
            "classificacao": "FILIAL",
            "descricao": "DOLLOR AMMED - B"
        }
    ],
    "mensagem": ""
}
  </pre>
</div>