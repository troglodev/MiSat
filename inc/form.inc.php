<?php

function show_form() {
    ?>
    <div id="formu">
        <form name="deseo" action="index.php?c=item&a=insertItem"
              method="POST" onsubmit="return validarNuevo(this);">
            <br/>
            <label for="id">Albarán:</label>
            <input type="text" name="id">
            <br/><br/>
            <label for="cat">Categoría:</label>
            <select name="cat">
                <option value="Sobremesa">Sobremesa</option>
                <option value="Portatil">Portatil</option>
                <option value="Móvil">Móvil</option>
                <option value="Consola">Consola</option>
            </select>
            <br/><br/>
            <label for="descripcion">Descripción:</label>
            <textarea name="descripcion" rows="4" cols="20"></textarea>
            <br/><br/>
            <label for="entrada">Fecha Entrada:</label>
            <input type="date" name="entrada" value="<?php echo date('Y-m-d') ?>" />
            <br/><br/>
            <label for="status">Estado:</label>
            <select name="status">
                <option value="4">Pendiente</option>
                <option value="0">Entregado</option>
                <option value="1">AvisadoRecogida</option>
                <option value="2">EsperandoConfirmacion</option>
                <option value="3">EnProceso</option>
            </select>
            <br/><br/>
            <input type="submit" value="Añadir"/>
            <div id="falloDeseo"> </div>
            <br/>
            <br/>
        </form>
    </div>
<?php } ?>