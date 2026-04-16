<?php
include "../config/config.php";
include "../includes/auth.php";
include "../includes/header.php";
include "../includes/menu.php";

?>







<div class="container">



<?php


echo "<h1> Seja muito bem vindo," . $_SESSION["usuario"] . "</h1>";


if ($_SESSION["perfil"] == "cliente") {
    echo "<h3> Bem-vindo! Esta é a sua Área do Cliente.</h3>";
} 
elseif ($_SESSION["perfil"] == "empresa") {
    echo "<h3> Bem-vindo! Esta é a sua Área da Empresa.</h3>";
} 
elseif ($_SESSION["perfil"] == "adiministrador") {
    echo "<h3> Bem-vindo! Você está no Painel do Adiministrador.</h3>";
    
    }
 
elseif ($_SESSION["perfil"] == "financeiro") {
    echo "<h3> Bem-vindo! Você está na Área financeira.</h3>";
}

    ?>

    <div class="container mt-4">
    <div class="row">
        
        
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Contas Pagas</div>
                <div class="card-body">
                    <h5 class="card-title">R$ 1.500,00</h5>
                    <p class="card-text">Total liquidado este mês.</p>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Contas a Pagar</div>
                <div class="card-body">
                    <h5 class="card-title">R$ 850,00</h5>
                    <p class="card-text">Previsão de saída</p>
                </div>
            </div>
        </div>

        
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Contas a Receber</div>
                <div class="card-body">
                    <h5 class="card-title">R$ 3.200,00</h5>
                    <p class="card-text">Previsão de entrada em caixa</p>
                </div>
            </div>
        </div>

    </div>
</div>

   
<?php include "../includes/footer.php"; ?>
