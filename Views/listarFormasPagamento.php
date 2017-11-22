                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Tipo</th>
                            <th class="center">Icone</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['formaspagamento']))
                        		{ 
                        			foreach ($viewData['formaspagamento'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['forma']; ?></td>
		                            		<td class="center"><?php echo $key['tipo']; ?></td>
                                            <td class="center"><i class="ace-icon <?php echo $key['icone']; ?> bigger-130"></i>
                                            </td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."FormasPagamento/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."FormasPagamento/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
