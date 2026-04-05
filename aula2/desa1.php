<?php



$usuario=[
    [
"user"=>"Davizin",
"perfil"=>"Adimn"

    ],
 [
"user"=>"Miguel",
"perfil"=>"user"

    ],
 [
"user"=>"Mario",
"perfil"=>"usder"

    ]







];

foreach($usuario as $users){
 echo "Nome de usuário:".$users["user"]. "<br>";
 echo "Tipo de perfil:".$users["perfil"]. "<br>";
 echo"--------------------------------<br>";



}





?>