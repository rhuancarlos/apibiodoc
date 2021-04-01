<br>
<p> Este endpoint consiste no envio do laudo médico para o Biogeneses.</p>
<br>
<p>Esta requisição deverá ser feita na seguinte rota</p>
<h5><i><span class="badge badge-warning">POST</span></i></h5>
<div class="alert alert-info" role="alert">
    <strong>EN: </strong>
  <?= ROTA_PROTOCOLO.ROTA_DOMINIO.'<strong><span class="badge badge-dark">'.ROTA_FUNCAO_POST_LAUDO_SALVAR.'</span></strong>'; ?>
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
    foreach($PARAMETROS_LAUDOS as $laudosRoute) {
      $html = "<tr>";
      $html .= "<td>".$laudosRoute['campo']."</td>";
      $html .= "<td>".$laudosRoute['obrigatorio']."</td>";
      $html .= "<td>".$laudosRoute['tipo']."</td>";
      $html .= "<td>".$laudosRoute['criptografado']."</td>";
      $html .= "<td>".$laudosRoute['descricao']."</td>";
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