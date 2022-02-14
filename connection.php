<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername='localhost';
$username='root';
$password='';
$dbname = 'e_classe';

$connection = mysqli_connect($servername,$username,$password,$dbname);
if(!$connection){
   die('Could not Connect My Sql:' .mysql_error());
}


?>
