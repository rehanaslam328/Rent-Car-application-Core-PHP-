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

$query = "update Employee set EId='$id',FName='$fn',SName='$ln',Salary='$es', Post='$ep',Address='$es',PhoneNo='$eph',ManagerId='$mid' where EId= '$id'";


mysqli_query($con, $query);

mysqli_close($con);


/*echo "<script>location='product-form.html'</script>"*/
echo "<script>location='employee-report.php'</script>"
?>

