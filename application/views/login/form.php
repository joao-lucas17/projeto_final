<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Área restrita</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= base_url("public") ?>/plugins/fontawesome-free/css/all.min.css">
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia2.png") ?>" type="image/jpg" />
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
       <link rel="stylesheet" type="text/css" href="" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">    
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/login.css") ?>">
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia2.png") ?>" type="image/jpg" />
        <script src="<?= base_url("bootstrap/js/jquery-3.5.1.slim.min.js") ?>"></script>
        <script src="<?= base_url("bootstrap/js/jquery.mask.min.js") ?>"></script>
        <script src="<?= base_url("bootstrap/js/popper.min.js") ?>"></script>
        
        <style>
            .img-login{
                width: 140px;
                margin-bottom: 40px;
            }
            
            .botao-entrar{
                margin-top: 25px;
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container">

            <div class="row">
                <div class="col-4 offset-4 painel mt-5">
                    
                    <center><img src="<?= base_url("bootstrap/img/logo_login.png") ?>" class="img-login"></center>
                    
                    <form method="post" action="<?= site_url("login/entrar") ?>" name="novo">

                            <?php if ($this->session->flashdata("danger")) : ?>
                                <p class="alert alert-danger"><?= $this->session->flashdata("danger", "Erro ao logar") ?></p>
                            <?php endif ?>

                            <label class="" for="login">CPF</label>
                            <div class="input-group mb-2 mr-sm-2">                              
                              <input type="text" class="form-control" name="login1" id="login" placeholder="Digite seu CPF">
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                              </div>
                            </div>
                             
                            <label class="" for="senha">Senha</label>
                            <div class="input-group mb-2 mr-sm-2">                              
                              <input type="password" class="form-control" name="senha1" id="senha" placeholder="Digite sua senha">
                              <div class="input-group-append">
                                <div class="input-group-text"><i class="fas fa-lock"></i></div>
                              </div>
                            </div> 
                                                                                                                                                                                               
                            <div class="form-group mr-sm-2">
                                <div class="botao-entrar">
                                <center><input type="submit" value="ENTRAR" class="btn btn-outline-primary btn_login"></center>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
            
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#login').mask('000.000.000-00');
                });
            </script>                            
    </body>
</html>