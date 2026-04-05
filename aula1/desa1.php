<?php
$usuario =[

[
"usuario" => "Tiago",
"senha" => "123456",
"perfil" => "admin"

],

[
"usuario" => "Davi",
"senha" => "7474747",
"perfil" => "User"

],

[
"usuario" => "Miguel",
"senha" => "35353",
"perfil" => "User"

]



];


echo "Usuario: " . $usuario[0]["usuario"]."<br>";
echo "Senha: " . $usuario[0]["senha"]."<br>";   
echo "Perfil: " . $usuario[0]["perfil"]."<br>";
echo"-----------------------------<br>";
echo "Usuario: " . $usuario[1]["usuario"]."<br>";
echo "Senha: " . $usuario[1]["senha"]."<br>";   
echo "Perfil: " . $usuario[1]["perfil"]."<br>";
echo"-----------------------------<br>";
echo "Usuario: " . $usuario[2]["usuario"]."<br>";
echo "Senha: " . $usuario[2]["senha"]."<br>";   
echo "Perfil: " . $usuario[2]["perfil"]."<br>";





?>