<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Navegando entre Páginas</title>
</head>
<body>
    <!-- <a href="/">Home</a>
    <a class="nav-link" href="?page=tabuada">Tabuada</a>
    <a class="nav-link" href="?page=calcimc">Calculadora IMC</a>
    <a class="nav-link" href="?page=calcCustoViagem">Calculadora de Custo de Viagem</a>
    <a class="nav-link" href="?page=sobre">Sobre</a> -->
    <h1>Bem vindo a essa pagina</h1>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(Página atual)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=tabuada">Tabuada</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=calcimc">IMC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=calcCustoViagem">Custo de Viagem</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?page=sobre">Sobre</a>
        </li>
        </ul>
    </div>
</nav>

    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 'tabuada':
                    require_once './menu/tabuada.php';
                    break;
                case 'calcimc':
                    require_once './menu/calcimc.php';
                    break;
                case 'calcCustoViagem':
                    require_once './menu/calcCustoViagem.php';
                    break;
                case 'sobre':
                    require_once './menu/sobre.php';
                    break;
                case $page:
                    require_once './menu/page404.php';
                    break;
                default:
            }
        }        
    ?>
</body>
</html>