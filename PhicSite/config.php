<?php
$host = 'localhost';#host
$database = 'phic';#database
$username = 'root';#username
$password = '';##password

try{
   // $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, $databasePassword);   
$conn = new PDO("mysql:host={$host};dbname={$database}",$username,$password);
$conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}


catch(PDOException $e)
 {
	echo $e->getMessage();

}
?>