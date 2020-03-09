<?PHP
header("Content-type: text/html; charset=utf-8");
defined('API_BIO_VERSAO')  OR define('API_BIO_VERSAO', " <small><small>v.1.0.0</small></small>");
defined('API_BIO_TITLE')  OR define('API_BIO_TITLE', "Biogeneses - Documentação API");
defined('API_BIO_FOOTER')  OR define('API_BIO_FOOTER', "Biogeneses - Documentação API");
defined('API_BIO_HEADER')  OR define('API_BIO_HEADER', "API BIOGENESES".API_BIO_VERSAO);

defined('ROTA_PROTOCOLO')  OR define('ROTA_PROTOCOLO', "https://");
defined('ROTA_DOMINIO')  OR define('ROTA_DOMINIO', "apis.inforgeneses.com.br/api_integracao/");
defined('ROTA_FUNCAO_AUTENTICACAO')  OR define('ROTA_FUNCAO_AUTENTICACAO', "authentication/");
defined('ROTA_FUNCAO_MARCACAO_DATA')  OR define('ROTA_FUNCAO_MARCACAO_DATA', "marcacoes/data/");
defined('ROTA_FUNCAO_MARCACAO_PERIODO')  OR define('ROTA_FUNCAO_MARCACAO_PERIODO', "marcacoes/periodo/");
define('ROTA_FUNCAO_MARCACAO_PERIODO_PARAMETROS', "?data=2019-10-10&tipo_baixa=PRESENTE&tipo_atendimento=CONSULTA&profissional_id=0985b78e84652f73a8a13dee988d26030a2611");
defined('ROTA_FUNCAO_GET_ESPECIALIDADES')  OR define('ROTA_FUNCAO_GET_ESPECIALIDADES', "especialidades/");
defined('ROTA_FUNCAO_GET_ESPACO_FISICO')  OR define('ROTA_FUNCAO_GET_ESPACO_FISICO', "espaco_fisico/");
defined('ROTA_FUNCAO_GET_PACIENTES')  OR define('ROTA_FUNCAO_GET_PACIENTES', "paciente/");
defined('ROTA_FUNCAO_POST_PACIENTES_FILTRO')  OR define('ROTA_FUNCAO_POST_PACIENTES_FILTRO', "paciente/filtros");
defined('ROTA_FUNCAO_POST_PACIENTES_CADASTRO')  OR define('ROTA_FUNCAO_POST_PACIENTES_CADASTRO', "pacientes/efetivar_cadastro");
defined('ROTA_FUNCAO_GET_CONVENIOS')  OR define('ROTA_FUNCAO_GET_CONVENIOS', "tipo_convenio");
defined('ROTA_FUNCAO_GET_PROFISSIONAIS')  OR define('ROTA_FUNCAO_GET_PROFISSIONAIS', "profissionais");
defined('ROTA_FUNCAO_POST_PROFISSIONAIS')  OR define('ROTA_FUNCAO_POST_PROFISSIONAIS', "profissionais/profissionais_com_horarios");
defined('ROTA_FUNCAO_POST_PROCEDIMENTOS')  OR define('ROTA_FUNCAO_POST_PROCEDIMENTOS', "procedimento/filtros");
defined('ROTA_FUNCAO_POST_AGENDAMENTOS_CADASTRO')  OR define('ROTA_FUNCAO_POST_AGENDAMENTOS_CADASTRO', "marcacoes/efetivar_cadastro");

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

$PARAMETROS_PACIENTES = array(
	array(
			"campo" => "id", 
			"obrigatorio" => "Não", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código do paciente no sistema biogeneses."
		),
	array(
			"campo" => "nome", 
			"obrigatorio" => "Não", 
			"tipo" => "String", 
			"criptografado" => "Não", 
			"descricao" => "Neste paramentro poderá ser enviado o nome parcial do paciente, a API irá responder com os registros que correspondam a string enviada."
		),
	array(
			"campo" => "cpf", 
			"obrigatorio" => "Não", 
			"tipo" => "inteiro", 
			"criptografado" => "Não", 
			"descricao" => "Os dados deverão ser enviado sem pontuações, obedecendo assim o tipo de dado requerido pelo parametro."
		)
);

$PARAMETROS_PROFISSIONAIS_HORARIOS = array(
	array(
			"campo" => "especialidade_id", 
			"obrigatorio" => "Não", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código da especialidade médica(aréa de atendimento) que poderá ser consultado pelo endpoint de 'especialidade'."
		),
	array(
			"campo" => "data", 
			"obrigatorio" => "Sim", 
			"tipo" => "String", 
			"criptografado" => "Não", 
			"descricao" => "Neste parametro deverá ser consultada a data que deseja consultar a disponibilidade de um profissional."
		),
	array(
			"campo" => "espaco_fisico_id", 
			"obrigatorio" => "Sim", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código do espaço fisico(local de atendimento)."
		),
	array(
			"campo" => "profissional_id", 
			"obrigatorio" => "Não", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código do profissional no sistema biogeneses."
		)
);

$PARAMETROS_PROCEDIMENTOS = array(
	array(
			"campo" => "tipo_convenio_id", 
			"obrigatorio" => "Sim", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código do convênio que é obtido no endpoint de convênios."
		),
	array(
			"campo" => "profissional_id", 
			"obrigatorio" => "Sim", 
			"tipo" => "String", 
			"criptografado" => "Sim", 
			"descricao" => "Código do profissional que é obtido apartir do endpoint de profissionais"
		)
);

