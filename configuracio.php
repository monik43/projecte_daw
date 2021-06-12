<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'monika');
define('DB_PASSWORD', '0833');
define('DB_NAME', 'projectewebapp');

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
