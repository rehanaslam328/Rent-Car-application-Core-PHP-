<?php
include ("config.php");

$id = $_POST['rid'];
$rd = $_POST['rdistance'];
$rt = $_POST['rtime'];
$cr = $_POST['carid'];
$cn = $_POST['cnic'];
$ai = $_POST['aid'];



$query = "insert into Reservation (rid,distance,rtime,CarId,CNIC,AId) values('$id','$rd','$rt','$cr','$cn','$ai')";
mysqli_query($con, $query);
mysqli_close($con);

echo "<script>location='main.php'</script>"

?>