$PARAMETROS_CADASTRO_PACIENTE = array(
	array("campo" => "nome", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Não", "descricao" => "Nome do paciente informado no cadastro"),
	array("campo" => "nome_mae", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Nome mãe informado no cadastro"),
	array("campo" => "telefone1", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Primeiro telefone informado no cadastro"),
	array("campo" => "telefone2", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Segundo telefone informado no cadastro"),
	array("campo" => "telefone3", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Terceiro telefone informado no cadastro"),
	array("campo" => "data_nascimento", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Data de nascimento informado no cadastro"),
	array("campo" => "paciente_online_id", "obrigatorio" => "Sim", "tipo" => "inteiro", "criptografado" => "Não", "descricao" => "Código do paciente online gerado pelo sistema que está usando a api"),
	array("campo" => "convenio", "obrigatorio" => "Sim", "tipo" => "Convenio", "criptografado" => "Não", "descricao" => "Convênio do paciente"),
	array("campo" => "tipo_convenio_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Tipo de convênio que é obtido apartir do endpoint de Convênio"),
	array("campo" => "num_carteira", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Número da carteira informado no cadastro")
);

$PARAMETROS_CADASTRO_AGENDAMENTO = array(
		array("campo" => "usuario_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Usuário que é obtido a partir do endpoint de Usuário"),
	array("campo" => "espaco_fisico_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Espaço físico que é obtido a partir do endpoint de Espaço físico"),
	array("campo" => "paciente_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Paciente que é obtido a partir do endpoint de Paciente"),
	array("campo" => "profissional_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Profissional que é obtido a partir do endpoint de Profissional"),
	array("campo" => "especialidade_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Especialidade que é obtido a partir do endpoint de Especialidade"),
	array("campo" => "fornecedor_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Fornecedor que é obtido a partir do endpoint de Fornecedor"),
	array("campo" => "parceiro_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Parceiro que é obtido a partir do endpoint de Parceiro"),
	array("campo" => "convenio", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Convênio do paciente"),

	array("campo" => "tipo_convenio_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Convênio que é obtido a partir do endpoint de Convênio"),
	array("campo" => "possui_parceiro", "obrigatorio" => "Não", "tipo" => "inteiro", "criptografado" => "Não", "descricao" => "Verifica se possui parceiro"),
	array("campo" => "gerar_guia", "obrigatorio" => "Não", "tipo" => "inteiro", "criptografado" => "Não", "descricao" => "Verifica se gera guia"),

	array("campo" => "tipo_atendimento_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Não", "descricao" => "Tipo de atendimento que é obtido a partir do endpoint Tipo de atendimento"),
	array("campo" => "tipo_atendimento", "obrigatorio" => "Não", "tipo" => "TipoAtendimento", "criptografado" => "Não", "descricao" => "Tipo de atendimento"),

	array("campo" => "sigla", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Sigla do tipo de atendimento"),

	array("campo" => "data_inicial", "obrigatorio" => "Sim", "tipo" => "Date", "criptografado" => "Não", "descricao" => "Data inicial do atendimento"),
	array("campo" => "hora_inicial", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Não", "descricao" => "Hora inicial do atendimento"),
	array("campo" => "encaixe", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Verifica se encaixe de horário do profissional"),
	array("campo" => "horario", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Horário de encaixe do profissional"),
	array("campo" => "profissional_solicitante_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Profissional solicitante que é obtido a partir do endpoint Profissional"),
	array("campo" => "requer_anestesista", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Verifica se requer anestesista"),
	array("campo" => "profissional_anestesista_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Profissional anestesista que é obtido a partir do endpoint Profissional"),
	array("campo" => "procedimentos", "obrigatorio" => "Sim", "tipo" => "Procedimento", "criptografado" => "Não", "descricao" => "Procedimentos cadastrados"),

	array("campo" => "quantidade", "obrigatorio" => "Sim", "tipo" => "inteiro", "criptografado" => "Sim", "descricao" => "Quantidade de procedimentos cadastrados"),
	array("campo" => "procedimento_id", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Sim", "descricao" => "Procedimento que é obtido a partir do endpoint de Procedimento"),
	array("campo" => "valor", "obrigatorio" => "Sim", "tipo" => "numeric", "criptografado" => "Não", "descricao" => "Valor do procedimento"),
	array("campo" => "data_execucao", "obrigatorio" => "Sim", "tipo" => "String", "criptografado" => "Não", "descricao" => "Data de execução do procedimento"),
	array("campo" => "tipo_anestesia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Descrição do tipo de anestesia"),

	array("campo" => "status", "obrigatorio" => "Sim", "tipo" => "inteiro", "criptografado" => "Não", "descricao" => "Status do agendamento"),
	array("campo" => "pre_agendamento", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Verifica se é pré agendamento"),
	array("campo" => "cid_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "CID"),
	array("campo" => "painel_senhas_id", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Painel de senhas"),
	array("campo" => "via_acesso", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Via acesso"),
	array("campo" => "tecnica_utilizada", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Tecnica utilizada"),
	array("campo" => "indicacao_clinica", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Indicação clínica"),
	array("campo" => "senha_guia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Senha guia"),
	array("campo" => "numero_guia_anestesia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Número da guia anestesia"),
	array("campo" => "senha_guia_anestesia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Senha da guia anestesia"),
	array("campo" => "data_autorizacao_guia_anestesia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Data autorização da guia anestesia"),
	array("campo" => "num_guia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Número da guia"),
	array("campo" => "tipo_consulta", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Tipo de consulta"),
	array("campo" => "data_autorizacao", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Data de autorização"),
	array("campo" => "tipo_anestesia", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Tipo de anestesia"),
	array("campo" => "indicacao_acidente", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Indicação de acidente"),
	array("campo" => "carater_solicitacao", "obrigatorio" => "Não", "tipo" => "String", "criptografado" => "Não", "descricao" => "Caráter de solicitação")
);
?>

