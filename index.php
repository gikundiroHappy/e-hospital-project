<?php
require("db_connection.php");

$name=$_POST["name"];
$dob=$_POST["dob"];
$phone=$_POST["phone_number"];
$age=$_POST["age"];
$gender=$_POST[""];
$location=$_POST["location"];


$query="INSERT INTO contact(names,dob,phone_number,age,gender,location) VALUES('$name','$dob','$phone','$age','$gender','$location')";

$result=mysqli_query($connection,$query);

if(!$result){
    echo "Failed to execute query".mysqli_error($connection);
}

?>