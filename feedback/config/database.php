<?php
//two main api to connect with vanila php 
// 1 mySQLi, which is the simplest and its only limited to mysql alone
// 2 PDO {PHP DATA OBJECTS} which is used to connect other database like postgress and the rest
?>

<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'nonso');
define('DB_PASS', '12345');
define('DB_NAME', 'php_dev');

//create connection
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//CHECK connection
if($conn -> connect_error) {
    die('Connection failed ' . $conn -> connect_error);
}
// echo "connected";
?>