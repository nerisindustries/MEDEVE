<?php
include "config/config.php";
include "data/dados.php";
$erro = "";

if ($_POST) {
foreach ($usuarios as $user) {
if (
$_POST["usuario"] == $user["usuario"] &&
$_POST["senha"] == $user["senha"]
) {
$_SESSION["usuario"] = $user["usuario"];
$_SESSION["perfil"] = $user["perfil"];
header("Location: pages/dashboard.php");
exit;
}
}
$erro = "Usuário ou senha inválidos!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="POST" action="login.php">  

<div class="mb-3">
<label class="form-label">Usuario</label>
<input name="usuario" type="text" class="form-control" >
</div>
<div class="mb-3">
<label class="form-label">Senha</label>
<input name="senha" type="password" class="form-control">
</div>
<button class="btn btn-primary  bg-danger" >🔧Enviar🔧</button>
<img src="" alt="">
</form>
</body>
</html>








