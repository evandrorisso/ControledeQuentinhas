                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Prazo</th>
                            <th class="center">Parcelas</th>
                            <th class="center">Pagamento Padrão</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['prazopagamento']))
                        		{ 
                        			foreach ($viewData['prazopagamento'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['prazo']; ?></td>
		                            		<td class="center"><?php echo $key['qtdparcelas']; ?></td>
                                            <td class="center"><?php echo $key['forma']; ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."PrazoPagamento/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."PrazoPagamento/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
