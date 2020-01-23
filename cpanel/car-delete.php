<?php
include_once("config.php");
$pid= $_REQUEST['delete'];

$query= "delete from Cars where CarId = '$pid'";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>location='report-car.php'</script>"

?>