<?php

function mostrarTitulo($op, $num) {
    $color = array("blue", "green", "orange", "yellow", "red", "black");

    switch ($op) {
        case 4:
            $cad = 'Pendientes:';
            break;
        case 2:
            $cad = 'En Proceso:';
            break;
        case 3:
            $cad = 'Esperando Confirmación:';
            break;
        case 1:
            $cad = 'Avisados:';
            break;
        case 0:
            $cad = 'Entregados:';
            break;
        default:
            $cad = 'Todos:';
    }

    echo '<div id="titulo">';
    echo '<a class="' . $color[$op] . '2" href="index.php?c=item&a=showAddItem">';
    echo '<img src="statico/img/add.png" /><h1>' . $cad . ' ' . $num . '</h1>';
    echo '</a></div>';
}

?>