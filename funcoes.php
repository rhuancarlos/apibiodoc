<?PHP
header("Content-type: text/html; charset=utf-8");
defined('API_BIO_VERSAO')  OR define('API_BIO_VERSAO', " <small><small>v.1.0.0</small></small>");
defined('API_BIO_TITLE')  OR define('API_BIO_TITLE', "Biogeneses - Documentação API");
defined('API_BIO_FOOTER')  OR define('API_BIO_FOOTER', "Biogeneses - Documentação API");
defined('API_BIO_HEADER')  OR define('API_BIO_HEADER', "API BIOGENESES".API_BIO_VERSAO);

defined('ROTA_PROTOCOLO')  OR define('ROTA_PROTOCOLO', "https://");
defined('ROTA_DOMINIO')  OR define('ROTA_DOMINIO', "rhuancarlos.inforgeneses.inf.br/api_biogeneses_web/");
defined('ROTA_FUNCAO_AUTENTICACAO')  OR define('ROTA_FUNCAO_AUTENTICACAO', "authentication/");
defined('ROTA_FUNCAO_MARCACAO_DATA')  OR define('ROTA_FUNCAO_MARCACAO_DATA', "marcacoes/data/");
defined('ROTA_FUNCAO_MARCACAO_PERIODO')  OR define('ROTA_FUNCAO_MARCACAO_PERIODO', "marcacoes/periodo/");
define('ROTA_FUNCAO_MARCACAO_PERIODO_PARAMETROS', "?data=2019-10-10&tipo_baixa=PRESENTE&tipo_atendimento=CONSULTA&profissional_id=0985b78e84652f73a8a13dee988d26030a2611");

$PARAMETROS_AUTENTICACAO = array(
	array("campo" => "matricula", "obrigatorio" => "Sim", "tipo" => "String", "descricao" => "Matricula de acesso cadastradas no sistema biogeneses"),
	array("campo" => "senha", "obrigatorio" => "Sim", "tipo" => "String", "descricao" => "Senha de acesso cadastradas no sistema biogeneses")
);
$PARAMETROS_MARCACAO_PERIODO = array(
	array("campo" => "data", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Não", "descricao" => "Data que deseja requisitar os atendimentos."),
	array("campo" => "tipo_baixa", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Refere-se a situação do atendimento.<br><small><b>dados aceitos:</b> <code>PRESENTE, FALTOU, DESMARCADO, ATENDIDO, REMARCADO</code></small></br>"),
	array("campo" => "tipo_atendimento", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Refere-se ao tipo do atendimento, se este é consulta, exames etc.<br><small><b>dados aceitos:</b> <code>CIRURGIA, CONSULTA, EXAME, NÃO INFORMADO, RETORNO</code></small></br>"),
	array("campo" => "profissional_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Código do médico profissional que foi informado no ato da abertura do atendimento."),
);
?>

