<?php
	class GrupoProdutosController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$grupodeprodutos = new grupoprodutos();
			$dados["GruposdeProdutos"] = $grupodeprodutos->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarGrupoProdutos',$dados); 
			}
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['grupo']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'grupo' => addslashes($_POST['grupo']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrargrupo = new grupoprodutos();
				$addgrupo = $cadastrargrupo->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'GrupoProdutos');
			}


				$this->loadTemplate('cadastrarGrupoProdutos',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['grupo']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'grupo' => addslashes($_POST['grupo']),
					'tipo' => addslashes($_POST['tipo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editargrupo = new grupoprodutos();
				$edtgrupo = $editargrupo->editar($editar);
				header('LOCATION: '.BASE_URL.'GrupoProdutos');
			}
			/* Envia para Visualização */
				$dados['grupodeprodutos'] = ['id'=> addslashes($id)];
				$buscagrupo = new grupoprodutos();
				$dados["grupodeprodutos"] = $buscagrupo->GetId($dados);
				$this->loadTemplate('editarGrupoProdutos',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['grupodeprodutos'] = ['id'=> addslashes($id)];
			$buscagrupo = new grupoprodutos();
			$dados["grupodeprodutos"] = $buscagrupo->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'GrupoProdutos');
		}
}
?>