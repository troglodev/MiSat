<?php

//require INC_PATH . HTML_ACCESO;
//require INC_PATH . HTML_DERECHA;

function incRequires() {
    require INC_PATH . HTML_HEAD;
    require INC_PATH . HTML_MENU;
    require INC_PATH . HTML_TITULO;
    require INC_PATH . HTML_PIE;
    require MODELS_PATH . MODELS_ITEM;
}

function incSession() {
    @session_start();
}

function inc() {
    incSession();
    incRequires();
}

//*********************ADD
function showAddItem() {
    inc();
    require VIEW_PATH . 'itemAddForm.php';
}
/*
function showAdded() {
    inc();
    require VIEW_PATH . 'itemShowAdded.php';
}
*/
function insertItem() {
    inc();
    if (insert()) {
        header('Location: index.php?c=item&a=showPending');
    }
    echo 'error';
}

//*********************CHANGE

/**
function showChangeItem() {
    inc();
    require VIEW_PATH . 'itemChangeForm.php';
}

function showChanged() {
    inc();
    require VIEW_PATH . 'itemShowChanged.php';
}
*/
function changeItem() {
    inc();
    if (change()) {
        header('Location: index.php');
    }
}

//*********************SHOW
function showPending() {
    inc();
    $items = getPending();
    $color = 'red';
    $op = 4;
    require VIEW_PATH . 'itemShow.php';
}

function showWaiting() {
    inc();
    $items = getWaiting();
    $color = 'yellow';
    $op = 3;
    require VIEW_PATH . 'itemShow.php';
}

function showWorking() {
    inc();
    $items = getWorking();
    $color = 'orange';
    $op = 2;
    require VIEW_PATH . 'itemShow.php';
}

function showTested() {
    inc();
    $items = getTested();
    $color = 'green';
    $op = 1;
    require VIEW_PATH . 'itemShow.php';
}

function showReleased() {
    inc();
    $items = getReleased();
    $color = 'blue';
    $op = 0;
    require VIEW_PATH . 'itemShow.php';
}

function showAll() {
    inc();
    $items = getAll();
    $color = 'black';
    $op = 5;
    require VIEW_PATH . 'itemShow.php';
}

function showId() {
    inc();
    $items = getId($_GET['id']);
    require VIEW_PATH . 'itemShowId.php';
}