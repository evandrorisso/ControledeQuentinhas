<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Controle de Quentinhas</title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo BASE_URL; ?>assets/js/ace-extra.min.js"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body  class="skin-2">
        
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                    <div class="error-container">
                                        <div class="well">
                                            <h1 class="grey lighter smaller">
                                                <span class="blue bigger-125">
                                                    <i class="ace-icon fa fa-sitemap"></i>
                                                    404
                                                </span>
                                                Pagina Não Encontrada
                                            </h1>

                                            <hr />
                                            <h3 class="lighter smaller">Nós procuramos em todos os lugares, mas não conseguimos encontrá-lo!</h3>

                                            <div>
                                                <form class="form-search">
                                                    <span class="input-icon align-middle">
                                                        <i class="ace-icon fa fa-search"></i>

                                                        <input type="text" class="search-query" placeholder="Busque Aqui..." />
                                                    </span>
                                                    <button class="btn btn-sm" type="button">Pesquisar!</button>
                                                </form>

                                                <div class="space"></div>
                                                <h4 class="smaller">Tente um dos seguintes:</h4>

                                                <ul class="list-unstyled spaced inline bigger-110 margin-15">
                                                    <li>
                                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                                        Re-verifique o URL para erros de digitação
                                                    </li>

                                                    <li>
                                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                                        Leia as faq
                                                    </li>

                                                    <li>
                                                        <i class="ace-icon fa fa-hand-o-right blue"></i>
                                                        Conte-nos sobre isso
                                                    </li>
                                                </ul>
                                            </div>

                                            <hr />
                                            <div class="space"></div>

                                            <div class="center">
                                                <a href="<?php echo BASE_URL; ?>Login" class="btn btn-primary">
                                                    <i class="ace-icon fa fa-tachometer"></i>
                                                    Acessar
                                                </a>
                                            </div>
                                        </div>
                                    </div>        
                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div><!-- /.main-content-inner -->
            </div><!-- /.main-content -->
            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">Controle de Quentinhas</span>
                             &copy; 2017 - 2017
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div><!-- /.Footer-content -->
                </div><!-- /.Footer-inner -->
            </div><!-- /.Footer -->
            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->    
        <!-- basic scripts -->
        <!--[if !IE]> -->
        <script src="<?php echo BASE_URL; ?>assets/js/jquery-2.1.4.min.js"></script>
        <!-- <![endif]-->
        <!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo BASE_URL; ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
        <!-- page specific plugin scripts -->
        <!-- ace scripts -->
        <script src="<?php echo BASE_URL; ?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/ace.min.js"></script>
        <!-- inline scripts related to this page -->
    </body>
</html>
