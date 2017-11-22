<?php 
/* INSERT INTO `pessoas` (`id`, `nome`, `tipo`, `telefone`, `endereco`, `observacao`) VALUES (NULL, 'Evandro Henrique Risso', 'AMBOS', '91-980916249', 'Alm Dom Pedro I, 07, entrada pela travessa dos andradas', 'gosta da marmita sem arroz, feijao e macarrão'); */
	class contas extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT * FROM contas".$usuario." order by idcontas";
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
			$sql = "SELECT max(idcontas)+1 as id FROM contas".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$contas = $id['contas']['id'];
			$sql = "SELECT * FROM contas".$usuario." where idcontas = $contas order by idcontas";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$contas = $id['contas']['id'];
			$sql = "delete FROM contas".$usuario." where idcontas = $contas";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$contas = $id['contas'];
			$saldoinicial = $id['saldoinicial'];
			if (empty($saldoinicial)) {
				$saldoinicial = 0;
			}
			$saldoinicial = str_replace(",", ".",$saldoinicial);
			$controle = $id['controle'];
			$sql = "update contas".$usuario." set nomecontas = '$contas' , saldoinicial = $saldoinicial where idcontas = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$contas = $id['contas'];
			$saldoinicial = $id['saldoinicial'];
			$controle = $id['controle'];
			if (empty($saldoinicial)) {
				$saldoinicial = 0;
			}
			$saldoinicial = str_replace(",", ".",$saldoinicial);
			$sql = "insert into contas".$usuario." set nomecontas = '$contas' , saldoinicial = $saldoinicial, controle = '$controle'";
			$sql = $this->db->query($sql);
		}
	}
?>