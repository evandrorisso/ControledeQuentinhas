<?php
require 'environment.php';

$config = array();

if (ENVIRONMENT == "SERVER")
	{
		define("NOME_SISTEMA","Controle de Quentinhas");
		define("BASE_URL","http://quentinha.exodoti.xyz/");
		define("LOGO",BASE_URL."assets/imagens/logo.png");
		define("CONSTRUCAO",BASE_URL."assets/imagens/paginaemconstrucao.png");
		$config['dbname'] = '***';
		$config['host'] = 'mysql.hostinger.com.br';
		$config['dbuser'] = '***';
		$config['dbpass'] = '***';
	}
else
	{
		define("NOME_SISTEMA","Controle de Quentinhas");
		define("BASE_URL","http://quentinhas.pc/");
		define("LOGO",BASE_URL."assets/imagens/logo.png");
		define("CONSTRUCAO",BASE_URL."assets/imagens/paginaemconstrucao.png");
		$config['dbname'] = 'quentinhas';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
		
	}
global $db;
try 
	{
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} 
catch (PDOException $e) 
	{
		echo "ERRO: ".$e->getMessage();
		exit;
	}

?>