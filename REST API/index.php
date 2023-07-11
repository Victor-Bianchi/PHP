<?php 

	// TOKEN: chave de segurança que permite fazer a chamada da API
	// AÇÃO: A ação que será feita usando a API
	// ID: A identificação do cliente que está fazendo a chamada
	// VALOR: valor de inserção ou de atualização

	const TOKEN = 30249808;

	if(isset($_GET['token'])) {
		$token = $_GET['token'];
		if($token == TOKEN) {
			// prossiga...
		} else {
			die("<strong>Erro:</strong> não foi possível estabelecer conexão com a API REST");
		}
	}

?>