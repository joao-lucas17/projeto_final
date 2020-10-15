<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Relatório desperdício</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

        <!-- Bootstrap core CSS -->
        <link href="http://localhost/projeto1/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" rel="stylesheet">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" type="text/css" />
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min2.css") ?>">
        <link rel="stylesheet" href="http://localhost/projeto1/public/dist/css/adminlte.min.css">
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/dashboard.css") ?>">

        <!-- Custom styles for this template -->

    </head>

    <body>
        <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
            <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Relatório do desperdício</a>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                    <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                    <div class="sidebar-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <span data-feather="home"></span>
                                    Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file"></span>
                                    Orders
                                </a>
                            </li>
                            
                        </ul>

                        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            <a class="d-flex align-items-center text-muted" href="#">
                                <span data-feather="plus-circle"></span>
                            </a>
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Current month
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Last quarter
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Social engagement
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span data-feather="file-text"></span>
                                    Year-end sale
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <div class="col-lg-12">
                        <div class="card card-info card-outline">
                        <div class="card-header pt-1 pb-1">
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
                    </div>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Gráfico do desperdício</h1>

                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="btn-group mr-2">
                                <button class="btn btn-sm btn-outline-secondary">Share</button>
                                <button class="btn btn-sm btn-outline-secondary">Export</button>
                            </div>
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                                <span data-feather="calendar"></span>
                                This week
                            </button>
                        </div>
                    </div>

                    <canvas class="my-4" id="myChart" width="900" height="380"></canvas>        
                </main>
            </div>
        </div>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js") ?>" crossorigin="anonymous"></script>
        <script src="<?= base_url("bootstrap/js/popper.min.js") ?>"</script>
        <script src="<?= base_url("bootstrap/js/bootstrap.min.js") ?>"></script>

        <!-- Icons -->
        <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>

        <!-- Graphs -->
        <script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>
        <script type="text/javascript" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#relatorio').DataTable();
            });
        </script>
        <script>
            var ctx = document.getElementById("myChart");
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                    datasets: [{
                            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
                            lineTension: 0,
                            backgroundColor: 'transparent',
                            borderColor: '#007bff',
                            borderWidth: 4,
                            pointBackgroundColor: '#007bff'
                        }]
                },
                options: {
                    scales: {
                        yAxes: [{
                                ticks: {
                                    beginAtZero: false
                                }
                            }]
                    },
                    legend: {
                        display: false,
                    }
                }
            });
        </script>
    </body>
</html>
