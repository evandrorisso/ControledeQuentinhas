<?php 

	class produtos extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT a.id,a.produto, a.valorcusto, a.valorvenda, a.controle, b.grupo, c.familia FROM produtos".$usuario." a left join grupoProdutos".$usuario." b on a.idgrupo = b.id left join familiaProdutos".$usuario." c on a.idfamilia = c.id  order by a.id";
			
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
			$sql = "SELECT max(id)+1 as id FROM produtos".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$produtos = $id['produtos']['id'];
			$sql = "SELECT * FROM produtos".$usuario." where id = $produtos order by id";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$produtos = $id['produtos']['id'];
			$sql = "delete FROM produtos".$usuario." where id = $produtos";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$produto = $id['produto'];
			$familia = $id['familia'];
			$grupo = $id['grupo'];
			$valorcusto = $id['valorcusto'];
			$valorvenda = $id['valorvenda'];
			$controle = $id['controle'];
			$sql = "update produtos".$usuario." set produto = '$produto' , idfamilia = $familia, idgrupo = $grupo, valorcusto = $valorcusto, valorvenda = $valorvenda where id = $codigo and controle = '$controle'";
			$sql = $this->db->query($sql);
		}

		public function cadastrar($id){
			$usuario = $id['usuario'];
			$produto = $id['produto'];
			$familia = $id['familia'];
			$grupo = $id['grupo'];
			$valorcusto = $id['valorcusto'];
			$valorvenda = $id['valorvenda'];
			$controle = $id['controle'];
			$sql = "insert into produtos".$usuario." set produto = '$produto' , idfamilia = $familia, idgrupo = $grupo, valorcusto = $valorcusto, valorvenda = $valorvenda, controle = '$controle'";
			
			$sql = $this->db->query($sql);
		}
	}
?>