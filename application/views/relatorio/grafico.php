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
                            <button class="btn btn-sm btn-outline-secondary">Share</button>
                            <button class="btn btn-sm btn-outline-secondary">Export</button>
                        </div>                   
                    </div>
                </div>                		              
            </div>
            
            
            <div class="card-body p-2" >  
                <div class='row'>
                    <div class="col-md-3">
                        <select name="campo_dias" class="browser-default custom-select custom-select-lg mb-3">
                            <?php
                                foreach ($dias as $d){
                                    $data = explode("-", $d->dia);
                                echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                                }
                            ?>
                        </select>
                        
                    </div>
                    <div class="col-md-3">
                        <select name="campo_dias" class="browser-default custom-select custom-select-lg mb-3">
                            <?php
                                foreach ($dias as $d){
                                    $data = explode("-", $d->dia);
                                echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                                }
                            ?>
                        </select>
                        
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <h5><center>Valor gasto com a comida desperdiçada semana passada</center></h5><br>
                        <canvas class="my-4" id="barra" width="900" height="480"></canvas>
                    </div>
                    <div class="col-sm-6">
                        <h5><center>Desperdício na semana passada</center></h5>
                        <div class="my-1" id="piechart_3d" style="width: 100%; height: 100%; display: block;"></div>
                        
                    </div>
                    <div class="col-lg-12">
                        <h5><center>Desperdício alimentar por peso</center></h5>
                        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
                    </div>
                    
                </div>                                                                  
            </div>
        </div>
    </div>
</div>

<!-- Graphs -->
<script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Exemplo', 'Hours per Day'],
          ['Segunda-feira',     150],
          ['Terça-feira',     200],
          ['Quarta-feira',      215],
          ['Quinta-feira',  156],
          ['Sexta-feira', 230],
          ['Sábado',    231],
          ['Domingo',    192]
        ]);
        var options = {
          is3D: true,
        };
        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
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