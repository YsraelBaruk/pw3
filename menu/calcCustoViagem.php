<h2>Calculadora de Custo de viagem</h2>
<form method="post">
    <input type="number" name="distancia" placeholder="Distancia Km">
    <input type="number" name="autonomia" placeholder="Autonomia do carro">
    <input type="number" name="preco" placeholder="Preço do Combustivel">
    <input type="submit" name="calc-btn" value="Calcule">
</form>
<?php
    if(isset($_POST['calc-btn'])){
        $autonomia = $_POST['autonomia'];
        $distancia = $_POST['distancia'];
        $preco = $_POST['preco'];
        $custo = ($distancia /$autonomia) * $preco;
        echo "<h3>O custo da viagem será R$ $custo</h3>";
    }
?>