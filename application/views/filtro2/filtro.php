<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Escolher filtros</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    </head>
    <body>
        <form method="post" action="<?= site_url("relatorio/desperdicio")?>">
            <div class="modal-body">
                <div class="row">                               
                    <div class="form-group col-sm-6">
                        <label for="dt_inicio">Dia inicial</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" name="de" class="form-control pull-right" id="datepicker" autocomplete="off" value="data_inicio">
                        </div>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="dt_fim">Dia final</label>                                  
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="ate" class="form-control pull-right" id="datepicker2" autocomplete="off" value="<?php echo $this->input->get('ate'); ?>">
                        </div>
                    </div>                              
                </div>                      
                <div class="form-group">                                
                    
                    </div>   
                
                <div class="form-group">                                
                    <label for="tipo" class="control-label">Selecione o que deseja pesquisar:</label>
                    <select name="tipo" class="form-control">
                            <option value="">Selecione intervalo do peso desperdiçado</option>
                            <option value="dia">Dia&nbsp;&nbsp;</option>
                            <option value="tipo">Tipo&nbsp;&nbsp;</option>
                            <option value="s46da8d18">Cardapio&nbsp;&nbsp;</option>
                            <option value="quantidade_pessoas">Quantidade pessoas&nbsp;&nbsp;</option>
                            <option value="observacao">Observacao&nbsp;&nbsp;</option>
                        </select>
                    <input type="text" name="peso" class="form-control pull-left" placeholder="Digite um valor para o item escolhido">
                        
                </div>     
                                       
                </div>
                <div class="modal-footer clearfix">
                       <button type="submit" class="btn btn-outline-success btn-lg btn-block"><i class="fa fa-search"></i> Gerar Relatório</button>
                </div>
        </form>
    </body>
</html>
