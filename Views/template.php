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
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/fullcalendar.min.css" />
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
        <?php
            include('Views/menusidebar.php');
        ?>
        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>
            <div id="sidebar" class="sidebar responsive ace-save-state">
                <?php
                    include('Views/menu.php');
                ?>
            </div><!-- /.sidebar -->
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#"><?php echo $viewName;  ?></a>
                            </li>
                            <li class="active">
                                <?php echo $viewData['usuario']['nome']; ?>
                            </li>
                        </ul><!-- /.breadcrumb -->
                        <div class="nav-search" id="nav-search">
                            <form class="form-search">
                                <span class="input-icon">
                                    <input type="text" placeholder="Pesquisar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                    <i class="ace-icon fa fa-search nav-search-icon"></i>
                                </span>
                            </form>
                        </div><!-- /.nav-search -->
                    </div><!-- /.Breadcrumbs -->
                    <div class="page-content">
                        <div class="page-header">
                            <h1>
                                <?php echo ucfirst($viewName);  ?>
                                <small>
                                    <i class="ace-icon fa fa-angle-double-right"></i>
                                    <?php echo $viewData['usuario']['nome']; ?>
                                </small>
                            </h1>
                        </div><!-- /.page-header -->
                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                    <?php $this->loadViewInTemplate($viewName, $viewData); ?>
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
                            <span class="blue bolder"><?php echo NOME_SISTEMA; ?></span>
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
        <script src="<?php echo BASE_URL; ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo BASE_URL; ?>assets/js/jquery.mask.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
