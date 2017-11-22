                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Grupo</th>
                            <th class="center">Familia</th>
                            <th class="center">Preço Custo</th>
                            <th class="center">Preço Venda</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

                        	 if (isset($viewData['Produtos']))
                        		{ 
                                    
                        			foreach ($viewData['Produtos'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['produto']; ?></td>
		                            		<td class="center"><?php echo $key['grupo']; ?></td>
                                            <td class="center"><?php echo $key['familia']; ?></td>
                                            <td class="center">R$ <?php echo str_replace(".", ",",$key['valorcusto']); ?></td>
                                            <td class="center">R$ <?php echo str_replace(".", ",",$key['valorvenda']); ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."Produtos/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."Produtos/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
