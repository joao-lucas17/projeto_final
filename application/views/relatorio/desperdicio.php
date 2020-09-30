<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v4.0.1">
        <title>Relatório</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

        <!-- Bootstrap core CSS -->
        <link href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet" >
        <link href="http://localhost/projeto1/assets/grocery_crud/themes/flexigrid/css/flexigrid.css" rel="stylesheet">

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
        <div class="flexigrid">
            <div class="bDiv">
                <div id="main-table-box" class="main-table-box">
                    <div id="ajax_list" class="ajax_list">
                        <table class="table table-striped">

                            <thead class="thead-dark">
                                <tr>
                                    <th><center>Dia</center></th>
                                    <th><center>Tipo de Refeição</center></th>
                                    <th><center>Cardápio</center></th>
                                    <th><center>Quantidade de Pessoas</center></th>
                                    <th><center>Total desperdiçado</center></th>
                                    <th><center>Observação</center></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($dados as $d) : ?>
                                    <tr>
                                        <td width="16%"><div class="text-center"><?php $data = explode("-", $d->dia);
                                            echo "$data[2]/$data[1]/$data[0]"; ?></div></td>
                                        <td width="16%"><div class="text-center"><?= $d->tipo ?></div></td>
                                        <td width="16%"><div class="text-center"><?= $d->cardapio_idcardapio ?></div></td>
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
    </body>

</html>