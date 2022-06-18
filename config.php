<?php
/*
This file contains database configuration assuming you are running mysqli using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// TRY CONNECTING TO THE DATABASE
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK THE CONNECTION
if($conn == false){
    dir('Error: Cannot connect');
}


?>