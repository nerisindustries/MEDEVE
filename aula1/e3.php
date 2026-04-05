
<?php
$clientes= [
[
"id" => 5,
"nome" => "Tiago",
"saldo"=>"470",

],
[
"id" => 6,
"nome" => "Maria",
"saldo" => "17898,56"

],
[
"id" => 7,
"nome" => "Jurandir",
"saldo" => "500,89"
]

];

echo "ID: " . $clientes[0]["id"]."<br>";
echo "Nome: " . $clientes[0]["nome"]."<br>";
echo "Saldo: " . $clientes[0]["saldo"]."<br>";   

echo "-----------------------------<br>";
echo "ID: " . $clientes[1]["id"]."<br>";
echo "Nome: " . $clientes[1]["nome"]."<br>";
echo"Saldo: " . $clientes[1]["saldo"]."<br>";   
echo "-----------------------------<br>";
echo "ID: " . $clientes[2]["id"]."<br>";
echo "Nome: " . $clientes[2]["nome"]."<br>";
echo "Saldo: " . $clientes[2]["saldo"]."<br>";



?>