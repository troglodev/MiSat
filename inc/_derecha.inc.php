<?php

function mostrarDivDerecha() {
    ?>
    <div id="derecha">
        <ul>
            <li><a href="index.php?controller=deseo&accion=mostrarDeseo">
                    <img src="statico/img/heart.png"/>&nbsp;Mis deseos<a/></li>
            <li><a href="index.php?controller=deseo&accion=mostrarCumplidos">
                    <img src="statico/img/tick.png"/>&nbsp;Mis deseos cumplidos<a/></li>
            <li><a href="index.php?controller=deseo&accion=nuevoDeseo">
                    <img src="statico/img/add.png"/>&nbsp;Añadir deseo<a/></li>
            <li><a href="">
                    <img src="statico/img/note_edit.png"/>&nbsp;Editar deseos<a/></li>
        </ul>
    </div>
<?
}
