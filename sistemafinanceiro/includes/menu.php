<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
<div class="container">
#Sistema Financeiro</a>

<ul class="navbar-nav ms-auto">
<li class="nav-item">
dashboard.phpDashboard</a>
</li>

<?php if ($perfil == "cliente") { ?>
<li class="nav-item">
contas/l
istar.phpMinhas Contas</a>
</li>

<?php } ?>
<?php if ($perfil == "empresa") { ?>
<li class="nav-item">
contas/listar.phpContas da Empresa</a>
</li>

<li class="nav-item">
contas/cadastrar.phpCadastrar Conta</a>
</li>
<?php } ?>


<?php if($perfil=="Adimnistrador")

<li class="nav-item">
contas/listar.phpMinhas Contas</a>
</li>

<li class=nav-item">
../logut.phpSair</a>
</li>
</ul>
</div>
</nav>


?>