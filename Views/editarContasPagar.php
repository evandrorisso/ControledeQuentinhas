<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
<form action="" method="POST" class="form-horizontal" role="form">
	  <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Dt. Emissão:</label>
        <div class="col-sm-3">
          <div class="input-group">
            <input class="form-control input-mask-date" type="text" name="dtemissao" id="form-field-mask-1" value="<?php echo date('d/m/Y',strtotime($viewData['contasPagar']['dt_emissao'])); ?>" requerid>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Dt. Vencimento:</label>
        <div class="col-sm-3">
          <div class="input-group">
            <input class="form-control" type="text" name="dtvenc" value="<?php echo date('d/m/Y',strtotime($viewData['contasPagar']['dt_venc'])); ?>" requerid>
            <span class="input-group-addon">
              <i class="fa fa-calendar bigger-110"></i>
            </span>
          </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Numero Titulo:</label>
        <div class="col-sm-3">
            <input class="form-control" type="text" name="nrtitulo" placeholder="Nome da Conta" value="<?php echo $viewData['contasPagar']['nr_titulo'] ?>" requerid>
        </div>
        <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Valor Titulo:</label>
        <div class="col-sm-3">
          <div class="input-group">
            <input class="form-control" type="text" name="vltitulo" id="vltitulo" data-mask="#.##0,00" data-mask-reverse="true" placeholder="Nome da Conta" value="<?php echo str_replace(".", ",",$viewData['contasPagar']['vlTitulo']) ?>" requerid>
            <span class="input-group-addon">
              <i class="fa fa-dollar bigger-110"></i>
            </span>
          </div>
        </div>
    </div>
    <div class="form-group">
       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome Pessoa:</label>
       	<div class="col-sm-2">
          <div class="input-group">
          <input class="form-control" type="text" name="idpessoa" placeholder="Nome da Conta" value="<?php echo $viewData['contasPagar']['id_pessoa'] ?>" requerid>
          <span class=" input-group-addon">
            <a href=""><i class="ace-icon fa fa-search bigger-120 blue"></i></a>
          </span>
          </div>
        </div>
        <div class="col-sm-7">
            <input class="form-control" type="text" name="nomepessoa" placeholder="Nome da Conta" value="<?php echo $viewData['contasPagar']['nome'] ?>" disabled="disabled" requerid>
       	</div>

    </div>
    
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Natureza de Lançamento</label>
      <div class="col-sm-9">
        <select class="form-control" name="natureza">
          <?php foreach ($viewData['naturezaLancamento'] as $key) { ?>
            <option value="<?php echo $key['id']; ?>" <?php echo ($viewData['contasPagar']['id_natureza'] == $key['id'])?'selected="selected"':'';?>><?php echo $key['classificacao'].' - '.$key['natureza'] ;?></option>
          <?php } ?>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Formas de Pagamento</label>
      <div class="col-sm-9">
        <select class="form-control" name="forpag">
          <?php foreach ($viewData['formaspagamento'] as $key) { ?>
            <option value="<?php echo $key['id']; ?>" <?php echo ($viewData['contasPagar']['id_forpag'] == $key['id'])?'selected="selected"':'';?>><?php echo $key['forma'] ;?></option>
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