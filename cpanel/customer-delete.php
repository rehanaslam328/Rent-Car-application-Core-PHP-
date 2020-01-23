<?php
include ("config.php");

$pid= $_REQUEST['customer_delete'];

$query= "delete from Customer where CNIC='$pid'";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>location='customer-report.php'</script>"

?>