<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Formulário de cadastro do Usuário</h1>
        <hr/>
        
        <form method="post" action="<?php echo site_url("usuario/salvar") ?>">
            
            <label>Nome</label><br>
            <input type="text" name="nome"><br>
            
            <label>Login</label><br>
            <input type="text" name="login"><br>
            
            <label>Senha</label><br>
            <input type="password" name="senha"><br>
            
            <button type="submit">Cadastrar</button>
            
        </form>
    </body>
</html>
