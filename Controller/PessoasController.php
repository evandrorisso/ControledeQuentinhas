<?php
	class PessoasController extends controller{

		public function index(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$buscapessoas = new pessoa();
			$dados["Pessoas"] = $buscapessoas->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarPessoas',$dados); 
		}

		public function cadastrar(){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */

			if(isset($_POST['nome']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$cadastrar = [
					'nome' => addslashes($_POST['nome']),
					'tipo' => addslashes($_POST['tipo']),
					'endereco' => addslashes($_POST['endereco']),
					'telefone' => addslashes($_POST['telefone']),
					'observacao' => addslashes($_POST['observacao']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$cadastrarpessoa = new pessoa();
				$addpessoa = $cadastrarpessoa->cadastrar($cadastrar);
				header('LOCATION: '.BASE_URL.'Pessoas');
			}


				$this->loadTemplate('cadastrarpessoa',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			if(isset($_POST['nome']) && isset($_POST['tipo'])){
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'nome' => addslashes($_POST['nome']),
					'tipo' => addslashes($_POST['tipo']),
					'endereco' => addslashes($_POST['endereco']),
					'telefone' => addslashes($_POST['telefone']),
					'observacao' => addslashes($_POST['observacao']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarpessoa = new pessoa();
				$edtpessoa = $editarpessoa->editar($editar);
				header('LOCATION: '.BASE_URL.'Pessoas');
			}
			/* Envia para Visualização */
				$dados['pessoa'] = ['id'=> addslashes($id)];
				$buscapessoas = new pessoa();
				$dados["Pessoas"] = $buscapessoas->GetId($dados);
				$this->loadTemplate('editarPessoa',$dados); 
		}

		public function remover($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$dados['pessoa'] = ['id'=> addslashes($id)];
			$buscapessoas = new pessoa();
			$dados["Pessoas"] = $buscapessoas->RemoveId($dados);
			header('LOCATION: '.BASE_URL.'Pessoas');
		}
}