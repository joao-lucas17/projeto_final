<!DOCTYPE html>
<html>
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

            <!-- Main Sidebar Container -->
            <?php include "sidebar.php" ?>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Blank Page</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Blank Page</li>
                                </ol>
                            </div>           
                        </div>
                        <!--          Conteudo do template-->
                        <?= $contents ?>
                    </div><!-- /.container-fluid -->
                </section>
            </div>
            <!-- /.content-wrapper -->

            <!-- Footer -->
            <?php include "footer.php" ?>

            <!-- Control Sidebar -->
            <?php include "control_side.php" ?>
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
        <?php foreach ($js_files as $js): ?>
            <script src='<?= $js ?>'></script>
        <?php endforeach; ?>
    </body>
</html>
