<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	<div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Classificação:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="classificacao" placeholder="1.XXX para receita e 2.xxx para despesa"  requerid>
        </div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="natureza" placeholder="Nome da Natureza" requerid>
       	</div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">TIPO:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="tipo">
              <option>Tipo de Valor</option>
              <option value="RECEITA">RECEITA</option>
              <option value="DESPESA">DESPESA</option>
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