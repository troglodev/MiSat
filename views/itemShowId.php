<?php
show_head();
show_menu();
show_title(7, $items[0]['id']);
echo '<br/>';
echo '';

if ($items != 0) {
    foreach ($items as $item) {
        ?>
        <div id="formu">
            <form name="deseo" action="index.php?c=item&a=changeItem"
                  method="POST" onsubmit="return validarDeseo(this);">
                <br/>
                <label for="id">Albarán:</label>
                <input type="text" name="id" value="<?php echo $item['id']; ?>">
                <br/><br/>
                <label for="cat">Categoría:</label>
                <input type="text" name="cat" value="<?php echo $item['cat']; ?>">
                <br/><br/> 
                <label for="entrada">Fecha Entrada:</label>
                <input type="text" name="entrada" value="<?php echo $item['fecha_entrada']; ?>">
                <br/><br/>
                <label for="desc">Descripción:</label>
                <textarea name="desc" rows="4" cols="20"><?php echo $item['desc']; ?></textarea>
                <br/><br/>
                <label for="status">Estado:</label>
                <select name="status">
                    <option value="4">Pendiente</option>
                    <option value="0">Entregado</option>
                    <option value="1">AvisadoRecogida</option>
                    <option value="2">EsperandoConfirmacionPresupuesto</option>
                    <option value="3">EnProceso</option>
                </select>
                <br/><br/>
                <label for="salida">Fecha Salida:</label>
                <input type="text" name="salida" value="<?php echo date('Y-m-d') ?>" />
                <br/><br/>
                <label for="info">Información:</label>
                <textarea name="info" rows="4" cols="20"><?php $item['info'] ?></textarea>
                <br/><br/>
                <input type="submit" value="Guardar"/>
            </form>
        </div>
        <?php
        echo '<br/>';
        echo '<br/>';
        echo '';
    }
}
show_footer();
?>

