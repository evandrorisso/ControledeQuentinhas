                <table  id="dynamic-table" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="center">Classificação</th>
                            <th class="center">Codigo</th>
                            <th class="center">Nome</th>
                            <th class="center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        	 if (isset($viewData['naturezaLancamento']))
                        		{ 
                        			foreach ($viewData['naturezaLancamento'] as $key) { ?>
	                        			<tr>
                                            <td class="center"><?php echo $key['classificacao']; ?></td>
                                            <td class="center"><?php echo $key['id']; ?></td>
                                            <td class="center"><?php echo $key['natureza']; ?></td>
		                            		<td class="center">
                                                <?php if ($key['id'] <> 1 && $key['id'] <> 2){ ?>
		        	                   			<a class="green" href="<?php echo BASE_URL."NaturezaLancamento/Editar/".$key['id'];  ?>">
													<i class="ace-icon fa fa-pencil bigger-130"></i>
												</a>
												<a class="red" href="<?php echo BASE_URL."NaturezaLancamento/Remover/".$key['id'];  ?>">
													<i class="ace-icon fa fa-trash-o bigger-130"></i>
												</a>
		                            			<?php } ?>
		                            		</td>
	                        			</tr>
                        <?php }}; ?>
                        
                    </tbody>
                </table>
