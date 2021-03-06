<?php
function confirm_db_connection($connection) {
    if ($connection->connect_errno) {
        $msg = "database connection failed ";
        $msg .= $connection->connect_error;
        $msg .= " ( " . $connection->connect_errno . " ) ";
        exit($msg);
    }
}

function db_connect() {
    $connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connection($connection);
    return $connection;

}
