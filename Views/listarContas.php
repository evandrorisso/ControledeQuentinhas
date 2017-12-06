
                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Saldo Inicial</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['contas']))
                        		{ 
                        			foreach ($viewData['contas'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['idcontas']; ?></td>
                                            <td class="center"><?php echo $key['nomecontas']; ?></td>
		                            		<td class="center">R$ <?php echo str_replace(".", ",",$key['saldoinicial']); ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."Contas/Editar/".$key['idcontas'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."Contas/Remover/".$key['idcontas'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
