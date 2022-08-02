<?php 
if(isset($_POST['editar'])){
    $id = $_POST['idUsuario'];
}
require_once '../controller/CUsuario.php';
$cadUser = new CUSuario();
$user = $cadUser->getUsuarioById($id);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Editar usuário</h1>
    <form action="../controller/UpdateUser.php" method="POST">
        <input type="hidden" name="idUsuario" value="<?php echo $user[0] ['idUsuario'];?>">
        <input type="text" name="nome" value="<?php echo $user[0] ['nomeusuario'];?>">
        <br/><br/>
        <select name="perfilAcesso">
            <option value="">Perfil Acesso</option>
            <option value="admin" <?php 
            if ($user[0]['perfilAcesso'] == "admin") {
                echo "selected";} ?>>
                Administrador</option>
            <option value="user" <?php 
            if ($user[0]['perfilAcesso'] == "user") {
                echo "selected";} ?>>
                Usuário</option>
        </select>
        <br/><br/>
        <input type="text" name="usuario" value="<?php echo $user[0] ['usuario'];?>">
        <br/>
        <input type="submit" name="salvar" value="Salvar">
                
        <input type="button" value="Voltar" onclick="location.href='listaUsuario.php'">
        
    </form>
</body>
</html>