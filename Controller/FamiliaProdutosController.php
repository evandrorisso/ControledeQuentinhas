<?php
	class FamiliaProdutosController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$familiadeprodutos = new familiaprodutos();
			$dados["familiadeProdutos"] = $familiadeprodutos->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarFamiliaProdutos',$dados); 
			}
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['familia']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'familia' => addslashes($_POST['familia']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarfamilia = new familiaprodutos();
				$addfamilia = $cadastrarfamilia->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'FamiliaProdutos');
			}


				$this->loadTemplate('cadastrarFamiliaProdutos',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['familia']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'familia' => addslashes($_POST['familia']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarfamilia = new familiaprodutos();
				$edtfamilia = $editarfamilia->editar($editar);
				header('LOCATION: '.BASE_URL.'FamiliaProdutos');
			}
			/* Envia para Visualização */
				$dados['familiadeprodutos'] = ['id'=> addslashes($id)];
				$buscafamilia = new familiaprodutos();
				$dados["familiadeprodutos"] = $buscafamilia->GetId($dados);
				$this->loadTemplate('editarFamiliaProdutos',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['familiadeprodutos'] = ['id'=> addslashes($id)];
			$buscafamilia = new familiaprodutos();
			$dados["familiadeprodutos"] = $buscafamilia->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'FamiliaProdutos');
		}
}
?>