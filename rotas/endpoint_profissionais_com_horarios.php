<br>
Esta requisição deverá ser feita na seguinte rota</i></small></p> 
<h5><i><span class="badge badge-primary">POST</span></i></h5>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_PROFISSIONAIS.'</span></strong>'; ?>
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
    foreach($PARAMETROS_PROFISSIONAIS_HORARIOS as $prof_com_horarioRoute) {
      $html = "<tr>";
      $html .= "<td>".$prof_com_horarioRoute['campo']."</td>";
      $html .= "<td>".$prof_com_horarioRoute['obrigatorio']."</td>";
      $html .= "<td>".$prof_com_horarioRoute['tipo']."</td>";
      $html .= "<td>".$prof_com_horarioRoute['criptografado']."</td>";
      $html .= "<td>".$prof_com_horarioRoute['descricao']."</td>";
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
- Senha : <code><span class="badge badge-dark">token</span> recebido no response de autenticação</code>
</p>

O resultado da requisição será conforme abaixo:
<div class="alert alert-success" role="alert">
  <pre>
{
    "status": "sucesso",
    "retorno": {
        "CLINICA DEMO - A": {
            "PROFISSIONAL_BUAFDEMO": [
                {
                    "total_atendimentos": "0",
                    "substring": "06:00",
                    "qtd_atendimento": "0",
                    "nome": "PROFISSIONAL_BUAFDEMO",
                    "nome_fantasia": "",
                    "profissional_id": "3389488a51624f68eee0a98a605db37d17",
                    "funcao": "MÉDICO",
                    "horario_unico_atendimento": "0",
                    "status_marcar": "1",
                    "hora_inicial": "06:00",
                    "hora_final": "23:00",
                    "data_final": "2050-12-31",
                    "data_inicial": "2020-02-19",
                    "qtd_consulta": "1",
                    "qtd_retorno": "1",
                    "qtd_exame": "1",
                    "qtd_cirurgia": "1",
                    "qtd_geral": "500",
                    "dom": "A",
                    "seg": "A",
                    "ter": "A",
                    "qua": "A",
                    "qui": "A",
                    "sex": "A",
                    "sab": "A",
                    "nao_aceitar_marcacao": "0",
                    "horario_unico": "0",
                    "espaco_fisico": "CLINICA DEMO - A",
                    "espaco_fisico_id": "41606395d382e5feab7973868a1e8d18a",
                    "geral": 0,
                    "consultas": 0,
                    "exames": 0,
                    "retorno": 0,
                    "cirurgia": 0,
                    "qtd_consulta2": 1,
                    "qtd_retorno2": 1,
                    "qtd_exame2": 1,
                    "qtd_cirurgia2": 1,
                    "qtd_geral2": 500
                }
            ],
            .....
        }
    },
    "mensagem": ""
}
  </pre>
</div>