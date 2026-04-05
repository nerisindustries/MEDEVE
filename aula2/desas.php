
<?php
$clientes= [
[
"valor" => "5.009,99",
"Descricao" => "Troca de Vira brequin",
"tipo"=> "receber"

],
[
"valor" => "7.679,99",
"Descricao" => "Troca das Bielas",
"tipo"=>"pago"

],
[
"valor" => "50,99",
"Descricao" => "Troca do filtro de ar",
"tipo"=>"receber"

]

];

foreach($clientes as $pago){
    if($pago["tipo"]== "receber"){
    echo "Valor: " . $pago["valor"] . "<br>";
    echo "Descrição: " . $pago["Descricao"] . "<br>";
    echo "Status: " . $pago["tipo"] . "<br>";
echo"--------------<br>";
    }
}

?>