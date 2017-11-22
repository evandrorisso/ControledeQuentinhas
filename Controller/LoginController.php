<?php
	
	class LoginController extends controller{

		public function index(){
			$this->loadView('login',$dados = array()); 
		}

		public function cadastrar()
		{
			if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['password'])){
				$cadastros = array();
				$cadastros = [
					"nome" => addslashes($_POST['nome']),
					"email" => addslashes($_POST['email']),
					"senha" => md5(addslashes($_POST['password']))
				];
				$cadastro = new usuario();
				$cadastro = $cadastro->cadastrar($cadastros);
				$usuario = new usuario();
				$dados['usuario'] = $usuario->getUsuarioEmail($cadastros['email']);
				$pessoa = new criarTabelas();
				$criarTabela = $pessoa->tabelaPessoa($dados['usuario']['id']);
				$sessao = new HomeController();
				$sessao->grava_sessao($dados['usuario']['controle']);
				/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				/* Envia para Visualização */
				$this->loadTemplate('dashboard',$dados);
			}else{
				$this->loadView('cadastrar',$dados = array()); 		
			}
			
		}
		
		public function verificasessao(){
			if (!empty($_SESSION['controle']) ){
				$usuario = new usuario();
	        	$dados = $usuario->getUsuarioId($_SESSION['controle']); 
				return $dados;
			}else{
				header('LOCATION: '.BASE_URL.'Login');
				exit;
			}
		}
	}
?>
