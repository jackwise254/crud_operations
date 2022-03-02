<?php
// connection to database
$host = "localhost";
$db_name = "crud_php";
$username = "jackso";
$password = "aD1%Qs@231";
 
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>