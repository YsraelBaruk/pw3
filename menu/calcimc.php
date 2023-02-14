<p>Página 2</p>
<form type="post">
    <input type="number" name="kilos" >
    <input type="number" name="altura" id="">
    <input type="button" name="btn">
</form>

<?php
    if(isset($_POST['btn'])){
        $kilos;
        $altura;
        $resultado = $altura * $kilos;
        echo "<p>$resultado</p>";
    }
?>