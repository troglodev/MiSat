<?php

function show_menu() {
    ?>
    <div id="menu2">
        <h3>
            <ul>
                <li>
                    <a href="index.php?c=item&a=show&s=4">
                    <img src="statico/img/cross.png" />Pendientes</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=show&s=3">
                    <img src="statico/img/clock.png" />Reparando</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=show&s=2">
                    <img src="statico/img/wrench_orange.png" />Esperando</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=show&s=1">
                    <img src="statico/img/accept.png" />Avisados</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=show&s=0">
                    <img src="statico/img/world_go.png" />Entregados</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=show&s=5">
                    <img src="statico/img/asterisk_orange.png" />Activos</a>
                </li>
            </ul>
        </h3>
    </div>
<?php }
?>