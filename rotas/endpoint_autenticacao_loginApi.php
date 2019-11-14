<p>Para autenticar na api é necessário fazer os seguintes processos mediante os dados em questão:</p>
<ul class="simple">
	<li>Matricula</li>
	<li>Senha</li>
</ul>
<p>
	<i>
  Estes dados deverão ser do profissional(médico). Ambos deverão já estar devidamente cadastrados no biogeneses e já com seus devidos acessos e permissões configurado no banco de dados da clinica.
  </i>
</p>

<p>
<strong>Processo</strong><Br>
Com os dados em mãos o login deverá submeter os dados para a rota especificada abaixo.
</p>
<div class="alert alert-info" role="alert">
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_AUTENTICACAO.'</span></strong>'; ?>
</div>
<p>Abaixo segue definições de autenticacao. Com isso a requisição ficará da seguinte forma:</p>
<li>Authentication: <small><code>No Auth</code></small></li>
<li>Header: <small><strong>Key: </strong><code>Content-Type</code> <strong>Value: </strong><code>application/json</code></small></li>
<div class="alert alert-info" role="alert">
<pre>
{
  "matricula": "999999",
  "senha": "sua_senha_de_usuario"
}
</pre>
</div>

<h5><strong>Parâmetros</strong></h5>
<h5><i><span class="badge badge-primary">POST</span></i></h5>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo(s)</th>
      <th scope="col">Obrigatório</th>
      <th scope="col">Tipo</th>
      <th scope="col">Descricão</th>
    </tr>
  </thead>
  <tbody>
    <?PHP 
    foreach($PARAMETROS_AUTENTICACAO as $autenticacao) {
      $html = "<tr>";
      $html .= "<td>".$autenticacao['campo']."</td>";
      $html .= "<td>".$autenticacao['obrigatorio']."</td>";
      $html .= "<td>".$autenticacao['tipo']."</td>";
      $html .= "<td>".$autenticacao['descricao']."</td>";
      $html .= "</tr>";
      echo $html;
    }
    ?>
  </tbody>
</table>

O resultado da autenticação será conforme especificado abaixo:
<div class="alert alert-success" role="alert">
<pre>
{
  "status": "sucesso",
  "retorno": {
      "profissional_id": "23764262343jh23hjkhk3h43242342342342",
      "token": "23764262343jh22333323332323342342342",
      "chave": "da4191896a53jh22333323332323342342342"
  },
  "mensagem": 201
}
</pre>
</div>
<p>Caso a autenticação tenha êxito a aplicaçao, nesse momento, você já irá ter todos os dados necessário para iniciar as chamadas na rota da API. Em todas as rotas da API, será necessário enviar o TOKEN que foi recebido na rota /login.</p>