<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="card text-bg-success">
<div class="card-body">
<h5 class="card-title">Contas a Receber</h5>
<p class="card-text">R$ 1.200,00</p>
</div>
</div>

</body>
</html>





<?php

include "../config/config.php";
include "../includes/auth.php";
echo"<h1> Seja muito bem vindo," . $_SESSION["usuario"] . "</h1>";


if ($_SESSION["perfil"] == "cliente") {
    echo "<h3>Bem-vindo! Esta é a sua Área do Cliente.</h3>";
} 
elseif ($_SESSION["perfil"] == "empresa") {
    echo "<h3>Bem-vindo! Esta é a sua Área da Empresa.</h3>";
} 
elseif ($_SESSION["perfil"] == "Adimnistrador") {
    echo "<h3>Bem-vindo! Você está no Painel do Adiministrador.</h3>";
}



?>