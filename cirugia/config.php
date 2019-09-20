<?php
define('DB_SERVER', 'localhost');
define('DB_SERVER_USERNAME', 'root');
define('DB_DATABASE', 'clinica');
define('DB_PASSWORD', '');
$con = mysqli_connect(DB_SERVER, DB_SERVER_USERNAME,DB_PASSWORD);
mysqli_select_db($con,DB_DATABASE);

?>