<?php 

	class tipofinanceiro extends Model{
		
		public function mostrar(){
			$sql = "SELECT * FROM tipoFinanceiro order by id";
			
			$sql = $this->db->query($sql);

			if (!empty($sql)){
				if ($sql->rowCount() > 0){
					$sql = $sql->fetchALL();
					return $sql;
				}
			}
		}
		
	}
?>