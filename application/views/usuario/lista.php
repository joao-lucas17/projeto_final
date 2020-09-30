<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1><?php echo $titulo; ?></h1>
        <hr/>
        <a href="<?php echo site_url("usuario/adicionar") ?>">Adicionar</a>
        
        <table border="1" width="100%">
            <tr>
                <td>Nome</td>
                <td>Login</td>
                <td>Ações</td>
            </tr>
        <?php
            foreach ($usuarios as $usuario) {
                echo "<tr>";
                echo "<td>$usuario->nome</td>";
                echo "<td>$usuario->login</td>";
                echo "<td>"
                     . "<a href='". site_url("usuario/excluir/$usuario->idusuario") ."'> Excluir </a> "
                     . "<a href='". site_url("usuario/form_edit/$usuario->idusuario") ."'> Atualizar </a> "   
                     . "</td>";
                echo "</tr>";
            }
        ?>
        
        
        </table>
    </body>
</html>
