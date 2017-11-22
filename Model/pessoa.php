<?php 
/* INSERT INTO `pessoas` (`id`, `nome`, `tipo`, `telefone`, `endereco`, `observacao`) VALUES (NULL, 'Evandro Henrique Risso', 'AMBOS', '91-980916249', 'Alm Dom Pedro I, 07, entrada pela travessa dos andradas', 'gosta da marmita sem arroz, feijao e macarrão'); */
	class pessoa extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT * FROM pessoas".$usuario." order by id";
			$sql = $this->db->query($sql);
			if (!empty($sql)){
				if ($sql->rowCount() > 0){
					$sql = $sql->fetchALL();
					return $sql;
				}
			}
		}

		public function ultimoid($id){
			$usuario = $id['usuario']['id'];
			$sql = "SELECT max(id)+1 as id FROM pessoas".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$pessoa = $id['pessoa']['id'];
			$sql = "SELECT * FROM pessoas".$usuario." where id = $pessoa order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$pessoa = $id['pessoa']['id'];
			$sql = "delete FROM pessoas".$usuario." where id = $pessoa";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$nome = $id['nome'];
			$tipo = $id['tipo'];
			$endereco = $id['endereco'];
			$telefone = $id['telefone'];
			$observacao = $id['observacao'];
			$controle = $id['controle'];
			$sql = "update pessoas".$usuario." set nome = '$nome' , tipo = '$tipo' , telefone = '$telefone' , endereco = '$endereco', observacao = '$observacao' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$nome = $id['nome'];
			$tipo = $id['tipo'];
			$endereco = $id['endereco'];
			$telefone = $id['telefone'];
			$observacao = $id['observacao'];
			$controle = $id['controle'];
			$sql = "insert into pessoas".$usuario." set nome = '$nome' , tipo = '$tipo' , telefone = '$telefone' , endereco = '$endereco', observacao = '$observacao' , controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
 ?>