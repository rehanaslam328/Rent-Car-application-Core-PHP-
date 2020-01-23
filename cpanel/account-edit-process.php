<?php
include ("config.php");

$id = $_POST['aid'];
$aa = $_POST['aadvance'];
$ar = $_POST['aremaining'];
$as = $_POST['astatus'];

$query = "update Accounts set AId='$id',Advance='$aa',Remaining='$ar',AccountStatus='$as' where AId= '$id'";
mysqli_query($con, $query);
mysqli_close($con);


/*echo "<script>location='product-form.html'</script>"*/
echo "<script>location='account-report.php'</script>"
?>

