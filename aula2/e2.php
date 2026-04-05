<?php
$etec=[
[
    "nome" => "Tiago",
    "idade" => "18",
    "curso" => "Informática"
]


];

foreach($etec as $aluno){
    echo "Curso: " . $aluno["curso"] . "<br>";
    echo "Idade: " . $aluno["idade"] . "<br>";
    echo "Nome: " . $aluno["nome"] . "<br>";
}

?>