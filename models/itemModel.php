<?php

@require 'core/config.php';

function insert() {
    require RUTA_DBH;
    $sql = prepare_insert($_POST);
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
    $sql = prepare_update($_POST);
    $num = $dbh->exec($sql);
    //print_r($sql);
    disconnectDBH($dbh);
    if ($num == 1) {
        return true;
    }
    //echo 'No se ha actualizado nada.';
    return true;
}

function select($cond) {
    require RUTA_DBH;
    $sql = prepare_select($cond);
    foreach ($dbh->query($sql) as $row) {
        $rows[] = $row;
    }
    disconnectDBH($dbh);
    if (isset($rows)) {
        return $rows;
    }
    return null;
}

function get($op) {
    if ($op > 4) {
        //$cond = 1;
        $cond = 'misat.status>0';
        return select($cond);
    }
    $cond = 'misat.status=' . $op;
    return select($cond);
}

function getId($id) {
    $cond = 'misat.id=' . $id;
    return select($cond);
}

/*
 * CONSULTAS
 */

function prepare_update($post) {
    $set = "`desc`='" . $post['descripcion'] . "', ";
    $set.= "`id`='" . $post['id'] . "', ";
    $set.= "`cat`='" . $post['cat'] . "', ";
    $set.= "`status`=" . $post['status'] . ", ";
    $set.="`info`='" . $post['info'] . "', ";
    $set.="`fecha_salida`='" . $post['salida'] . "' ";
    $cond = '`id` = ' . $post['id'];
    $sql = "UPDATE misat SET " . $set . "WHERE " . $cond;
    return $sql;
}

function prepare_insert($post) {
    $id = $_POST['id'];
    $desc = $_POST['descripcion'];
    $entrada = $_POST['entrada'];
    $status = $_POST['status'];
    $cat = $_POST['cat'];
    $sql = "INSERT INTO misat (`id`, `desc`,`status`,`fecha_entrada`,`cat`)
            values ($id,'$desc',$status,'$entrada','$cat')";
    return $sql;
}

function prepare_select($cond) {
    $orderby = 'misat.fecha_entrada desc';
    $sql = 'SELECT misat.id, misat.desc, misat.status, 
        misat.cat, misat.fecha_entrada, misat.info FROM misat
        where ' . $cond . ' ORDER BY ' . $orderby;
    return $sql;
}