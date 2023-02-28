<h2>Calculadora de IMC</h2>
<form method="post">
    <input type="number" name="kilos" placeholder="Kilos">
    <input type="number" name="altura" placeholder="Altura">
    <input type="submit" name="btn" value="Calcular">
</form>

<?php
    if(isset($_POST['btn'])){
        $kilos = $_POST['kilos'];
        $altura = $_POST['altura'];
        $altura/=100;
        $resultado = ($kilos / ($altura * $altura));

        if($resultado < 18.5){
            echo "<h3>Abaixo do Peso <br> IMC: $resultado</h3>";
        }
        else if($resultado < 24.9){
            echo "<h3>Peso normal <br> IMC: $resultado</h3>";
        }
        else if($resultado < 29.9){
            echo "<h3>Excesso de peso <br> IMC: $resultado</h3>";
        }
        else if($resultado < 34.9){
            echo "<h3>Obesidade Classe I <br> IMC: $resultado</h3>";
        }
        else if($resultado < 39.9){
            echo "<h3>Obesidade Classe II <br> IMC: $resultado</h3>";
        }
        else{
            echo "<h3>Obesidade Classe III <br> IMC: $resultado</h3>";
        }
    }
?>