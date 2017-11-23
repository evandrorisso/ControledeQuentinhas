<?php

	class usuario extends Model {
		
		public function getUsuarioEmail($email){
			
			$sql = "Select * from usuarios where email='$email'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}
		
		public function getUsuarioId($id){
			
			$sql = "Select * from usuarios where controle='$id'";
			$sql = $this->db->query($sql);

			if ($sql->rowCount() > 0){

				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function cadastrar($cadastro){

			$nome = $cadastro['nome'];
			$email = $cadastro['email'];
			$senha = $cadastro['senha'];
			$sql = "INSERT usuarios set nome = '$nome', email = '$email', senha='$senha';";
			$sql = $this->db->query($sql);
			$ultimoid = "select max(id) as a from usuarios";
			$ultimoid = $this->db->query($ultimoid);
			$ultimoid = $ultimoid->fetch();
			$pessoa = new criarTabelas();
			$criarTabela = $pessoa->tabelaPessoa($ultimoid['a']);
			$criarTabela = $pessoa->tabelaContas($ultimoid['a']);
			$sql = "UPDATE usuarios set controle = md5(".$ultimoid['a'].") where id=".$ultimoid['a'].";";
			$sql .= "INSERT configurar set idusuario = ".$ultimoid['a'].";";
			$sql = $this->db->query($sql);
			/*
			$pessoa = new criarTabelas();
			$criarTabela = $pessoa->tabelaPessoa($ultimoid['a']);*/
		}

	}

?>