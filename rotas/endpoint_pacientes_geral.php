<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p>
<h5><i><span class="badge badge-warning">GET</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_GET_PACIENTES.'</span></strong>'; ?>
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
            "cpf": ""
        },
        {
          ...
        }
     ],
    "mensagem": ""
}
  </pre>
</div>