<?php

function mostrarMenu() {
    ?>
    <div id="menu2">
        <h3>
            <ul>
                <li>
                    <a href="index.php?c=item&a=showPending">
                        <img src="statico/img/cross.png" />Pendientes  </a>
                </li>
                <li>
                    <a href="index.php?c=item&a=showWaiting">
                        <img src="statico/img/clock.png" />Esperando</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=showWorking">
                        <img src="statico/img/wrench_orange.png" />Reparando</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=showTested">
                        <img src="statico/img/accept.png" />Avisados</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=showReleased">
                        <img src="statico/img/world_go.png" />Entregados</a>
                </li>
                <li>
                    <a href="index.php?c=item&a=showAll">
                        <img src="statico/img/asterisk_orange.png" />Todos</a>
                </li>
            </ul>
        </h3>
    </div>
<?php }
?>