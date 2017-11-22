<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Produto:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="produto" placeholder="Nome do Produto"  requerid>
       	</div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Grupo:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="grupo">
              <option>Grupo de Produto</option>
              <?php foreach ($viewData['grupodeprodutos'] as $key) { ?>
              <option value="<?php echo $key['id']; ?>"><?php echo $key['grupo']; ?></option>
              <?php }  ?>
            </select>
		    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Familia:</label>
        <div class="col-sm-9">
            <select class="form-control"  name="familia">
              <option>Familia de Produto</option>
              <?php foreach ($viewData['familiadeprodutos'] as $key) { ?>
              <option value="<?php echo $key['id']; ?>"><?php echo $key['familia']; ?></option>
              <?php }  ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Preço de Custo:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="valorcusto" placeholder="Preço de Custo do Produto"  requerid>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Preço de Venda:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="valorvenda" placeholder="Preço de Venda do Produto"  requerid>
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