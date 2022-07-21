<?php

require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
$listaUsers = $cadUsuario->getUsuario();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Usuário</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <form action="<?php $cadUsuario->inserir(); ?>" method="POST">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <br/><br/>
        <select name="perfilAcesso">
            <option value="">Perfil Acesso</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select> 
        <br/><br/>
        <input type="text" name="usuario" placeholder="Digite seu Nickname">
        <br/><br/>
        <input type="password" name="senha" placeholder="Digite sua senha" minlength="8"> 
        <br/>
        <input type="submit" name="salvar" value="Salvar">
        
        <input type="reset" name="limpar" value="Limpar">
        
        <input type="button" value="Voltar" onclick="location.href='../index.php'">
        
        <input type="button" value="Lista Usuários" onclick="document,getElementById('lista').style.visibility='visible'">
        
        

    </form>

    <div id="lista" style="visibility: hidden">
        <h2>Lista Usuários</h2>
        <table>
            <thead>
                <tr>
                    <th>
                        ID 
                    <th>
                        Nome Usuário 
                    <th>
                        Usuário 
                    <th>
                        Funções
                    </th>
                    </th>
                    </th>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaUsers as $user) : ?>
                    <tr>
                        <td><?php echo $user['idUsuario'] ?></td>
                        <td><?php echo $user['nomeUsuario'] ?></td>
                        <td><?php echo $user['usuario'] ?></td>
                        <td><?php echo $user['perfilAcesso'] ?></td>                                               
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="button" value="Ocultar Usuários" onclick="document,getElementById('lista').style.visibility='hidden'">
    </div>
</body>
</html>