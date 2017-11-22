<?php 
/* INSERT INTO `pessoas` (`id`, `nome`, `tipo`, `telefone`, `endereco`, `observacao`) VALUES (NULL, 'Evandro Henrique Risso', 'AMBOS', '91-980916249', 'Alm Dom Pedro I, 07, entrada pela travessa dos andradas', 'gosta da marmita sem arroz, feijao e macarrão'); */
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