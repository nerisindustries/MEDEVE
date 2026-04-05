<?php


$prod=[

[
    "Nome"=> "Violão",
    "Preco"=>"250,99"
],
[
    "Nome"=> "Guitarra",
    "Preco"=>"450,89"
],
[
    "Nome"=> "Contra-Baixo",
    "Preco"=>"690,99"
]




];
foreach($prod as $music){

echo "Nome do instrumento:". $music["Nome"]."<br>";
echo "Preço do instrumento:". $music["Preco"]."<br>";
echo"------------------------------------<br>";
}



?>