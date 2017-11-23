<?php 

	class prazopagamento extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT a.id, a.prazo,a.qtdparcelas,a.diasparcelas,b.forma FROM prazoPagamento".$usuario." a left join formasPagamento".$usuario." b on a.idforma = b.id order by a.id";
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
			$prazopagamento = $id['prazopagamento']['id'];
			$sql = "SELECT * FROM prazoPagamento".$usuario." where id = $prazopagamento order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$prazopagamento = $id['prazopagamento']['id'];
			$sql = "delete FROM prazoPagamento".$usuario." where id = $prazopagamento";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$prazopagamento = $id['prazopagamento'];
			$quantidade = $id['quantidade'];
			$parcelas = $id['parcelas'];
			$forma = $id['forma'];
			$controle = $id['controle'];
			$sql = "update prazoPagamento".$usuario." set idforma = '$forma', qtdparcelas = $parcelas, diasparcelas = $quantidade , prazo = '$prazopagamento' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$prazopagamento = $id['prazopagamento'];
			$quantidade = $id['quantidade'];
			$parcelas = $id['parcelas'];
			$forma = $id['forma'];
			$controle = $id['controle'];
			$sql = "insert into prazoPagamento".$usuario." set idforma = '$forma', qtdparcelas = $parcelas, diasparcelas = $quantidade , prazo = '$prazopagamento', controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
?>