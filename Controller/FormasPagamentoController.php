<?php
	class FormasPagamentoController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$formaspagamento = new formaspagamento();
			$dados["formaspagamento"] = $formaspagamento->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarFormasPagamento',$dados); 
			}
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
				$tipofinanceiro = new tipofinanceiro();
				$dados['tipofinanceiro'] = $tipofinanceiro->mostrar();
			if(isset($_POST['formapagamento']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'formapagamento' => addslashes($_POST['formapagamento']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarformapagamento = new formaspagamento();
				$addformapagamento = $cadastrarformapagamento->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'FormasPagamento');
			}


				$this->loadTemplate('cadastrarFormasPagamento',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				$tipofinanceiro = new tipofinanceiro();
				$dados['tipofinanceiro'] = $tipofinanceiro->mostrar();
			if(isset($_POST['formapagamento']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'formapagamento' => addslashes($_POST['formapagamento']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarformapagamento = new formaspagamento();
				$edtformapagamento = $editarformapagamento->editar($editar);
				header('LOCATION: '.BASE_URL.'FormasPagamento');
			}
			/* Envia para Visualização */
				$dados['formaspagamento'] = ['id'=> addslashes($id)];
				$buscaformaspagamento = new formaspagamento();
				$dados["formaspagamento"] = $buscaformaspagamento->GetId($dados);
				$this->loadTemplate('editarFormasPagamento',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['formaspagamento'] = ['id'=> addslashes($id)];
			$buscaformaspagamento = new formaspagamento();
			$dados["formaspagamento"] = $buscaformaspagamento->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'FormasPagamento');
		}
}
?>