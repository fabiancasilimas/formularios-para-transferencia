<?php

function Accion($fila, $puesto, $accion, $ListEscenario) {
    // Es evaluada la opción del usuario dependiendo de lo contenido en el Array.
    // Si el puesto seleccionado por el usuario esta libre se modifica 
    // el Array con la acción elegida.
    if ($ListEscenario[$fila - 1][$puesto - 1] == "L") {
        $ListEscenario[$fila - 1][$puesto - 1] = $accion;
    }
    //Si el puesto seleccionado por el usuario  ya esta vendido se muestra una
    // alerta con la notifiación de lo sucedido.
    else if ($ListEscenario[$fila - 1][$puesto - 1] == "V") {
        echo "<script>alert('El puesto ya esta vendido.";
        if ($accion == "L") {
            echo " No se puede liberar";
        } else if ($accion == "R") {
            echo " No se puede reservar";
        } else if ($accion == "V") {
            echo " No se puede volver a vender";
        }
        echo "')";
        echo "</script>'";
    }
    // Si el puesto elegido por el usuario esta reservado y la accion es 
    // reservar se muestra una alerta indicando que ya esta reservado.
    else if ($ListEscenario[$fila - 1][$puesto - 1] == "R" && $accion == "R") {
        echo "<script>
            alert('El puesto ya esta Reservado.');
            </script>'";
    }
    // Si el puesto esta reservado y la accion es diferente a reservar se 
    // modifica el array con la accion elegida por el usuario.
    else if ($ListEscenario[$fila - 1][$puesto - 1] == "R" && $accion != "R") {
        $ListEscenario[$fila - 1][$puesto - 1] = $accion;
    }
    // Retorna el Array modificado.
    return $ListEscenario;
}
?>