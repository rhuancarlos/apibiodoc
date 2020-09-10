  <p>Consulta os atendimentos de um profissional em determinada data. Neste endpoint é obrigatório o envio do paramento <code>data</code>. Com o envio dos demais parametros na requisição é possivel realizar filtros nos atendimentos.</p>
  <br>
  Esta requisição deverá ser feita na seguinte rota</i></small></p>
  <h5><i><span class="badge badge-warning">GET</span></i></h5>
  <div class="alert alert-info" role="alert">
    <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_MARCACAO_PERIODO.'</span></strong>'; ?>
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
      foreach($PARAMETROS_MARCACAO_PERIODO as $marcacoesPeriodo) {
        $html = "<tr>";
        $html .= "<td>".$marcacoesPeriodo['campo']."</td>";
        $html .= "<td>".$marcacoesPeriodo['obrigatorio']."</td>";
        $html .= "<td>".$marcacoesPeriodo['tipo']."</td>";
        $html .= "<td>".$marcacoesPeriodo['criptografado']."</td>";
        $html .= "<td>".$marcacoesPeriodo['descricao']."</td>";
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

A requisição ficará da seguinte forma:
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_MARCACAO_PERIODO.ROTA_FUNCAO_MARCACAO_PERIODO_PARAMETROS.'</span></strong>'; ?>
</div>

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
    {
      "status": "sucesso",
      "retorno": [
          {
              "atendimento_id": "234234234234h23423h4j23432423j42343j24",
              "marcacao_id": "384756767fd767676776f77776767676767f67",
              "profissional_id": "787787f77f77777788889889f9889898898899",
              "paciente_id": "f675565656765765675675d675765675765675",
              "tipo_baixa": "PRESENTE",
              "tipo_atendimento_id": "7f77f77777788889889f9887f77f777777888898",
              "tipo_atendimento": "EXAME",
              "profissional_nome": "CONSECTETUR ADIPISCING ELIT",
              "nome_paciente": "EIUSMOD TEMPOR",
              "procedimentos": [
                  {
                      "procedimentos_atendimento_id": "0985b78e8465223f73a8a13dee986d76834a4611",
                      "procedimento_id": "3389488a51621f68eee0a98@@#!85db37d17",
                      "descricao": "LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT"
                  }
              ],
              "convenio": {
                  "id": "db131343713d82189f6ae629e8780e5aa7d6",
                  "nome": "SAÚDE PRA VOCÊ"
              },
              "profissional_solicitante": []
          },
          ...
      ],
      "mensagem": ""
    }
  </pre>
</div>