<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	  <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Codigo:</label>
        <div class="col-sm-2">
          <input class="form-control" type="text" name="codigo" placeholder="Razão Social ME LTDA EIRELI" value="<?php echo $viewData['produtos']['id']; ?>" disabled>
        </div>
        <div class="col-sm-7"></div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Produto:</label>
       	<div class="col-sm-9">
           	<input class="form-control" type="text" name="produto" placeholder="Nome do Produto"  value = "<?php echo $viewData['produtos']['produto']; ?>" requerid>
       	</div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Grupo:</label>
        <div class="col-sm-9">
           	<select class="form-control"  name="grupo">
              <?php foreach ($viewData['grupodeprodutos'] as $key): ?>
              <option value="<?php echo $key['id']; ?>" <?php echo ($key['id']==$viewData['produtos']['idgrupo'])?'selected="selected"':''; ?>><?php echo $key['grupo']; ?></option>
              <?php endforeach;  ?>
            </select>
		    </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Familia:</label>
        <div class="col-sm-9">
            <select class="form-control"  name="familia">
              <?php foreach ($viewData['familiadeprodutos'] as $key): ?>
              <option value="<?php echo $key['id']; ?>" <?php echo ($key['id']==$viewData['produtos']['idfamilia'])?'selected="selected"':'';?> ><?php echo $key['familia']; ?></option>
              <?php endforeach;  ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Preço de Custo:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="valorcusto" placeholder="Preço de Custo do Produto" value="<?php echo str_replace(".", ",",$viewData['produtos']['valorcusto']); ?>" requerid>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Preço de Venda:</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" name="valorvenda" placeholder="Preço de Venda do Produto" value="<?php echo str_replace(".", ",",$viewData['produtos']['valorvenda']); ?>" requerid>
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