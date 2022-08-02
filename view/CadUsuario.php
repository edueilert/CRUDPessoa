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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Cadastro Usuário</title>
</head>
<body>
    <div class="container text-center">
    <h1>Cadastro de usuário</h1>
    <form action="<?php $cadUsuario->inserir(); ?>" method="POST">
        <input class="form-control" type="text" name="nome" placeholder="Digite seu nome">
        <br/><br/>
        <select class="form-select" name="perfilAcesso">
            <option value="">Selecione...</option>
            <option value="admin">Administrador</option>
            <option value="user">Usuário</option>
        </select>  
        <br/><br/>
        <input class="form-control" type="text" name="usuario" placeholder="Digite seu Nickname">
        <br/><br/>
        <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" minlength="8"> 
        <br/>
        <input type="submit" class="btn btn-success" name="salvar" value="Salvar">
        
        <input type="reset" class="btn btn-danger" name="limpar" value="Limpar">
        
        <input type="button" class="btn btn-secondary" value="Voltar" onclick="location.href='../index.php'">
        
        <input type="button" class="btn btn-primary" value="Lista Usuários" onclick="location.href='listaUsuario.php'">
        
        

    </form>

    <script src="../assets/js/bootstrap.bundle" crossorigin="anonymous"> </script>
</div>
</body>
</html>