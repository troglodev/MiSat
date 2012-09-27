<?php

require INC_PATH . HTML_HEAD;
require INC_PATH . HTML_MENU;
require INC_PATH . HTML_TITULO;
require INC_PATH . HTML_PIE;
require MODELS_PATH . MODELS_ITEM;
@session_start();

//require INC_PATH . HTML_ACCESO;
//require INC_PATH . HTML_DERECHA;
//*********************ADD
function showAddItem() {
    require VIEW_PATH . 'itemAddForm.php';
}

function insertItem() {
    if (insert()) {
        header('Location: index.php?c=item&a=showPending');
    }
    echo 'error';
}

//*********************CHANGE
function changeItem() {
    if (change()) {
        header('Location: index.php');
    }
}

//*********************SHOW
function showPending() {
    $items = getPending();
    $color = 'red';
    $op = 4;
    require VIEW_PATH . 'itemShow.php';
}

function showWaiting() {
    $items = getWaiting();
    $color = 'yellow';
    $op = 3;
    require VIEW_PATH . 'itemShow.php';
}

function showWorking() {
    $items = getWorking();
    $color = 'orange';
    $op = 2;
    require VIEW_PATH . 'itemShow.php';
}

function showTested() {
    $items = getTested();
    $color = 'green';
    $op = 1;
    require VIEW_PATH . 'itemShow.php';
}

function showReleased() {
    $items = getReleased();
    $color = 'blue';
    $op = 0;
    require VIEW_PATH . 'itemShow.php';
}

function showAll() {
    $items = getAll();
    $color = 'black';
    $op = 5;
    require VIEW_PATH . 'itemShow.php';
}

function showId() {
    $items = getId($_GET['id']);
    require VIEW_PATH . 'itemShowId.php';
}
