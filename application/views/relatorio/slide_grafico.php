<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <!--                    gráfico de barras-->
        <div class="card-body p-2" >  
                
                <form class="form-inline" method="post" action="<?= site_url("Graficos_publicos/graficos") ?>">
                        <div class="form-group mb-2 col-md-4">
                            <label for="select_data_inicial" class="">Data Inicial: </label>
                            <select name="campo_dias_inicial" class="custom-select ml-2 col-8" id="select_data_inicial">
                                <?php
                                foreach ($dias as $d) {
                                    $data = explode("-", $d->dia);
                                    echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-2 col-md-4">
                            <label for="select_data_inicial">Data Final: </label>
                            <select name="campo_dias_final" class="custom-select ml-2 col-8" id="select_data_final">
                                <?php
                                foreach ($dias as $d) {
                                    $data = explode("-", $d->dia);
                                    echo "<option value='" . $d->idrefeicao . "'>" . "$data[2]/$data[1]/$data[0]" . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-2 col-md-4">
                            <button type="button" class="add-anchor add_button btn btn-success floatR" id="btn_atualiza">Mostrar Gráficos</button>
                        </div>                     
                    </form>

               
                
                

            </div>
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Valor gasto com a comida desperdiçada</h6>
                                </div>
                                <div class="col-2">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" id="download1" download="Valor_gasto.png"><i class="fa fa-download"></i>        PNG</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="valor_desperdicado" width="95" height="40" class="chartjs-size-monitor-expand"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="carousel-item">
      <!--                    gráfico de pizza-->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Porcentagem de desperdício por dia</h6>
                                </div>
                                <div class="col-2">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" id="download2" download="Porcentagem_desperdicada.png"><i class="fa fa-download"></i>        PNG</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="porcentagem_desperdicio" width="94" height="39" class="chartjs-size-monitor-expand"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
    <div class="carousel-item">
    <!--                    gráfico de área - linhas-->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Desperdício alimentar por peso em quilos</h6>
                                </div>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" id="download3" download="Peso_desperdicado.png"><i class="fa fa-download"></i>        PNG</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="peso_desperdicado" width="95" height="44" class="chartjs-size-monitor-expand"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
      <div class="carousel-item">
     <!--                    gráfico de barras-->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Comida desperdiçada por refeição nesse período</h6>
                                </div>
                                <div class="col-2">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" id="download4" download="Desperdicio_refeicao.png"><i class="fa fa-download"></i>        PNG</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="refeicao" width="95" height="43" class="chartjs-size-monitor-expand"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
      <div class="carousel-item">
     <!--                    gráfico de barras-->
                    <div class="col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <div class="col-11">
                                    <h6 class="m-0 font-weight-bold text-info">Quantidade Pessoas Atendidas no Refeitório</h6>
                                </div>
                                <div class="col-2">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-bars fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#" id="download5" download="Qtd_pessoas.png"><i class="fa fa-download"></i>        PNG</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                                    <canvas id="pessoas_atendidas" width="95" height="40" class="chartjs-size-monitor-expand"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
  </div>
</div>


<!-- Graphs -->
<script src="<?= base_url("bootstrap/js/Chart.min.js") ?>"></script>


<script src="<?= base_url("public/dist/js/config_graph_bar.js") ?>"> </script>
<script>
//    var labels_grafico1 = <?= $labels_bar1 ?> ;
//    var dados_grafico1 = <?= $data_bar1 ?> ;
//    
//     var labels_grafico2 = <?= $labels_bar2 ?> ;
//    var dados_grafico2 = <?= $data_bar2 ?> ;
//    
//    
//    var barra = gerar_grafico_barra_vertical("valor_desperdicado", labels_grafico2, dados_grafico2, "Desperdicio em reais " );        
//    var pizza = gerar_grafico_barra_horizontal_porcentagem("porcentagem_desperdicio", labels_grafico1, dados_grafico1, "Porcentagem de desperdício " );                
//    var linha = gerar_grafico_linha("peso_desperdicado", labels_grafico1, dados_grafico1 );                
//    
    
    window.addEventListener('DOMContentLoaded', init, false);

    var graph1, graph2, graph3, graph4, graph5; 
    
    var btn = document.querySelector("#btn_atualiza");
    btn.addEventListener('click', showGraphics);
    
    function init(){
        var ndatas = $('#select_data_inicial option').length;
        if (ndatas > 2){
           let dtinicio = $("#select_data_inicial option:selected").text();
           let dtfinal = $("#select_data_final option:last-child"); 
           dtfinal.attr('selected', 'selected');
           requestAjax(dtinicio, dtfinal.text());
        }

    }
    
    function showGraphics(){
        let dtinicio = $("#select_data_inicial option:selected").text();
        let dtfinal = $("#select_data_final option:selected").text();
        requestAjax(dtinicio, dtfinal);
    }
    
    function requestAjax(dtinicio, dtfinal){
        if (graph1 !== undefined){
            graph1.destroy();
            graph2.destroy();
            graph3.destroy();
            graph4.destroy();
            graph5.destroy();
        }
        
     
        
        $.ajax({
        method: "POST",
        url: "<?= site_url('Graficos_publicos/graficos_ajax') ?>",
        data: { data_inicio: dtinicio, data_final: dtfinal }
      })
        .done(function( msg ) {
            
            let dados = JSON.parse(msg);
    console.log(dados.graph4);
            graph1 = gerar_grafico_barra_vertical("valor_desperdicado", dados.graph1.label, dados.graph1.data, "Desperdicio em reais " ); 
            graph2 = gerar_grafico_barra_horizontal_porcentagem("porcentagem_desperdicio", dados.graph2.label, dados.graph2.data, "Porcentagem de desperdício " ); 
            graph3 =gerar_grafico_linha("peso_desperdicado", dados.graph3.label, dados.graph3.data );                            
            graph4 = gerar_grafico_barra_horizontal_refeicao("refeicao", dados.graph4.label, dados.graph4.data, "Desperdicio por refeição " ); 
            graph5 =gerar_grafico_barra_horizontal_pessoas("pessoas_atendidas", dados.graph5.label, dados.graph5.data, "Quantidade pessoas atendidas " ); 
            
            graph1.update();
            graph2.update();
            graph3.update();
            graph4.update();
            graph5.update();
        });
    }

    
</script>

<script>
    document.getElementById("download1").addEventListener('click', function(){
        var url_base64jp = document.getElementById("valor_desperdicado").toDataURL("image/jpg");
        var a =  document.getElementById("download1");
        a.href = url_base64jp;
    });
    
    
    document.getElementById("download2").addEventListener('click', function(){
        var url_base64jp = document.getElementById("porcentagem_desperdicio").toDataURL("image/jpg");
        var a =  document.getElementById("download2");
        a.href = url_base64jp;
    });
    
    
    document.getElementById("download3").addEventListener('click', function(){
        var url_base64jp = document.getElementById("peso_desperdicado").toDataURL("image/jpg");
        var a =  document.getElementById("download3");
        a.href = url_base64jp;
    });
    
    
    document.getElementById("download4").addEventListener('click', function(){
        var url_base64jp = document.getElementById("refeicao").toDataURL("image/jpg");
        var a =  document.getElementById("download4");
        a.href = url_base64jp;
    });
    
    
    document.getElementById("download5").addEventListener('click', function(){
        var url_base64jp = document.getElementById("pessoas_atendidas").toDataURL("image/jpg");
        var a =  document.getElementById("download5");
        a.href = url_base64jp;
    });
    
    
</script>

