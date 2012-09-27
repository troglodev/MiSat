<?php

@require 'core/config.php';

function insert() {
    require RUTA_DBH;
    $id = $_POST['id'];
    $desc = $_POST['descripcion'];
    $entrada = $_POST['entrada'];
    $status = $_POST['status'];
    $cat = $_POST['cat'];
    $sql = "INSERT INTO misat (`id`, `desc`,`status`,`fecha_entrada`,`cat`)
            values ($id,'$desc',$status,'$entrada','$cat')";
    $num = $dbh->exec($sql);
    print_r($dbh->ErrorInfo());
    disconnectDBH($dbh);

    if ($num == 1) {
        return true;
    }
    return false;
}

function change() {
    require RUTA_DBH;

    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $info = $_POST['info'];
    $salida = $_POST['salida'];
    $id = $_POST['id'];

    $set = "`desc`='" . $desc . "', ";
    $set.= "`status`='" . $status . "', ";
    $set.="`info`='" . $info . "', ";
    $set.="`fecha_salida`='" . $salida . "' ";
    $cond = "`id` = $id";

    $sql = "UPDATE misat SET " . $set . "WHERE " . $cond;
    $num = $dbh->exec($sql);
    //print_r($sql);
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