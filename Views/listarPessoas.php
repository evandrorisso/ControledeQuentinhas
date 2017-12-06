                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Tipo</th>
                            <th class="center">Telefone</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['Pessoas']))
                        		{ 
                        			foreach ($viewData['Pessoas'] as $key) { ?>
	                        			<tr class="odd gradeX" data-toggle="tooltip" data-placement="top" title="<?php echo $key['observacao']; ?>">
		                            		<td class="center"><?php echo $key['id']; ?></td>
		                            		<td class="center"><?php echo $key['nome']; ?></td>
		                            		<td class="center"><?php echo $key['tipo']; ?></td>
		                            		<td id="telefone" class="center"><?php echo $key['telefone']; ?></td>
		                            		<td class="center">
		        	                   			<a class="green" href="<?php echo BASE_URL."Pessoas/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."Pessoas/remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
