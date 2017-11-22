<?php 
/* INSERT INTO `pessoas` (`id`, `nome`, `tipo`, `telefone`, `endereco`, `observacao`) VALUES (NULL, 'Evandro Henrique Risso', 'AMBOS', '91-980916249', 'Alm Dom Pedro I, 07, entrada pela travessa dos andradas', 'gosta da marmita sem arroz, feijao e macarrão'); */
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