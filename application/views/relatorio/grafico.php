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
                                foreach ($dias as $d)
                                    $data = explode("-", $d->dia);
                                echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
                    </div>
                </div>                                                                  
            </div>
        </div>
    </div>
</div>

<!-- Graphs -->
<script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>
<script>
    var ctx = document.getElementById("myChart");
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"],
            datasets: [{
                    label: "Desperdício alimentar",
                    data: [50, 74, 150, 25, 200, 51, 8],
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