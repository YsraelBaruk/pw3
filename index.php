<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="number"    name="tab">
        <input type="submit" value="Enviar">
    </form>

    <a href="?page=1">Negócios</a>
    <a href="?page=2">Comércio</a>
    <a href="?page=3">Bebércio</a>

    <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case '1';
                    require_once './page/page1.php';
                    break;
                case '2';
                    require_once './page/page2.php';
                    break;
                case '3';
                    require_once './page/page3.php';
                    break;  
            echo 'encontrei';
            }
        }
        else{
            
            echo 'Página não encontrada';
        }
        var_dump($_POST);

        // for($id = 0; $id <= $_POST['tab']; $id++){
        //     echo "<h1> $id * ".$_POST['tab']." = ".$_POST['tab'] * $id."</h1>";
        // }
    ?>
</body>
</html>