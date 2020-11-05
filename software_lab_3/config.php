<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'piyush');
define('DB_PASSWORD', '#Raunak@1998');
define('DB_NAME', 'soft_lab_ass1');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>