<?php
include ("config.php");

$pid= $_REQUEST['reserve_delete'];

$query= "delete from Reservation where rid = '$pid'";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>location='reserve-report.php'</script>"

?>