<?php
require("db_connection.php");

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$subject=$_POST["subject"];
$message=$_POST["message"];
$date=date("l jS \of F Y h:i:s A");

$query="INSERT INTO contact(names,email,phone,subject,message,date) VALUES('$name','$email','$phone','$subject','$message','$date')";

$result=mysqli_query($connection,$query);

if(!$result){
    echo "Failed to execute query".mysqli_error($connection);
}

?>