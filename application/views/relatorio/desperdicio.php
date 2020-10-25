<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/grocery_crud/themes/bootstrap/css/flexigrid.css") ?>">
<div class="row">
    <div class="col-lg-12">
        <div class="card card-info card-outline">
            <div class="card-header p-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h5 class="card-title m-0">Relatório de desperdicio</h5>  
                    </div>              
                </div>
                		              
            </div>
            <div class="card-body p-2" >                                     
                <div class="flexigrid">
                    <table class="table table-bordered table-striped" id="relatorio">
                        <thead>
                            <tr>
                                <th>Dia</th>
                                <th>Tipo de Refeição</th>
                                <th>Cardápio</th>
                                <th>Quantidade de Pessoas</th>
                                <th>Total desperdiçado</th>
                                <th>Observação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dados as $d) : ?>
                                <tr>
                                    <?php $data = explode("-", $d->dia);  $data = "$data[2]/$data[1]/$data[0]"; ?>
                                    <td width="10%"><?= $data ?></td>
                                    <td width="13%"><?= $d->tipo ?></td>
                                    <td width="24%"><?= $d->nome ?></td>
                                    <td width="16%"><?= $d->quantidade_pessoas ?></td>
                                    <td width="14%"><?= $d->peso ?></td>
                                    <td width="23%"><?= $d->observacao ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>  
                </div>                              
            </div>
        </div>
    </div>
</div>





<script type="text/javascript" src="<?= base_url("bootstrap/js/jquery.dataTables.min.js") ?>"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#relatorio').DataTable();
    });
</script>