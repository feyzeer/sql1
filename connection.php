<?php


$servername='localhost';
$username='root';
$password='';
$dbname = 'e_classe';

$connection = mysqli_connect($servername,$username,$password,$dbname);

if(!$connection){
   echo 'connection failed';

}



?>
