<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Relatório</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url("public") ?>/plugins/fontawesome-free/css/all.min.css">
        <link href="http://localhost/projeto1/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" rel="stylesheet">
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia2.png") ?>" type="image/jpg" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?= base_url("public") ?>/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" type="text/css" />
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
                        <div class="col-lg-12">
                            <div class="card card-info card-outline">
                                <div class="card-header pt-1 pb-1">
                                    <div class="row align-items-center">
                                        <div class="col-9">
                                            <h5 class="card-title m-0">Relatório de desperdício</h5>  
                                        </div>
                                        <div class="col-3">
                                            <a href="http://localhost/projeto1/index.php/user/index/print" class='add-anchor add_button btn btn-success floatR'>
                                                <div>
                                                    <span class="add">Imprimir</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-2" >
                                    <div class="flexigrid">
                                        <div class="bDiv">
                                            <div id="main-table-box" class="main-table-box">
                                                <div id="ajax_list" class="ajax_list">
                                                    <table class="table table-striped" id="relatorio">

                                                        <thead class="thead-dark">
                                                            <tr>
                                                                <th><center>Dia</center></th>
                                                        <th><center>Tipo Refeição</center></th>
                                                        <th><center>Cardápio</center></th>
                                                        <th><center>Qtd de Pessoas</center></th>
                                                        <th><center>Desperdício</center></th>
                                                        <th><center>Observação</center></th>
                                                        </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php foreach ($dados as $d) : ?>
                                                                <tr>
                                                                    <td width="16%"><div class="text-center"><?php
                                                                            $data = explode("-", $d->dia);
                                                                            echo "$data[2]/$data[1]/$data[0]";
                                                                            ?></div></td>
                                                                    <td width="16%"><div class="text-center"><?= $d->tipo ?></div></td>
                                                                    <td width="16%"><div class="text-center"><?= $d->nome ?></div></td>
                                                                    <td width="16%"><div class="text-center"><?= $d->quantidade_pessoas ?></div></td>
                                                                    <td width="16%"><div class="text-center"><?= $d->peso ?></div></td>
                                                                    <td width="16%"><div class="text-center"><?= $d->observacao ?></div></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div><!-- /.container-fluid -->
                        <div class="row">
                            <div class="col-lg-12">
                                <a class="export-anchor floatR" href="http://localhost/projeto1/index.php/user/index/export" download>
                                    <span class="export">Exportar</span>
                                </a>
                                <a class="print-anchor floatR" href="http://localhost/projeto1/index.php/user/index/print">
                                    <span class="print">Imprimir</span>
                                </a>

                            </div>
                        </div>
                       
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

        <script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js") ?>" crossorigin="anonymous"></script>
        <script src="<?= base_url("public") ?>/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?= base_url("public") ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?= base_url("public") ?>/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?= base_url("public") ?>/dist/js/demo.js"></script>

        <!--  GroceryCRUD-->
        <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#relatorio').DataTable();
            });
        </script>
    </body>
</html>
