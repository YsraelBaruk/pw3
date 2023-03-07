<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navegando entre Páginas</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <!-- <a href="/">Home</a>
    <a class="nav-link" href="?page=tabuada">Tabuada</a>
    <a class="nav-link" href="?page=calcimc">Calculadora IMC</a>
    <a class="nav-link" href="?page=calcCustoViagem">Calculadora de Custo de Viagem</a>
    <a class="nav-link" href="?page=sobre">Sobre</a> -->
    <h2>Bem vindo</h2>

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
                default:
                    require_once './menu/page404.php';
            }
        }        
    ?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
