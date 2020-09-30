<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Formulário de atualização do Usuário</h1>
        <hr/>
        
        <form method="post" action="<?php echo site_url("usuario/atualizar")?>">
            
            <input type="hidden" name="codigo" value="<?= $usuario->idusuario ?>"><br>
            
            <label>Nome</label><br>
            <input type="text" name="nome" value="<?= $usuario->nome ?>"><br>
            
            <label>Login</label><br>
            <input type="text" name="login" value="<?= $usuario->login ?>"><br>
            
            <label>Senha</label><br>
            <input type="password" name="senha" value="<?= $usuario->senha ?>"><br>
            
            <button type="submit">Atualizar</button>
            
        </form>
    </body>
</html>
