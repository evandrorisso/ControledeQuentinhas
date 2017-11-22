    <div class="row">
        <div class="col-md-12" align="left">
            <form method="POST" class="form-horizontal" role="form">
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Razão Social:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="razaosocial" placeholder="Razão Social ME LTDA EIRELI" value="<?php echo $viewData['configurar']['razaoempresa'] ?>">
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">Nome Fantasia:</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="nomefantasia" placeholder="Sua Empresa" value="<?php echo $viewData['configurar']['fantasiaempresa'] ?>">
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">CNPJ/CPF:</label>
                            <div class="col-sm-9">
                            <input class="form-control" name="cnpj" placeholder="XX.XXX.XXX/XXXX-XX" value="<?php echo $viewData['configurar']['cnpj_cpf'] ?>">
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1">I. E. / RG:</label>
                            <div class="col-sm-9">
                            <input class="form-control" name="ie" placeholder="Sua Empresa" value="<?php echo $viewData['configurar']['ie_rg'] ?>">
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="row" align="right">
                    <button type="submit" class="btn btn-app btn-grey btn-xs radius-4">
                        <i class="ace-icon fa fa-save bigger-230"></i> SALVAR
                    </button>
                </div>
            </form>
        </div>
    </div>