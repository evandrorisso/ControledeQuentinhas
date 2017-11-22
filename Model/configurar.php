<?php

	class configurar extends Model {

		public function getconfigurar($id)
			{
				$sql = "Select * from configurar where idusuario='$id'";
				$sql = $this->db->query($sql);
				if ($sql->rowCount() > 0)
					{
						$sql = $sql->fetch();
						return $sql;
					}
			}

		public function addconfigurar($id)
			{


			}	

		public function updateconfigurar($id)
			{
				$razaosocial = $id['razaosocial'];
				$nomefantasia = $id['nomefantasia'];
				$ie = $id['ie'];
				$cnpj = $id['cnpj'];
				$usuario = $id['usuario'];
				$sql = "update configurar set razaoempresa= '$razaosocial', fantasiaempresa = '$nomefantasia', cnpj_cpf = '$cnpj', ie_rg = '$ie' where idusuario = $usuario;";
				$sql = $this->db->query($sql);
			}

	}

?>