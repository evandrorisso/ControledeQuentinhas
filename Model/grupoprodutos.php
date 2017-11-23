<?php 
	class grupoprodutos extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT * FROM grupoProdutos".$usuario." order by id";
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
			$sql = "SELECT max(id)+1 as id FROM grupoProdutos".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$grupo = $id['grupodeprodutos']['id'];
			$sql = "SELECT * FROM grupoProdutos".$usuario." where id = $grupo order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$grupo = $id['grupodeprodutos']['id'];
			$sql = "delete FROM grupoProdutos".$usuario." where id = $grupo";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$grupo = $id['grupo'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "update grupoProdutos".$usuario." set grupo = '$grupo' , tipo = '$tipo' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$grupo = $id['grupo'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "insert into grupoProdutos".$usuario." set grupo = '$grupo' , tipo = '$tipo', controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
?>