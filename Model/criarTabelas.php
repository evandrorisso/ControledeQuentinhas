<?php

	class criarTabelas extends Model {

		public function tabelaPessoa($id){

			$novobanco = "pessoas".$id;
			global $db;
			try{
				$pessoas = "CREATE TABLE  IF NOT EXISTS `$novobanco` (
							  `id` int(11) NOT NULL,
							  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
							  `tipo` enum('FORNECEDOR','CLIENTE','AMBOS','') COLLATE utf8_unicode_ci NOT NULL,
							  `telefone` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
							  `endereco` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
							  `observacao` text COLLATE utf8_unicode_ci,
							  `controle` varchar(32) COLLATE utf8_unicode_ci NOT NULL
							) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
				
				$db->exec($pessoas);
				$db->errorInfo();
			}
			catch (Exception $e) {
				echo "Table $novobanco not created.</br>";
				echo "ERRO: ".$e->getMessage();
				exit;
			}
		}

		public function tabelaContas($id){

			$novobanco = "contas".$id;
			global $db;
			try{
				$pessoas = "CREATE TABLE  IF NOT EXISTS `$novobanco` (
							  `idcontas` int(11) NOT NULL,
							  `nomecontas` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
							  `saldoinicial` double(10,2) NOT NULL,
							  `saldocontas` double(10,2) DEFAULT NULL,
							  `controle` varchar(32) COLLATE utf8_unicode_ci NOT NULL
							) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
				
				$db->exec($pessoas);
				$db->errorInfo();
			}
			catch (Exception $e) {
				echo "Table $novobanco not created.</br>";
				echo "ERRO: ".$e->getMessage();
				exit;
			}
		}
	
	}
?>