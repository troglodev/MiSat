<?php

mostrarHead();
mostrarMenu();
mostrarTitulo($status, count($items));

$color = array("blue", "green", "orange", "yellow", "red", "black");
echo '<div id="caja"><ul>';
$c = 0;
if ($items != 0) {
    foreach ($items as $item) {
        echo'<li>';
        if ($c % 2 == 0) {
            echo '<a style="background:#36363B" class="';
        } else {
            echo '<a style="background:#48474C" class="';
        }
        echo $color[$item['status']];
        echo '" href="index.php?c=item&a=showId&id=' . $item['id'] . '">';
        echo $item['id'] . ' ';
        echo '[' . $item['cat'] . '] ';
        echo $item['desc'];
        echo '</a>';
        echo '</li>';
        $c = $c + 1;
    }
}
//echo '</a>';
echo '</ul></div>';
mostrarPie();
?>