<?php
//- GET - $_GET["name"]
//echo  $_GET["name"];
//echo  $_GET["salary"];
if(isset($_POST["sub"])){
 echo "BIIKA is clicked";
$name =$_REQUEST["name"];

$vat = 0.18;
$salary = $_REQUEST["salary"];

$gross = $salary * $vat;
}

if(isset($_POST["ret"])){
        echo "BIKURA is clicked";}

//if($gross > 12){
echo "Hello! ".$_POST["name"]."with net salary " ;
//}else{
    //for($i=0; $i<10; $i++){
    echo "Hello with low salary.<br>";
//}
//}

?>
<hr>
<html>

<head>
    <title>Doctors</title>
    <link rel="stylesheet"  href="../css//doctors .css">
</head>
<body>
<form action="" method="post">
<label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="andika amazina"><br><br>
    <label for="salary">Salary:</label>
    <input type="number" name="salary" id="salary" placeholder="uzuza"><br><br>
    <input type="submit" value="BIIKA" name="sub">
    <input type="submit" value="BIKURA" name="ret">
</form>
    <table border="1" style="width: 100%; height: 50vh;">
        <tr>
            <th colspan="2">Doctor-name</th>
            <th>Department</th>
            <th>office</th>
        </tr>
        <tr>
            <td>Karara</td>
            <td>Ange</td>
            <td>Nurse</td>
            <td>001</td>
        </tr>
        <tr>
            <td>Manzi</td>
            <td>Ivan</td>
            <td>Dentist</td>
            <td>002</td>
        </tr>
        <tr>
            <td>Rurangwa</td>
            <td>Kelia</td>
            <td>Nurse</td>
            <td>003</td>
        </tr>
        <tr>
            <td>Tona</td>
            <td>Divine</td>
            <td>Nurse</td>
            <td>004</td>
        </tr>
        <tr>
            <td>Mugisha</td>
            <td>Henry</td>
            <td>Dentist</td>
            <td>005</td>
        </tr>
    </table><br> 
    <div class="pictures">
      <div class="pictures-container pictures-container-1">
     <div class="card">
        <img src="./pictures/img1.JPG" alt="">
        <h3 >Dr. clever</h3>
     </div>
     <div class="card">
        <img src="../pictures/img4.JPG" alt="">
        <h3 >Dr.Queen</h3>
     </div>
     <div class="card">
        <img src="../pictures/img3.JPG" alt="">
        <h3 >Prof. Sharif</h3>
     </div>
     <div class="card">
            <img src="../pictures/img6.JPG" alt="">
            <h3 >Prof. Sharif</h3>
     </div>
 </div>
    
</body>
</html>