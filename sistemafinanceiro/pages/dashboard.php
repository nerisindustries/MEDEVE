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