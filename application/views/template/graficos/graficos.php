<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Área restrita</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url("public") ?>/plugins/fontawesome-free/css/all.min.css">
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia2.png") ?>" type="image/jpg" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
       <link rel="stylesheet" type="text/css" href="" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= base_url("public") ?>/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!--  GroceryCRUD-->
        <?php
        if (isset($css_files))
            foreach ($css_files as $css):
                ?>
                <link href="<?= $css ?>" rel="stylesheet">
            <?php endforeach; ?>

    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
            <!-- Navbar -->
            <?php include "navbar.php" ?>
          
            <!-- Content Wrapper. Contains page content -->
            <div class="">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1><?= isset($titulo) ? $titulo : "" ?></h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#"><?= isset($menu) ? $menu : "" ?></a></li>
                                    <li class="breadcrumb-item active"><?= isset($submenu) ? $submenu : "" ?></li>
                                </ol>
                            </div>           
                        </div>
                        <!--          Conteudo do template-->
                        <div id="print" class="conteudo">
                        <?= $contents ?>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
            </div>
            <!-- /.content-wrapper -->
            
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?= base_url("public") ?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url("public") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url("public") ?>/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url("public") ?>/dist/js/demo.js"></script>
        
       
 

        <!--  GroceryCRUD-->
        <?php 
        if (isset($js_files))
           foreach ($js_files as $js): ?>
            <script src='<?= $js ?>'></script>
        <?php endforeach; ?>
            
        <!-- Data Table -->        
        <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>        	
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>        	
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>        	
        <script src="<?= base_url("public") ?>/dist/js/enableDataTables.js"></script>
        
    </body>
</html>
