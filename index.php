<?php
require("db_connection.php");

$name=$_POST["name"];
$dob=$_POST["dob"];
$phone=$_POST["Phone_number"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$location=$_POST["location"];


$query="INSERT INTO user(names,dob,phone_number,age,gender,location) VALUES('$name','$dob','$phone','$age','$gender','$location')";

$result=mysqli_query($connection,$query);

if(!$result){
    echo "Failed to execute query".mysqli_error($connection);
}
echo "Done successfully"
?>