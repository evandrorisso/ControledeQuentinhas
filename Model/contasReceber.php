<?php 
	class contasReceber extends Model{
		
		public function mostrar($id){
			$usuario = $id;
			$sql = "SELECT cp.id as id, cp.nr_titulo, cp.id_pessoa, cp.dt_venc, cp.dt_emissao, cp.vlTitulo, cp.id_natureza, cp.id_forpag, cp.origem, cp.controle as controle, pe.id as pessoaid, pe.nome, pe.tipo, nt.id as naturezaid, nt.classificacao, nt.natureza, nt.tipo, fp.id as pagamentoid, fp.forma FROM contasReceber".$usuario." as cp 
			LEFT JOIN pessoas".$usuario." as pe ON pe.id = cp.id_pessoa
			LEFT JOIN naturezaLancamento".$usuario." as nt ON nt.id = cp.id_natureza
			LEFT JOIN formasPagamento".$usuario." as fp ON fp.id = cp.id_forpag
			order by dt_emissao";
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
			$sql = "SELECT max(idcontas)+1 as id FROM contasReceber".$usuario;
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}

		public function GetId($id){
			$usuario = $id['usuario']['id'];
			$contasReceber = $id['contasReceber']['id'];
			$sql = "SELECT cp.id as id, cp.nr_titulo, cp.id_pessoa, cp.dt_venc, cp.dt_emissao, cp.vlTitulo, cp.id_natureza, cp.id_forpag, cp.origem, cp.controle as controle, pe.id as pessoaid, pe.nome, pe.tipo, nt.id as naturezaid, nt.classificacao, nt.natureza, nt.tipo, fp.id as pagamentoid, fp.forma FROM contasReceber".$usuario." as cp 
			LEFT JOIN pessoas".$usuario." as pe ON pe.id = cp.id_pessoa
			LEFT JOIN naturezaLancamento".$usuario." as nt ON nt.id = cp.id_natureza
			LEFT JOIN formasPagamento".$usuario." as fp ON fp.id = cp.id_forpag
			where cp.id = $contasReceber 
			order by dt_emissao";
			$sql = $this->db->query($sql);
			if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}
		}	

		public function RemoveId($id){
			$usuario = $id['usuario']['id'];
			$contasReceber = $id['contasReceber']['id'];
			$sql = "delete FROM contasReceber".$usuario." where id = $contasReceber";
			$sql = $this->db->query($sql);
			/*if ($sql->rowCount() > 0){
				$sql = $sql->fetch();
				return $sql;
			}*/
		}	

		public function editar($id){
			$usuario = $id['usuario'];
			$codigo = $id['id'];
			$pessoa = $id['idpessoa'];
			$vltitulo = $id['vltitulo'];
			$vltitulo = str_replace(",", ".",$vltitulo);
			$natureza = $id['natureza'];
			$forpag = $id['forpag'];
			$dtvenc =  str_replace('/', '-', $id['dtvenc']);
			$dtvenc = date('Y-m-d',strtotime($dtvenc));
			$dtemissao =  str_replace('/', '-', $id['dtemissao']);
			$dtemissao = date('Y-m-d',strtotime($dtemissao));
			$nrtitulo = $id['nrtitulo'];
			$controle = $id['controle'];
			$sql = "update contasPagar".$usuario." set nr_titulo='$nrtitulo',id_pessoa=$pessoa,dt_venc='$dtvenc',dt_emissao='$dtemissao',vlTitulo=$vltitulo,id_natureza=$natureza,id_forpag=$forpag where id = $codigo and controle = '$controle'";
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