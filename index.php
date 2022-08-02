<?php
require("db_connection.php");

$name=$_POST["name"];
$dob=$_POST["dob"];
$phone=$_POST["phone_number"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$location=$_POST["location"];
$time=$_POST["time"];


$query="INSERT INTO user(names,dob,phone_number,age,gender,location,time) VALUES('$name','$dob','$phone','$age','$gender','$location','$time')";

$result=mysqli_query($connection,$query);

if(!$result){
    echo "Failed to execute query".mysqli_error($connection);
}

?>