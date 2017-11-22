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
                        	 if (isset($viewData['familiadeProdutos']))
                        		{ 
                        			foreach ($viewData['familiadeProdutos'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['familia']; ?></td>
		                            		<td class="center"><?php echo $key['tipo']; ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."FamiliaProdutos/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."FamiliaProdutos/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
