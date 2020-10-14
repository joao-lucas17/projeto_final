<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>

        <link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>">      
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/login.css") ?>">
        <link rel="sortcut icon" href="<?= base_url("bootstrap/img/logo_guia2.png") ?>" type="image/jpg" />
        <script src="<?= base_url("bootstrap/js/jquery.mask.min.js") ?>"></script>
        <script src="<?= base_url("bootstrap/js/popper.min.js") ?>"></script>


    </head>

    <body>
        <div class="container">

            <div class="d-flex justify-content-center h-100"><br>

                <div class="login">

                    <div class="card-header">
                        <center><img src="<?= base_url("bootstrap/img/logo_login3.png") ?>" class="logo-login"></center>
                    </div>

                    <div class="card-body">
                        <form method="post" action="<?= site_url("login/entrar") ?>" name="novo">

                            <?php if ($this->session->flashdata("danger")) : ?>
                                <p class="alert alert-danger"><?= $this->session->flashdata("danger", "Erro ao logar") ?></p>
                            <?php endif ?>


                            <div class="input-group form-group">

                                <div class="fundo_icone">
                                    <img src="<?= base_url("bootstrap/img/user.png") ?>" class="icone">
                                </div>
                                <input type="text" name="login1" class="form-control" minlength="14" maxlength="14" onkeypress="$(this - > input - > post(this)).mask('000.000.000-00');" placeholder="Insira seu CPF">

                            </div>

                            <div class="input-group form-group">
                                <div class="fundo_icone">
                                    <img src="<?= base_url("bootstrap/img/password.png") ?>" class="icone">
                                </div>
                                <input type="password" name="senha1" class="form-control" placeholder="Insira sua senha">
                            </div>
                            <div class="form-group">

                                <input type="submit" value="ENTRAR" class="login_btn">
                            </div>

                        </form>

                    </div>
                    <div class="card-footer">
                        <div class="link-login">
                            <a href="<?= site_url("login/recuperarSenha") ?>">Esqueci minha senha</a>
                        </div>
                    </div><br>

                </div>
            </div>


        </div>
    </body>
</html>