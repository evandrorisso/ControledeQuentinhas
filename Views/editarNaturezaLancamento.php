<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	<div class="form-group">
    	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Codigo:</label>
        <div class="col-sm-2">
        	<input class="form-control" type="text" name="codigo" placeholder="Razão Social ME LTDA EIRELI" value="<?php echo $viewData['naturezaLancamento']['id']; ?>" disabled>
        </div>
        <div class="col-sm-7"></div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Classificação:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="classificacao" placeholder="Nome da Pessoa" value="<?php echo $viewData['naturezaLancamento']['classificacao']; ?>" requerid>
        </div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="natureza" placeholder="Nome da Pessoa" value="<?php echo $viewData['naturezaLancamento']['natureza']; ?>" requerid>
       	</div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">TIPO:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="tipo">
              <option value="RECEITA" <?php echo ($viewData['naturezaLancamento']['tipo'] == "RECEITA")?'selected="selected"':''; ?>>RECEITA</option>
              <option value="DESPESA" <?php echo ($viewData['naturezaLancamento']['tipo'] == "DESPESA")?'selected="selected"':''; ?>>DESPESA</option>
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