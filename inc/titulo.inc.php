<?php

function show_title($op, $num) {
    $color = array('blue', 'green', 'orange', 'yellow', 'red', 'black');
    $titulo = array('Entregados: ', 'Avisados: ', 'En Proceso: ',
        'Esperando Confirmación: ', 'Pendientes: ', 'Todos: ');

    echo '<div id="titulo">';
    echo '<a class="' . $color[$op] . '2" href="index.php?c=item&a=showAddItem">';
    echo '<img src="statico/img/add.png" /><h1>' . $titulo[$op] . ' ' . $num . '</h1>';
    echo '</a></div>';
}

?>