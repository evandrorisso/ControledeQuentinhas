<?php
	class NaturezaLancamentoController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$naturezaLancamento = new naturezalancamento();
			$dados["naturezaLancamento"] = $naturezaLancamento->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarNaturezaLancamento',$dados); 
			}
		
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['natureza']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'natureza' => addslashes($_POST['natureza']),
					'tipo' => addslashes($_POST['tipo']),
					'classificacao' => addslashes($_POST['classificacao']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarnaturezaLancamento = new naturezalancamento();
				$addnaturezaLancamento = $cadastrarnaturezaLancamento->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'NaturezaLancamento');
			}


				$this->loadTemplate('cadastrarNaturezaLancamento',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['natureza']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'natureza' => addslashes($_POST['natureza']),
					'tipo' => addslashes($_POST['tipo']),
					'classificacao' => addslashes($_POST['classificacao']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarnaturezaLancamento = new naturezalancamento();
				$edtnaturezaLancamento = $editarnaturezaLancamento->editar($editar);
				header('LOCATION: '.BASE_URL.'NaturezaLancamento');
			}
			/* Envia para Visualização */
				$dados['naturezaLancamento'] = ['id'=> addslashes($id)];
				$buscanaturezaLancamento = new naturezalancamento();
				$dados["naturezaLancamento"] = $buscanaturezaLancamento->GetId($dados);
				$this->loadTemplate('editarNaturezaLancamento',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['naturezaLancamento'] = ['id'=> addslashes($id)];
			$buscanaturezaLancamento = new naturezalancamento();
			$dados["naturezaLancamento"] = $buscanaturezaLancamento->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'NaturezaLancamento');
		}
}
?>