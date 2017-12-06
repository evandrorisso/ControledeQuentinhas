
                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Numero Titulo</th>
                            <th class="center">Pessoa</th>
                            <th class="center">Data Emissão</th>
                            <th class="center">Data Vencimento</th>
                            <th class="center">Natureza Lançamento</th>
                            <th class="center">Forma de Pagamento</th>
                            <th class="center">Valor</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['contasPagar']))
                        		{ 
                        			foreach ($viewData['contasPagar'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['nr_titulo']; ?></td>
                                            <td class="center"><?php echo $key['nome']; ?></td>
		                            		<td class="center"><?php echo date('d/m/Y',strtotime($key['dt_emissao'])); ?></td>
		                            		<td class="center"><?php echo date('d/m/Y',strtotime($key['dt_venc'])) ; ?></td>
                                            <td class="center"><?php echo $key['natureza']; ?></td>
                                            <td class="center"><?php echo $key['forma']; ?></td>
                                            <td>R$ <?php echo str_replace(".", ",",$key['vlTitulo']); ?></td>
                                            <td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."ContasPagar/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130 odd gradeX" data-toggle="tooltip" data-placement="top" title="Editar"></i>
												</a>
                                                <?php if ($key['origem'] == 0) {?>
												<a class="red" href="<?php echo BASE_URL."ContasPagar/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130 odd gradeX" data-toggle="tooltip" data-placement="top" title="Excluir"></i>
												</a>
		                            			<?php } else { ?>
                                                    <i class="ace-icon fa fa-lock bigger-130 odd gradeX" data-toggle="tooltip" data-placement="top" title="Titulo Gerado Pelo Sistema!"></i>
                                                <?php }; ?>
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
