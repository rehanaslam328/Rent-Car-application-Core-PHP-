<?php
include_once("config.php");
$pid= $_REQUEST['employee_delete'];

$query= "delete from Employee where EId = '$pid'";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>location='employee-report.php'</script>"

?>