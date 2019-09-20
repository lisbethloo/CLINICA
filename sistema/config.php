<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_DATABASE', 'clinica');

$con = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME);
mysqli_select_db($con,DB_DATABASE );

?>