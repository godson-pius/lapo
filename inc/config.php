<?php

define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', '');
define('DBNAME', 'lapo');

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

// if ($link) {
//   echo "Connected";
// } else {
//   echo "Not connected";
// }