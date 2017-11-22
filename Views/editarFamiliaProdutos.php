<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	<div class="form-group">
    	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Codigo:</label>
        <div class="col-sm-2">
        	<input class="form-control" type="text" name="codigo" placeholder="Razão Social ME LTDA EIRELI" value="<?php echo $viewData['familiadeprodutos']['id']; ?>" disabled>
        </div>
        <div class="col-sm-7"></div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="familia" placeholder="Nome da Pessoa" value="<?php echo $viewData['familiadeprodutos']['familia']; ?>" requerid>
       	</div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">TIPO:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="tipo">
              <option value="ANALITICO" <?php echo ($viewData['familiadeprodutos']['tipo'] == "ANALITICO")?'selected="selected"':''; ?>>ANALITICO</option>
              <option value="SINTETICO" <?php echo ($viewData['familiadeprodutos']['tipo'] == "SINTETICO")?'selected="selected"':''; ?>>SINTETICO</option>
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