<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="post">
        <input type="number"    name="tab">
        <input type="submit" value="Enviar">
    </form> -->

    <a href="/">Home</a>
    <a href="?page=tabuada">Tabuada</a>
    <a href="?page=calcimc">Calculadora IMC</a>
    <a href="?page=calcCustoViagem">Calculadora de Custo de Viagem</a>
    <a href="?page=sobre">Sobre</a>
    <!-- <a href="?page=404">404</a> -->
    <p>Pagina Home</p>
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
                default:
            }
        }
        else{
            require_once './menu/page404.php';
        }
        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }
    ?>
</body>
</html>