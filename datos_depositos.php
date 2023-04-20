<?php

//session_start();
include("conexion.php");



    $sql = "SELECT * FROM cards_info";
    $resultado =  $mysqli->query($sql);
    
    if ($resultado){
        while($row = $resultado->fetch_array()){
            $id_card = $row['id_card'];
            $usuario = $row['usuario'];
            $monto = $row['monto'];
            $recompensa_obtenida = $row['recompensa_obtenida'];
            $periodo_pago =$row['periodo_pago'];
            $contratos =$row['contratos'];
        }
    }


?>