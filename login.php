<?php
require("db_connection.php");

$name=$_POST["name"];
$pass=$_POST["password"];



$query="INSERT INTO login(names,password) VALUES('$name','$pass')";

$result=mysqli_query($connection,$query);

if(!$result){
    echo "Failed to execute query".mysqli_error($connection);
}
echo "Done!"
?>