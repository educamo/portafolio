<?php 

    require_once("../clases/crud.php"); // contine la funcion de obtener datos y editar

    $obj = new crud();


    echo $obj->eliminar($_POST['idcotizacion']);

?>