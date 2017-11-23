<?php
	if (!empty($_GET['ano'])) {
		$data = $_GET['ano'].'-'.$_GET['mes'];
		$m = $_GET['mes'];	
	} else{
		$data = date("Y-m");
		$m = date("m");
	};
	
	$dia1 = date('w', strtotime($data));
	$dias = date('t', strtotime($data));
	$linhas = ceil(($dia1+$dias) / 7);
	$dia1 = -$dia1;
	$data_inicio = date('Y-m-d', strtotime($dia1.' days', strtotime($data)));
	$data_fim = date('Y-m-d', strtotime(( ($dia1 + ($linhas*7) - 1) ).' days', strtotime($data)));
?>
<form method="GET">
	<select name="mes">
		<option <?php echo ($m == "01")?'selected="selected"':''; ?>>01</option>
		<option <?php echo ($m == "02")?'selected="selected"':''; ?>>02</option>
		<option <?php echo ($m == "03")?'selected="selected"':''; ?>>03</option>
		<option <?php echo ($m == "04")?'selected="selected"':''; ?>>04</option>
		<option <?php echo ($m == "05")?'selected="selected"':''; ?>>05</option>
		<option <?php echo ($m == "06")?'selected="selected"':''; ?>>06</option>
		<option <?php echo ($m == "07")?'selected="selected"':''; ?>>07</option>
		<option <?php echo ($m == "08")?'selected="selected"':''; ?>>08</option>
		<option <?php echo ($m == "09")?'selected="selected"':''; ?>>09</option>
		<option <?php echo ($m == "10")?'selected="selected"':''; ?>>10</option>
		<option <?php echo ($m == "11")?'selected="selected"':''; ?>>11</option>
		<option <?php echo ($m == "12")?'selected="selected"':''; ?>>12</option>
	</select>
	<select name="ano">
		<?php for($q=date('Y');$q>=2000;$q--): ?>
		<option ><?php echo $q; ?></option>
		<?php endfor; ?>
	</select>
	<input type="submit" value="Mostrar" />
</form>
<table class="table table-striped table-bordered table-hover">
	<caption>Datas de Pagamento</caption>
	<thead>
		<tr>
			<th class="center">Domingo</th>
			<th class="center">Segunda</th>
			<th class="center">Terça</th>
			<th class="center">Quarta</th>
			<th class="center">Quinta</th>
			<th class="center">Sexta</th>
			<th class="center">Sabado</th>
		</tr>
	</thead>
	<tbody>
		<?php for($l=0;$l<$linhas;$l++): ?>
			<tr>
				<?php for($q=0;$q<7;$q++): ?>
					<?php
						$t = strtotime(($q+($l*7)).' days', strtotime($data_inicio));
						$w = date('Y-m-d', $t);
					?>
					<td>
						<table class="table table-striped table-bordered table-hover no-margin-bottom no-border-top">
							<thead>
								<tr>
									<th>
										<i class="ace-icon fa fa-calendar-o bigger-110"></i>
										<?php echo date('d/m', $t)?>
									</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
									Contas a Pagar
									</td>
								</tr>
								<tr>
									<td>
									Contas a Receber
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				<?php endfor; ?>
			</tr>
		<?php endfor; ?>
	</tbody>
</table>