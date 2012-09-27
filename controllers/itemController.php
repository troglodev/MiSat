<?php

require INC_PATH . HTML_HEAD;
require INC_PATH . HTML_MENU;
require INC_PATH . HTML_TITULO;
require INC_PATH . HTML_PIE;
require INC_PATH . HTML_ITEMS;
require INC_PATH . HTML_ITEM;
require MODELS_PATH . MODELS_ITEM;
@session_start();

//*********************ADD
function showAddItem() {
    require VIEW_PATH . 'itemAddForm.php';
}

function insertItem() {
    if (insert())
        header('Location: index.php?c=item&a=show&s=4');
    //echo 'error';
}

//*********************CHANGE
function changeItem() {
    if (change())
        header('Location: index.php');
    //echo 'error';
}

//*********************SHOW
function show() {
    if (isset($_GET['s'])) {
        $status = $_GET['s'];
    } else {
        $status = 4;
    }
    $items = get($status);
    require VIEW_PATH . 'itemShow.php';
}

function showId() {
    $items = getId($_GET['id']);
    require VIEW_PATH . 'itemShowId.php';
}