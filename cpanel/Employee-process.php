<?php
include ("config.php");

$id=$_POST['id'];
$fn=$_POST['name'];
$ln=$_POST['nameL'];
$es=$_POST['salary'];
$ep=$_POST['post'];
$ea=$_POST['address'];
$eph=$_POST['phone'];
$mid=$_POST['mid'];
$query = "insert into  Employee values('$id','$fn','$ln','$es','$ep','$ea','$eph','$mid')";
mysqli_query($con, $query);


echo "<script>location='main.php'</script>"



?>

