<?php

$dbh = new PDO(DSN, USERNAME, PASSWORD);
print_r($dbh->errorCode());

function disconnectDBH($d) {
    $d = null;
}

?>