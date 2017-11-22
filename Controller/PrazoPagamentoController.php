<?php
	class PrazoPagamentoController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$prazopagamento = new prazopagamento();
			$dados["prazopagamento"] = $prazopagamento->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarPrazoPagamento',$dados); 
			}
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
				$formaspagamento = new formaspagamento();
				$dados['formaspagamento'] = $formaspagamento->mostrar($dados['usuario']['id']);
			if(isset($_POST['prazopagamento']) && isset($_POST['forma'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'prazopagamento' => addslashes($_POST['prazopagamento']),
					'parcelas' => addslashes($_POST['parcelas']),
					'quantidade' => addslashes($_POST['quantidade']),
					'forma' => addslashes($_POST['forma']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarprazopagamento = new prazopagamento();
				$addprazopagamento = $cadastrarprazopagamento->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'PrazoPagamento');
			}


				$this->loadTemplate('cadastrarPrazoPagamento',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				$formaspagamento = new formaspagamento();
				$dados['formaspagamento'] = $formaspagamento->mostrar($dados['usuario']['id']);
			if(isset($_POST['prazopagamento']) && isset($_POST['forma'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'prazopagamento' => addslashes($_POST['prazopagamento']),
					'parcelas' => addslashes($_POST['parcelas']),
					'quantidade' => addslashes($_POST['quantidade']),
					'forma' => addslashes($_POST['forma']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarprazopagamento = new prazopagamento();
				$edtprazopagamento = $editarprazopagamento->editar($editar);
				header('LOCATION: '.BASE_URL.'PrazoPagamento');
			}
			/* Envia para Visualização */
				$dados['prazopagamento'] = ['id'=> addslashes($id)];
				$buscaprazopagamento = new prazopagamento();
				$dados["prazopagamento"] = $buscaprazopagamento->GetId($dados);
				$this->loadTemplate('editarPrazoPagamento',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['prazopagamento'] = ['id'=> addslashes($id)];
			$buscaprazopagamento = new prazopagamento();
			$dados["prazopagamento"] = $buscaprazopagamento->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'PrazoPagamento');
		}
}
?>