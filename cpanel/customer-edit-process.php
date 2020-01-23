<?php
include ("config.php");
$cid = $_POST['cuid'];

$cfn = $_POST['cfname'];
$cln = $_POST['clname'];
$ca = $_POST['caddress'];
$cpho = $_POST['cphone'];

$query = "update Customer set CNIC='$cid',FName='$cfn',SName='$cln',Address='$ca', PhoneNo='$cpho' where CNIC= '$cid'";
mysqli_query($con, $query);
echo "<script>location='customer-report.php'</script>"
?>