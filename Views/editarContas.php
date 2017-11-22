<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	  <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Codigo:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="codigo" placeholder="Nome da Conta" value="<?php echo $viewData['contas']['idcontas'] ?>" disabled  requerid>
        </div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Conta:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="conta" placeholder="Nome da Conta" value="<?php echo $viewData['contas']['nomecontas'] ?>" requerid>
       	</div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Saldo Inicial:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="saldoinicial" placeholder="Saldo Inicial da Conta" value="<?php echo str_replace(".", ",",$viewData['contas']['saldoinicial']) ?>" requerid>
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