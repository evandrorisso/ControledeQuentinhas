<!DOCTYPE html>
<html lang="pt-br">

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

<body class="login-layout">

    <div class="container">
    <br><br><br><br>
        <div class="row">
                <div class="col-lg-12">
                    <div class="well well-lg">
                        <h1><i class="ace-icon fa fa-leaf green"></i>
                                    <span class="red">Controle</span>
                                    <span class="purple">de</span>
                                    <span class="white" id="id-text2">Quentinhas</span></h1>
                        <p>Sistema criado para realização do controle financeiro do pontinho/restaurante da minha mãe que vende quentinhas. Sistema aberto para uso!</p>
                        <p><a class="btn btn-app btn-purple btn-sm" role="button" href="<?php echo BASE_URL; ?>Login"><i class="ace-icon fa fa-share bigger-200"></i>Acessar</a> 
                        </p>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo BASE_URL; ?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo BASE_URL; ?>assets/dist/js/sb-admin-2.js"></script>

</body>

</html>
