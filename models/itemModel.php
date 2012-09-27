<?php

@require 'core/config.php';

function insert() {
    require RUTA_DBH;
    $id = $_POST['id'];
    $desc = $_POST['descripcion'];
    $entrada = $_POST['entrada'];
    $status = 4;
    $sql = "INSERT INTO misat (`id`, `desc`,`fecha_entrada`,`status`) values ($id,'$desc','$entrada',$status)";
    $num = $dbh->exec($sql);
    disconnectDBH($dbh);

    if ($num == 1) {
        return true;
    }
    return false;
}

function change() {
    require RUTA_DBH;

    $status = $_POST['status'];
    $info = $_POST['info'];
    $salida = $_POST['salida'];
    $id = $_POST['id'];

    $set = "`desc`='" . $_POST['desc'] . "', ";
    $set = "`status`='" . $_POST['status'] . "', ";
    $set.="`info`='" . $_POST['info'] . "', ";
    $set.="`fecha_salida`='" . $_POST['salida'] . "' ";
    //$set.= "``";
    $cond = "`id` = $id";

    //"`desc`='" . $_POST['descripcion'] . "', `date`='" . date_format(new DateTime($_POST['fecha']), 'Y-m-d') . "'";
    $sql = "UPDATE misat SET " . $set . "WHERE " . $cond;
    //  print_r($sql);
    $num = $dbh->exec($sql);
    print_r($dbh->ErrorInfo());
    disconnectDBH($dbh);

    if ($num == 1) {
        return true;
    }
    return false;

}

function select($cond) {
    require RUTA_DBH;
    $orderby = 'misat.fecha_entrada desc';
    $sql = 'select misat.id, misat.desc, misat.status, 
        misat.cat, misat.fecha_entrada, misat.info from misat
        where ' . $cond . ' ORDER BY ' . $orderby;
    foreach ($dbh->query($sql) as $row) {
        $rows[] = $row;
    }
    disconnectDBH($dbh);
    if (isset($rows)) {
        return $rows;
    }
    return null;
}

function getPending() {
    $cond = 'misat.status=4';
    return select($cond);
}

function getWaiting() {
    $cond = 'misat.status=3';
    return select($cond);
}

function getWorking() {
    $cond = 'misat.status=2';
    return select($cond);
}

function getTested() {
    $cond = 'misat.status=1';
    return select($cond);
}

function getReleased() {
    $cond = 'misat.status=0';
    return select($cond);
}

function getAll() {
    $cond = '1';
    return select($cond);
}

function getId($id) {
    $cond = 'misat.id=' . $id;
    return select($cond);
}