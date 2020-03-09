  <p><small><i>Consulta os atendimentos gerados em determinada data. Esta requisição deverá ser feita na seguinte rota</i></small></p>
  <h5><i><span class="badge badge-warning">GET</span></i></h5>
  <div class="alert alert-info" role="alert">
    <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_MARCACAO_DATA.'</span></strong>'; ?>
  </div>
  <p>O resultado desta requisição <code>GET</code>:</p>
  <div class="alert alert-success" role="alert">
    <pre>
      {
         "status":"sucesso",
         "retorno":[
            {
               "atendimento_id":"119562230",
               "data_inicial":"2020-10-11",
               "marcacao_id":"1193232636",
               "paciente_id":"30827368",
               "paciente":"LOREM IPSUM DOLOR",
               "procedimento_id":"22",
               "procedimento":"LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR",
               "profissional_id":"1040",
               "profissional":"CONSECTETUR ADIPISCING",
               "tipo_baixa_id":null,
               "tipo_baixa":null,
               "laudo":"",
               "cod_mov":"1193232636",
               "marcacao_cripto":"23754264238949823740972304098f09808098"
            },
            ...
         ],
         "mensagem":""
      }
    </pre>
  </div>