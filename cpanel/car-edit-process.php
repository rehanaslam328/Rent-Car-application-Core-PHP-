<?php
include ("config.php");

$id = $_POST['cid'];
$cr = $_POST['crate'];
$cm = $_POST['cmodel'];
$cy = $_POST['cyear'];
$cc = $_POST['ccompany'];
$cs = $_POST['cstatus'];

$query = "update Cars set CarId='$id',Rate='$cr',Model='$cm',BYear='$cy', Company='$cc',RStatus='$cs' where CarId= '$id'";
mysqli_query($con, $query);
mysqli_close($con);


/*echo "<script>location='product-form.html'</script>"*/
echo "<script>location='report-car.php'</script>"
?>

