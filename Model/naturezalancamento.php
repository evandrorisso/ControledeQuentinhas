<?php 
	class naturezalancamento extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT * FROM naturezaLancamento".$usuario." order by tipo,classificacao";
			$sql = $this->db->query($sql);
			if (!empty($sql)){
				if ($sql->rowCount() > 0){
					$sql = $sql->fetchALL();
					return $sql;
				}
			}
		}

		public function mostrarTipo($id,$t){
			$usuario = $id;
			if ($t == 'RECEITA') {
				$i = '1.000';
			} else{
				$i = '2.000';
			}
			$sql = "SELECT * FROM naturezaLancamento".$usuario." where tipo = '$t' and classificacao <> '$i' order by tipo,classificacao";
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
			$sql = "SELECT max(id)+1 as id FROM naturezaLancamento".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$naturezaLancamento = $id['naturezaLancamento']['id'];
			$sql = "SELECT * FROM naturezaLancamento".$usuario." where id = $naturezaLancamento order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$naturezaLancamento = $id['naturezaLancamento']['id'];
			$sql = "delete FROM naturezaLancamento".$usuario." where id = $naturezaLancamento";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$natureza = $id['natureza'];
			$tipo = $id['tipo'];
			$classificacao = $id['classificacao'];
			$controle = $id['controle'];
			$sql = "update naturezaLancamento".$usuario." set natureza = '$natureza' , tipo = '$tipo', classificacao = '$classificacao' where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$natureza = $id['natureza'];
			$tipo = $id['tipo'];
			$classificacao = $id['classificacao'];
			$controle = $id['controle'];
			$sql = "insert into naturezaLancamento".$usuario." set natureza = '$natureza' , tipo = '$tipo', classificacao = '$classificacao', controle = '$controle'";
			
			$sql = $this->db->query($sql);
		}
	}
?>