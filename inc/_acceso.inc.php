<?php

function mostrarDivAcceso() {
    if (isset($_SESSION['user'])) {
        ?>
        <div id="acceso">
            <h3><a href="index.php"><img src="statico/img/heart.png"/>WishList</a></h3>
            <span id="hola">Hola <?php echo $_SESSION['user'] ?>!
                &nbsp;&nbsp;&nbsp;
                <a href="index.php?controller=usuario&accion=desconectar">
                    Salir <img src="statico/img/door_in.png" />
                </a>
            </span>
        </div>
    <?php } else { ?>
        <div id="acceso">
            <h3><a href="index.php"><img src="statico/img/heart.png"/>WishList</a></h3>
            <form name="logon" action="index.php?controller=usuario&accion=acceder"
                  method="POST" onsubmit="return validarAcceso(this);">
                Usuario:
                <input type="text" name="user" class="acceso"/>
                Contraseña:
                <input type="password" name="userpassword" class="acceso"/>
                <input type="image" src="statico/img/key_go.png" class="medio"/>
                <div id="falloAcceso"></div>
            </form>
        </div>
        <?php
    }
}
?>