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
                    <div class="col-12">
                        <div class="my-4" id="piechart_3d" style="width: 700px; height: 400px;"></div>
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
          ['Segunda-feira', 'Hours per Day'],
          ['Terça-feira',     11],
          ['Quarta-feira',      2],
          ['Quinta-feira',  2],
          ['Sexta-feira', 2],
          ['Sábado',    7]
        ]);
        var options = {
          title: 'Desperdício nessa semana',
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