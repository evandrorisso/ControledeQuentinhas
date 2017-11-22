<?php
	class CalendarioController extends controller{

		public function index(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$contas = new contas();
			$dados["contas"] = $contas->mostrar($dados['usuario']['id']);
			$this->loadTemplate('calendario',$dados); 

		}
	}
?>
