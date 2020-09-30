<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Recuperar Senha</title>
		<link rel="stylesheet" href="<?= base_url("bootstrap/css/bootstrap.min.css") ?>">
        <link rel="stylesheet" href="<?= base_url("bootstrap/css/login.css") ?>">
	</head>
	
        <body>
            <div class="container">
                 <div class="d-flex justify-content-center h-100">
		<div class="cadastro">
                    <div class="card-body">
                        <form method="post" action="<?= site_url("login/cadastrarDados") ?>" class="form-cadastro">
				
                            <p><h3>Email</h3></p>
                        <input type="email" name='campo_email' placeholder="Insira seu email" class="form-control"><br>
                                					  
                                <input type="submit" value="Enviar dados para o email" class="btn btn-outline-success btn-lg btn-block">
                                <input type="hidden" name="env" value="form">
       				 				
			</form>
				
		</div>
                </div>
                 </div>
                </div>
	</body>
</html>

