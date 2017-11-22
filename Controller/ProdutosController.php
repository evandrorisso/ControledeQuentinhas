<?php
	class ProdutosController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$produtos = new produtos();
			$dados['Produtos'] = $produtos->mostrar($dados['usuario']['id']);
			
			$this->loadTemplate('listarProdutos',$dados); 
			}
		
		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['produto']) && isset($_POST['familia']) && isset($_POST['valorcusto'])&& isset($_POST['valorvenda'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$valorcusto = str_replace(",", ".", addslashes($_POST['valorcusto']));
				$valorvenda = str_replace(",", ".", addslashes($_POST['valorvenda']));
				$cadastrar = [
					'produto' => addslashes($_POST['produto']),
					'grupo' => addslashes($_POST['grupo']),
					'familia' => addslashes($_POST['familia']),
					'valorcusto' => number_format($valorcusto,2),
					'valorvenda' => number_format($valorvenda,2),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarproduto = new produtos();
				$addproduto = $cadastrarproduto->cadastrar($cadastrar);
				
				header('LOCATION: '.BASE_URL.'Produtos');
			}
				$grupo = new grupoprodutos();
				$dados['grupodeprodutos'] = $grupo->mostrar($dados['usuario']['id']);
				$familia = new familiaprodutos();
				$dados['familiadeprodutos'] = $familia->mostrar($dados['usuario']['id']);
				$this->loadTemplate('cadastrarProdutos',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['produto']) && isset($_POST['familia']) && isset($_POST['valorcusto'])&& isset($_POST['valorvenda'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$valorcusto = str_replace(",", ".", addslashes($_POST['valorcusto']));
				echo $valorcusto;
				$valorvenda = str_replace(",", ".", addslashes($_POST['valorvenda']));
				echo $valorvenda;
				$editar = [
					'id' => $id,
					'produto' => addslashes($_POST['produto']),
					'grupo' => addslashes($_POST['grupo']),
					'familia' => addslashes($_POST['familia']),
					'valorcusto' => number_format($valorcusto,2),
					'valorvenda' => number_format($valorvenda,2),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarproduto = new produtos();
				$edtproduto = $editarproduto->editar($editar);
				header('LOCATION: '.BASE_URL.'Produtos');
			}
			/* Envia para Visualização */
				$dados['produtos'] = ['id'=> addslashes($id)];
				$grupo = new grupoprodutos();
				$dados['grupodeprodutos'] = $grupo->mostrar($dados['usuario']['id']);
				$familia = new familiaprodutos();
				$dados['familiadeprodutos'] = $familia->mostrar($dados['usuario']['id']);
				$buscaproduto = new produtos();
				$dados["produtos"] = $buscaproduto->GetId($dados);
				$this->loadTemplate('editarProdutos',$dados); 
		}

		public function Remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['produtos'] = ['id'=> addslashes($id)];
			$buscaprodutos = new produtos();
			$dados["produtos"] = $buscaprodutos->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'Produtos');
		}
}
?>