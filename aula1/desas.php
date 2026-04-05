
<?php
$produto= [
[
"id" => 2,
"descrição" => "Arrumar pc",
"valor"=>"470",
"tipo" => "recebr"
],
[
"id" => 3,
"descrição" => "Cabo do monitor",
"valor" => "220",
"tipo" => "pagar"
],
[
"id" => 4,
"descrição" => "Troca do teclado",
"valor" => "120",
"tipo" => "receber"
]

];


    echo "ID: " . $produto[0]["id"]."<br>";
    echo "Descrição: " . $produto[0]["descrição"]."<br>";
    echo "Valor: " . $produto[0]["valor"]."<br>";   
    echo "Tipo: " . $produto[0]["tipo"]."<br>";   
    echo"-----------------------------<br>";


    
    echo "ID: " . $produto[1]["id"]."<br>";
    echo "Descrição: " . $produto[1]["descrição"]."<br>";
    echo "Valor: " . $produto[1]["valor"]."<br>";   
    echo "Tipo: " . $produto[1]["tipo"]."<br>";   
    echo"-----------------------------<br>";


    
    echo "ID: " . $produto[2]["id"]."<br>";
    echo "Descrição: " . $produto[2]["descrição"]."<br>";
    echo "Valor: " . $produto[2]["valor"]."<br>";   
    echo "Tipo: " . $produto[2]["tipo"]."<br>";   
    echo"-----------------------------<br>";


?>