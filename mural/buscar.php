<form action="" method="post">
    <input type="number" name="buscar" id="buscar">
    <input type="submit" value="Buscar">
</form>

<?php

if (isset($_POST["buscar"])){
    $id = $_POST["buscar"];
    $sql = "SELECT id, nome, email, cidade, texto FROM tads.recados WHERE id={$id};";
    echo $sql;

        if($result = $con->query($sql)){
            if($result->num_rows > 0){
                while ($recado = $result->fetch_object('RecadoDAO')){
                    var_dump($recado);
                }
            }
        }
        var_dump($recado);
}