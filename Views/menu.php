<!-- begin Navigation -->
    <script type="text/javascript">
        try{ace.settings.loadState('sidebar')}catch(e){}
    </script>   
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <a href="<?php echo BASE_URL; ?>Home/Sistema" class="btn btn-success">
                <i class="ace-icon fa fa-signal"></i>
            </a>

            <a class="btn btn-info">
                <i class="ace-icon fa fa-pencil"></i>
            </a>

            <a href="<?php echo BASE_URL; ?>Home/Perfilusuario" class="btn btn-warning">
                <i class="ace-icon fa fa-users"></i>
            </a>

            <a href="<?php echo BASE_URL; ?>Home/Configuracao" class="btn btn-danger">
                <i class="ace-icon fa fa-cogs"></i>
            </a>
        </div>

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->
    <ul class="nav nav-list">
                    <li class="active">
                        <a href="<?php echo BASE_URL; ?>Home/Sistema">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> Dashboard </span>
                        </a>

                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-desktop"></i>
                            <span class="menu-text">
                                Cadastros
                            </span>

                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                            
                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Pessoas
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>Pessoas\cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Pessoa
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>Pessoas">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Pessoas
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                            </li>
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                        Produtos
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>

                                <ul class="submenu">
                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Produtos
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>Produtos/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Produto
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>Produtos">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Produtos
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Grupo de Produtos
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>GrupoProdutos/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Grupo
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>GrupoProdutos">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Grupos
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Familia de Produtos
                                            <b class="arrow fa fa-angle-down"></b>
                                        </a>

                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>FamiliaProdutos/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Familia
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL ?>FamiliaProdutos">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Familia
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>

                                    
                                </ul>
                            </li>
                            <li class="">
                                <a a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Financeiro
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>
                                <b class="arrow"></b>
                                <ul class="submenu">
                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                                Natureza de Lançamento
                                                <b class="arrow fa fa-angle-down"></b>
                                        </a>
                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>NaturezaLancamento/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Natureza
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>NaturezaLancamento">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Natureza
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                                Formas de Pagamento
                                                <b class="arrow fa fa-angle-down"></b>
                                        </a>
                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>FormasPagamento/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Forma
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>FormasPagamento">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Formas
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                                Prazos de Pagamento
                                                <b class="arrow fa fa-angle-down"></b>
                                        </a>
                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>PrazoPagamento/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Prazo
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>PrazoPagamento">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Prazos
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="#" class="dropdown-toggle">
                                            <i class="menu-icon fa fa-caret-right"></i>
                                                Contas
                                                <b class="arrow fa fa-angle-down"></b>
                                        </a>
                                        <b class="arrow"></b>
                                        <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>Contas/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Conta
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>Contas">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Contas
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            
                        </ul>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-shopping-cart"></i>
                            <span class="menu-text"> Vendas </span>

                            <b class="arrow"></b>
                        </a>

                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-shopping-bag"></i>
                            <span class="menu-text"> Compras </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
                    
                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-cubes"></i>
                            <span class="menu-text"> Estoque </span>
                        </a>
                        <b class="arrow"></b>
                    </li>

                    <li class="">
                        <a href="#" class="dropdown-toggle">
                            <i class="menu-icon fa fa-truck"></i>
                            <span class="menu-text"> Entrega </span>
                        </a>
                        <b class="arrow"></b>
                    </li>
        
                    <li class="">
                        <a href="#"  class="dropdown-toggle">
                            <i class="menu-icon fa fa-dollar"></i>
                            <span class="menu-text"> Financeiro </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                            
                        <ul class="submenu">
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Contas a Pagar
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>ContasPagar/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Conta Pagar
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>ContasPagar">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Contas Pagar
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                            </li>
                            <li class="">
                                <a href="#" class="dropdown-toggle">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Contas a Receber
                                    <b class="arrow fa fa-angle-down"></b>
                                </a>

                                <b class="arrow"></b>
                                <ul class="submenu">
                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>ContasReceber/Cadastrar">
                                                    <i class="menu-icon fa fa-plus purple"></i>
                                                    Adicionar Conta Receber
                                                </a>

                                                <b class="arrow"></b>
                                            </li>

                                            <li class="">
                                                <a href="<?php echo BASE_URL; ?>ContasReceber">
                                                    <i class="menu-icon fa fa-eye pink"></i>
                                                    Listar Contas Receber
                                                </a>

                                                <b class="arrow"></b>
                                            </li>
                                        </ul>
                            </li>
                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Livro Caixa
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="<?php echo BASE_URL; ?>Calendario">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Calendário Pagamento
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#"  class="dropdown-toggle">
                            <i class="menu-icon fa fa-list-alt"></i>
                            <span class="menu-text"> Relatórios </span>
                            <b class="arrow fa fa-angle-down"></b>
                        </a>

                        <b class="arrow"></b>
                            
                        <ul class="submenu">
                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Compras
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Vendas
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Contas a Pagar
                                </a>

                                <b class="arrow"></b>
                            </li>
                            <li class="">
                                <a href="typography.html">
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Contas a Receber
                                </a>

                                <b class="arrow"></b>
                            </li>
                        </ul>
                    </li>
                    
                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>