<?php 

$server="localhost";
$user="root";
$pass="";
$db="e_hospital_project";

$connection=mysqli_connect($server,$user,$pass,$db);

if(!$connection){
    echo "Database connection failed".mysqli_error($connection);
}
// echo "connected succesfully!";
?>