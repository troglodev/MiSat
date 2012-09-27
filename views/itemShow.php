<?php

mostrarHead();
mostrarMenu();
mostrarTitulo($status, count($items));

$color = array("blue", "green", "orange", "yellow", "red", "black");
echo '<div id="caja"><li>';
$c = 0;
if ($items != 0) {
    foreach ($items as $item) {

        echo'<ul>';
        if ($c % 2 == 0) {
            echo '<a style="background:#36363B" class="';
            echo $color[$item['status']];
            echo '" href="index.php?c=item&a=showId&id=' . $item['id'] . '">';
        } else {
            echo '<a style="background:#48474C" class="';
            echo $color[$item['status']];
            echo '" href="index.php?c=item&a=showId&id=' . $item['id'] . '">';
        }
        echo $item['id'] . ' ';
        echo '(' . $item['cat'] . ') ';
        echo $item['desc'];
        echo '</a>';
        echo '</ul>';
        $c = $c + 1;
    }
}
//echo '</a>';
echo '</li></div>';
mostrarPie();
?>