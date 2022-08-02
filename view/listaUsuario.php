<!DOCTYPE html>
<?php

require_once '../controller/CUsuario.php';
$cadUsuario = new CUsuario();
$listaUsers = $cadUsuario->getUsuario();

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="conatainer">
<div id="lista">
        <h2>Lista Usuários</h2>
        <table class="table-striped">
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
                        <td><?php echo $user['idUsuario']; ?></td>
                        <td><?php echo $user['nomeUsuario']; ?></td>
                        <td><?php echo $user['usuario']; ?></td>
                        <td><?php
                        if($user['perfilAcesso'] == "admin") {
                            echo "Administrador";
                        } else if ($user['perfilAcesso'] == "user") {
                            echo "Usuário";
                        }
                        ?> </td> 
                        <td><form action="EditarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">,
                                <input type="submit" name="editar" value="Editar">
                            </form> 

                            <form action="../controller/DeletarUser.php" method="POST">
                                <input type="hidden" name="idUsuario" value="<?php echo $user['idUsuario']; ?>">,
                                <input type="submit" name="deletar" value="Deletar">
                            </form> 
                        </td>                                              
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input type="button" value="Voltar" onclick="location.href='CadUsuario.php'">
    </div>
    </div>
    <script src="assets/js/bootstrap.bundle" crossorigin="anonymous"> </script>
</body>
</html>