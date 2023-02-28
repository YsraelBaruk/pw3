<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="?page=tabuada">Tabuada</a>
    <a href="?page=calcimc">Calculadora IMC</a>
    <a href="?page=calcCustoViagem">Calculadora de Custo de Viagem</a>
    <a href="?page=sobre">Sobre</a>
    <h1>Bem vindo a essa pagina</h1>
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