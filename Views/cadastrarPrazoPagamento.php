<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Prazo de Pagamento:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="prazopagamento" placeholder="Nome do Prazo de Pagamento"  requerid>
       	</div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Parcelas:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="parcelas" placeholder="Quantidade de Parcelas"  requerid>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Quantidade:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="quantidade" placeholder="Dias entre as Parcelas"  requerid>
        </div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Forma Pag. Padrão:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="forma">
              <option>FORMA DE PAGAMENTO</option>
           		<?php foreach ($viewData['formaspagamento'] as $key) { ?>
              <option value="<?php echo $key['id']; ?>"><?php echo $key['forma'] ;?></option>
              <?php } ?>
            </select>
		</div>
    </div>
    <div class="row" align="right">
       	<button type="submit" class="btn btn-white btn-success btn-bold"><i class="ace-icon fa fa-floppy-o bigger-120 green"></i> Gravar</button>
        <a href="javascript:history.back()" class="btn btn-white btn-danger btn-bold"><i class="ace-icon fa fa-reply bigger-120 red"></i> Voltar</a>
    </div>
</form>
</div>
    <div class="col-md-3"></div>
</div>