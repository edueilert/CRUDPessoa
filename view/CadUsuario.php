<?php

require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
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
            <option value="">Selecione...</option>
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
        
        <input type="button" value="Lista Usuários" onclick="location.href='listaUsuario.php'">
        
        

    </form>

   
</body>
</html>