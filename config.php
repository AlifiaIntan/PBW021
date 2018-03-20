<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'id4890331_crud_db';
$databaseUsername = 'id4890331_alifia';
$databasePassword = '12345';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);  
 
?>