                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Tipo</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['GruposdeProdutos']))
                        		{ 
                        			foreach ($viewData['GruposdeProdutos'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['grupo']; ?></td>
		                            		<td class="center"><?php echo $key['tipo']; ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."GrupoProdutos/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."GrupoProdutos/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
