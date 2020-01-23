<?php
include ("config.php");

$pid= $_REQUEST['account_delete'];

$query= "delete from Accounts where AId = '$pid'";
mysqli_query($con,$query);
mysqli_close($con);
echo "<script>location='account-report.php'</script>"

?>