<?php 

	class formaspagamento extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT a.id, a.forma,b.tipo,b.icone,b.numerario,b.cartao FROM formasPagamento".$usuario." a left join tipoFinanceiro b on a.tipo = b.id order by id";
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
			$sql = "SELECT max(id)+1 as id FROM formasPagamento".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$formaspagamento = $id['formaspagamento']['id'];
			$sql = "SELECT * FROM formasPagamento".$usuario." where id = $formaspagamento order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$formaspagamento = $id['formaspagamento']['id'];
			$sql = "delete FROM formasPagamento".$usuario." where id = $formaspagamento";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$formapagamento = $id['formapagamento'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "update formasPagamento".$usuario." set forma = '$formapagamento' , tipo = '$tipo' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$formapagamento = $id['formapagamento'];
			$tipo = $id['tipo'];
			$controle = $id['controle'];
			$sql = "insert into formasPagamento".$usuario." set forma = '$formapagamento' , tipo = '$tipo', controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
?>