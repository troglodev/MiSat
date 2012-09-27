<?php

function show_title($op, $num) {
    $color = array('blue', 'green', 'yellow', 'orange', 'red', 'black',
        'black', 'black');
    $titulo = array('Entregados: ', 'Avisados: ', 'Esperando Confirmación: ',
        'En Proceso: ', 'Pendientes: ', 'Activos: ', 'Añadir: ',
        'Editar: ');

    echo '<div id="titulo">';
    echo '<a class="' . $color[$op] . '2"';
    if ($op < 7) {
        echo ' href="index.php?c=item&a=showAddItem"><img src="statico/img/add.png" />';
    } else {
        echo '>';
    }
    echo '<h1>' . $titulo[$op] . ' ' . $num . '</h1>';
    echo '</a></div>';
}

?>