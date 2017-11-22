<?php
	class ContasController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$contas = new contas();
			$dados["contas"] = $contas->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarContas',$dados); 
			}
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['conta'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'contas' => addslashes($_POST['conta']),
					'saldoinicial' => addslashes($_POST['saldoinicial']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarcontas = new contas();
				$addcontas = $cadastrarcontas->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'Contas');
			}


				$this->loadTemplate('cadastrarContas',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['conta'])) {
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'contas' => addslashes($_POST['conta']),
					'saldoinicial' => addslashes($_POST['saldoinicial']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarcontas = new contas();
				$edtcontas = $editarcontas->editar($editar);
				header('LOCATION: '.BASE_URL.'Contas');
			}
			/* Envia para Visualização */
				$dados['contas'] = ['id'=> addslashes($id)];
				$buscacontas = new contas();
				$dados["contas"] = $buscacontas->GetId($dados);
				$this->loadTemplate('editarContas',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['contas'] = ['id'=> addslashes($id)];
			$buscacontas = new contas();
			$dados["contas"] = $buscacontas->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'Contas');
		}
}
?>