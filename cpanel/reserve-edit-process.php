<?php
include ("config.php");

$id = $_POST['rid'];
$rd = $_POST['rdistance'];
$rt = $_POST['rtime'];


$query = "update Reservation set rid='$id',distance='$rd',rtime='$rt' where rid= '$id'";
mysqli_query($con, $query);
mysqli_close($con);


/*echo "<script>location='product-form.html'</script>"*/
echo "<script>location='reserve-report.php'</script>"
?>

