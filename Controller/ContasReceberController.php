<?php
	class ContasReceberController extends controller{

		public function index()
			{
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
			/* Envia para Visualização */
			$contas = new contasReceber();
			$dados["contasReceber"] = $contas->mostrar($dados['usuario']['id']);
			$this->loadTemplate('listarContasReceber',$dados); 
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
				header('LOCATION: '.BASE_URL.'ContasPagar');
			}


				$this->loadTemplate('cadastrarContasPagar',$dados);
		}

		public function editar($id){
			/* Verifica sessão e pega os dados do usuario */ 
				$sessao = new LoginController();
				$dados['usuario'] = $sessao->verificasessao();
			/* Pega os dados da tabela configurar*/
				$configurar = new configurar();
				$dados['configurar'] = $configurar->getconfigurar($dados['usuario']['id']);
				$naturezaLancamento = new naturezalancamento();
				$tipo = 'DESPESA';
				$dados["naturezaLancamento"] = $naturezaLancamento->mostrarTipo($dados['usuario']['id'],$tipo);
				$formaspagamento = new formaspagamento();
				$dados["formaspagamento"] = $formaspagamento->mostrar($dados['usuario']['id']);
				
			if(isset($_POST['idpessoa']) && isset($_POST['natureza']) && isset($_POST['vltitulo'])) {
				$controle = $dados['usuario']['controle'];
				$usuario = $dados['usuario']['id'];
				$editar = [
					'id' => $id,
					'idpessoa' => addslashes($_POST['idpessoa']),
					'vltitulo' => addslashes($_POST['vltitulo']),
					'natureza' => addslashes($_POST['natureza']),
					'forpag' => addslashes($_POST['forpag']),
					'dtvenc' => addslashes($_POST['dtvenc']),
					'dtemissao' => addslashes($_POST['dtemissao']),
					'nrtitulo' => addslashes($_POST['nrtitulo']),
					'controle' => $controle,
					'usuario' => $usuario
				];
				$editarcontaspagar = new contasPagar();
				$edtcontaspagar = $editarcontaspagar->editar($editar);
				header('LOCATION: '.BASE_URL.'ContasPagar');
			}
			/* Envia para Visualização */
				$dados['contasPagar'] = ['id'=> addslashes($id)];
				$buscacontaspagar = new contasPagar();
				$dados["contasPagar"] = $buscacontaspagar->GetId($dados);
				$this->loadTemplate('editarContasPagar',$dados); 
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
			header('LOCATION: '.BASE_URL.'ContasPagar');
		}
}
?>