<?php
	class HomeController extends controller{

		public function index()
			{
				/* Envia Pagina Inicial */
					$this->loadView('home',$dados = array()); 
			}

		public function Sistema()
			{
				/* Acesso Ao Dashboard - Verifica Sessão Ativa*/
					if (!empty($_SESSION['controle']))
						{
							/* Pega os dados do usuario */ 
								$usuario = new usuario();
					        	$dados['usuario'] = $usuario->getUsuarioId($_SESSION['controle']); 
				        	/* Pega os dados da tabela configurar*/
					        	$configurar = new configurar();
								$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
							/* Envia para Visualização */
								$this->loadTemplate('dashboard',$dados); 
						}
					else
						/* Senão estiver Ativa */
						{
							/* Verifica se os campos do formularios foram enviados */ 
							if (isset($_POST['email']) && isset($_POST['password']))
								{	
									/* Armazena Campos dos formularios */
									$email = addslashes($_POST['email']);
					        		$senha = addslashes($_POST['password']);
					        		/* Pega os dados do usuario */ 
					        		$usuario = new usuario();
					        		$dados['usuario'] = $usuario->getUsuarioEmail($email); 
					        		/* Verifica se o email e senha foram digitados corretos */
									if ($email == $dados['usuario']['email'] && md5($senha) == $dados['usuario']['senha'])
										{
											/* Cria Sessão */
											$sessao = new HomeController();
											$sessao->grava_sessao($dados['usuario']['controle']);
											/* Pega os dados da tabela configurar*/
								        	$configurar = new configurar();
											$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
											/* Envia para Visualização */
											$this->loadTemplate('dashboard',$dados); 	
										}
									else
										/* Caso Não retorna pagina de login */
										{
											header('LOCATION: '.BASE_URL.'Login');
											exit;
										}
								}
							else
								/* Caso Não retorna pagina de login */
								{
									header('LOCATION: '.BASE_URL.'Login');
									exit;
								}
						}
			}

		public function sair()
			{
				$sair = new HomeController();
				$sair->encerra_sessao();
			}

		public function grava_sessao($id)
			{
				$_SESSION['controle'] = $id;
			}

		private function encerra_sessao()
			{
				unset($_SESSION['controle']);
				session_destroy();
				header('LOCATION: '.BASE_URL);
				exit;
			}

		public function perfilusuario()
			{
				/* Verifica sessão e pega os dados do usuario */ 
					$sessao = new LoginController();
					$dados['usuario'] = $sessao->verificasessao();
				/* Pega os dados da tabela configurar*/
					$configurar = new configurar();
					$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				/* Envia para Visualização */
					$this->loadTemplate('perfilusuario',$dados); 
			}

		public function configuracao()
			{
				$atualizar = array();
				/* Verifica sessão e pega os dados do usuario */ 
					$sessao = new LoginController();
					$dados['usuario'] = $sessao->verificasessao();
				if (isset($_POST['razaosocial']) && isset($_POST['nomefantasia']) && isset($_POST['cnpj']) && isset($_POST['ie']))
					{
						$atualizar = [
							"razaosocial" => addslashes($_POST['razaosocial']),
							"nomefantasia" => addslashes($_POST['nomefantasia']),
							"cnpj" => addslashes($_POST['cnpj']),
							"ie" => addslashes($_POST['ie']),
							"usuario" => $dados['usuario']['id']
						];
						$upgrade = new configurar();
						$atualizando = $upgrade->updateconfigurar($atualizar);

					}
				/* Pega os dados da tabela configurar*/
					$configurar = new configurar();
					$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				/* Envia para Visualização */
				$this->loadTemplate('configuracao',$dados); 
			}
	}
?>
