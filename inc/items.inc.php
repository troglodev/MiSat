<?php

function show_items($items) {
    $color = array('blue', 'green', 'orange', 'yellow', 'red', 'black');
    $c = 0;

    echo '<div id="caja"><ul>';
    if ($items != 0) {
        foreach ($items as $item) {
            echo'<li>';
            echo '<a style="background:';
            if ($c % 2 == 0) {
                echo '#36363B';
            } else {
                echo '#48474C';
            }
            echo '" class="' . $color[$item['status']];
            echo '" href="index.php?c=item&a=showId&id=' . $item['id'] . '">';
            echo $item['id'] . ' ';
            echo '-' . $item['cat'] . '- ';
            echo $item['desc'];
            echo '</a>';
            echo '</li>';
            $c = $c + 1;
        }
    }
    echo '</ul></div>';
}

?>