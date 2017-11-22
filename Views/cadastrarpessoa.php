<div class="row">
	<div class="col-md-1"></div>
    <div class="col-md-8" align="center">
        <form action="" method="POST" class="form-horizontal" role="form">
	        
	        <div class="form-group">
       			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome:</label>
	            <div class="col-sm-9">
           			<input class="form-control" type="text" name="nome" placeholder="Nome da Pessoa"  requerid>
	            </div>
	        </div>
	        <div class="form-group">
       			<label class="col-sm-3 control-label no-padding-right" for="form-field-1">TIPO:</label>
        		<div class="col-sm-9">
	               	<select class="form-control"  name="tipo">
	               		<option value="FORNECEDOR">FORNECEDOR</option>
	               		<option value="CLIENTE">CLIENTE</option>
	               		<option value="AMBOS">AMBOS</option>
	               	</select>
	            </div>
	        </div>
	        <div class="form-group">
		       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Endereço:</label>
		        <div class="col-sm-9">
		           	<input class="form-control" type="text" name="endereco" placeholder="Endereço da Pessoa">
	            </div>
	        </div>	
			<div class="form-group">
		       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Telefone:</label>
		       	<div class="col-sm-9">
		           	<input class="form-control" type="text" name="telefone" placeholder="Telefones da Pessoa">
	            </div>
	        </div>
	        <div class="form-group">
		       	<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Observação:</label>
		        <div class="col-sm-9">
			        <textarea id="form-field-11" class="autosize-transition form-control" name="observacao"></textarea> 
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