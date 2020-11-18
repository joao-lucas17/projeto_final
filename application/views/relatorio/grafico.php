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
                
                <form class="form-inline" method="post" action="<?= site_url("relatorio/grafico") ?>">
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

               
                
                
<!--                ínicio dos gráficos -->
                <div class="row">
                    
<!--                    gráfico de barras-->
                    <div class="col-sm-6">
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
                                        <div class="dropdown-header">Fazer Download:</div>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_png.png") ?>" class="img-icone"/>PNG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_jpg.png") ?>" class="img-icone"/>JPG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_gif.png") ?>" class="img-icone"/>GIF</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">            
                                    <canvas id="valor_desperdicado" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

<!--                    gráfico de pizza-->
                    <div class="col-sm-6">
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
                                        <div class="dropdown-header">Fazer Download:</div>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_png.png") ?>" class="img-icone"/>PNG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_jpg.png") ?>" class="img-icone"/>JPG</a>
                                        <a class="dropdown-item" href="#"><img src="<?= base_url("bootstrap/img/arquivo_gif.png") ?>" class="img-icone"/>GIF</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="porcentagem_desperdicio"  class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>


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
                                    <canvas id="peso_desperdicado" style="display: block; width: 273px; height: 220px;" width="273" height="120" class="chartjs-render-monitor"></canvas>
                                </div>

                            </div>
                        </div>
                    </div>

<!--                    gráfico de barras-->
                    <div class="col-sm-6">
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
                                    <canvas id="refeicao" style="display: block; width: 213px; height: 120px;" width="173" height="106" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

<!--                    gráfico de barras-->
                    <div class="col-sm-6">
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
                                    <canvas id="pessoas_atendidas" style="display: block; width: 213px; height: 120px;" width="173" height="106" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div> 
<!--final dos gráficos-->
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
        $.ajax({
        method: "POST",
        url: "<?= site_url('relatorio/grafico_ajax') ?>",
        data: { data_inicio: dtinicio, data_final: dtfinal }
      })
        .done(function( msg ) {
            let dados = JSON.parse(msg);
            console.log(msg);
            gerar_grafico_barra_vertical("valor_desperdicado", dados.graph2.label, dados.graph2.data, "Desperdicio em reais " ); 
            gerar_grafico_barra_horizontal_porcentagem("porcentagem_desperdicio", dados.graph2.label, dados.graph1.data, "Porcentagem de desperdício " ); 
            gerar_grafico_linha("peso_desperdicado", dados.graph1.label, dados.graph1.data );    
            
            
            gerar_grafico_barra_horizontal_refeicao("refeicao", dados.graph4.label, dados.graph4.data, "Quantidade de desperdicio por refeição " ); 
            gerar_grafico_barra_horizontal_pessoas("pessoas_atendidas", dados.graph5.label, dados.graph5.data, "Quantidade pessoas atendidas " ); 
        });
    }

    
</script>


