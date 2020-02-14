<?php
if (!empty($_POST ["nombre_del_servicio"] || $_POST ["numero_de_referencia"] || $_POST ["importe"])){
    echo$_POST ["nombre_del_servicio"];
    echo "<br>";
    echo $_POST ["numero_de_referencia"];
    echo $_POST ["importe"];
}else{
    echo "esta vacia";
}

    ?>
    