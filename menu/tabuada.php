<div class="container m">
    <div class="col-sm">
        <h3>Tabuada</h3>
        <form method="post">
            <input type="number" class="form-control form-control-sm" name="input_tab" placeholder="Informe a tabuada desejada">
            <!-- <input type="submit" value="Gerar"> -->
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</div>

<?php
    if(isset($_POST['input_tab'])){
        $tab = $_POST['input_tab'];
            for($id = 0; $id < 11; $id++){
                $resultado = $id * $tab;
                echo'<div class="container"><p class="h5">'.$id.' * '.$tab.' = '.$resultado.'</p></div>';
            }
    }

?>