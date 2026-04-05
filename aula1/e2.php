
<?php
$lojinha= [
[
"id" => 2,
"nome" => "Nesquik",
"valor"=>"470",
"quantidade" => "10"
],
[
"id" => 3,
"nome" => "Toddynho",
"valor" => "220",
"quantidade" => "8"
],
[
"id" => 4,
"nome" => "Danoninho",
"valor" => "120",
"quantidade" => "5"
]

];

foreach($lojinha as $produto){
    echo "ID: " . $produto["id"]."<br>";
    echo "Nome: " . $produto["nome"]."<br>";
    echo "Valor: " . $produto["valor"]."<br>";   
    echo "Quantidade: " . $produto["quantidade"]."<br>";   
    echo"-----------------------------<br>";

}
?>