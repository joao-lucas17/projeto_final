<div class="row">
    <div class="col-lg-12">
        <div class="card card-info card-outline">
            <div class="card-header pt-1 pb-1">
                <div class="row align-items-center">
                    <div class="col-10">
                        <h5 class="card-title m-0">Gráfico de desperdício</h5>  
                    </div>
                    <div class="col-2">                        
                        <div class="btn-group">
                            <button class="btn btn-sm btn-outline-secondary">Compartilhar</button>
                            <button class="btn btn-sm btn-outline-secondary">Exportar</button>
                        </div>                   
                    </div>
                </div>                		              
            </div>


            <div class="card-body p-2" >  
                <div class='row'>
                    <div class="col-md-3">
                        <select name="campo_dias" class="browser-default custom-select custom-select-lg mb-3">
                            <?php
                            foreach ($dias as $d) {
                                $data = explode("-", $d->dia);
                                echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col-md-3">
                        <select name="campo_dias" class="browser-default custom-select custom-select-lg mb-3">
                            <?php
                            foreach ($dias as $d) {
                                $data = explode("-", $d->dia);
                                echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                            }
                            ?>
                        </select>

                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Valor gasto com a comida desperdiçada semana passada</h6>
                                </div>
                                <div class="col-2">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Fazer Download:</div>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_png.png") ?>" class="img-icone"/>PNG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_jpg.png") ?>" class="img-icone"/>JPG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_gif.png") ?>" class="img-icone"/>GIF</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="barra" style="display: block; width: 213px; height: 120px;" width="173" height="106" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Desperdício na semana passada</h6>
                                </div>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Fazer Download:</div>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_png.png") ?>" class="img-icone"/>PNG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_jpg.png") ?>" class="img-icone"/>JPG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_gif.png") ?>" class="img-icone"/>GIF</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">

                                <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="pie" style="display: block; width: 273px; height: 220px;" width="273" height="220" class="chartjs-render-monitor"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Desperdício alimentar por peso</h6>
                                </div>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Formas de Download:</div>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_png.png") ?>" class="img-icone"/>PNG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_jpg.png") ?>" class="img-icone"/>JPG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_gif.png") ?>" class="img-icone"/>GIF</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">

                                <div class="chart-pie pt-4 pb-2"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="myChart" style="display: block; width: 273px; height: 220px;" width="273" height="120" class="chartjs-render-monitor"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>                                                                  
            </div>
        </div>
    </div>
</div>

<!-- Graphs -->
<script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>

<script>
    var ctx = document.getElementById("pie");
    var pie = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"],
            datasets: [{
                    label: "Desperdício alimentar",
                    data: [150, 200, 215, 156, 230, 231, 192],
                    lineTension: 0,
                    backgroundColor: ["#3366cc", "#dc3912", "#ff9900", "#109618", "#990099", "#0099c6", "#dd4477"],
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'white',
                    borderWidth: 2,
                    pointBackgroundColor: '#09801B'
                }]
        },

    });
</script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["07/09/2020", "15/09/2020", "16/09/2020", "17/09/2020", "18/09/2020", "19/09/2020", "20/09/2020", "21/09/2020", "22/09/2020", "23/09/2020", "24/09/2020"],
            datasets: [{
                    label: "Desperdício alimentar",
                    data: [150, 200, 215, 156, 230, 231, 192, 187, 271, 199, 222],
                    lineTension: 0,
                    backgroundColor: 'rgba(140,214,166,0.51)',
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: '#09801B',
                    borderWidth: 4,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            legend: {
                display: true,
            }
        }
    });
</script>
<script>
    var ctx = document.getElementById("barra");
    var barra = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"],
            datasets: [{
                    label: "Valor gasto com a comida desperdiçada",
                    data: [150, 200, 215, 156, 230, 231, 192],
                    lineTension: 0,
                    backgroundColor: ["purple", "purple", "purple", "purple", "purple", "purple", "purple"],
                    strokeColor: "rgba(220,220,220,1)",
                    borderColor: 'transparent',
                    borderWidth: 4,
                    pointBackgroundColor: '#09801B'
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            },
            legend: {
                display: false,
            }
        }
    });
</script>