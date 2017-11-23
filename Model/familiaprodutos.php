<?php 
	class familiaprodutos extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT * FROM familiaProdutos".$usuario." order by id";
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
			$sql = "SELECT max(id)+1 as id FROM familiaProdutos".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$familia = $id['familiadeprodutos']['id'];
			$sql = "SELECT * FROM familiaProdutos".$usuario." where id = $familia order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$familia = $id['familiadeprodutos']['id'];
			$sql = "delete FROM familiaProdutos".$usuario." where id = $familia";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$familia = $id['familia'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "update familiaProdutos".$usuario." set familia = '$familia' , tipo = '$tipo' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$familia = $id['familia'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "insert into familiaProdutos".$usuario." set familia = '$familia' , tipo = '$tipo', controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
?>