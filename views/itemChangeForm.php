<?php
mostrarHead();
foreach ($items as $item) {
    ?>
    <form name="deseo" action="index.php?controlador=deseo&accion=modificarDeseo&id=<?php echo $item['id'] ?>"
          method="POST" onsubmit="return validarDeseo(this);">
        Descripcion:
        <input type="text" name="descripcion" value="<?php echo $item['desc'] ?>"/><br/>
        Fecha:
        <input type="text" name="fecha" value="<?php echo date_format(new DateTime($item['date']), 'd-m-Y') ?>"/><br/>
        <input type="submit" value="Confirmar"/>
        <p id="mensaje"></p>
<?php } ?>
</form>
