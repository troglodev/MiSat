<?php

$dbh = new PDO(DSN, USERNAME, PASSWORD);

function disconnectDBH($d) {
    $d = null;
}

?>