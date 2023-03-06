<div class="container m">
    <h2>Calculadora de Custo de viagem</h2>
    <form method="post">
        <input class="form-control form-control-sm" type="number" name="distancia" placeholder="Distancia Km">
        <input class="form-control form-control-sm" type="number" name="autonomia" placeholder="Autonomia do carro">
        <input class="form-control form-control-sm" type="number" name="preco" placeholder="Preço do Combustivel">
        <input class="btn" type="submit" name="calc-btn" value="Calcule">
    </form>
</div>
<?php
    if(isset($_POST['calc-btn'])){
        $autonomia = $_POST['autonomia'];
        $distancia = $_POST['distancia'];
        $preco = $_POST['preco'];
        $custo = ($distancia /$autonomia) * $preco;
        echo "<h3>O custo da viagem será R$ $custo</h3>";
    }
?>