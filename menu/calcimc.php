<p>Página 2</p>
<form method="post">
    <input type="number" name="kilos" placeholder="Kilos">
    <input type="number" name="altura" placeholder="Altura">
    <input type="submit" name="btn" value="Calcular">
</form>

<?php
    if(isset($_POST['btn'])){
        $kilos = $_POST['kilos'];
        $altura = $_POST['altura'];
        $resultado = ($kilos / ($altura * $altura));
        echo "<h3>$resultado</h3>";
    }
?>