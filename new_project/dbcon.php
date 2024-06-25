<?php 
$hostname="localhost";
$username="root";
$password="";
$databasename="student";



$data=new mysqli("$hostname","$username","$password","$databasename");



if($data->connect_error){
    die ("connection error".$data->connect_error);
}

// echo "Connect success";


?>