<?php
include ("config.php");

$id = $_POST['aid'];
$aa = $_POST['aadvance'];
$ar = $_POST['aremaining'];
$as = $_POST['astatus'];


$query = "insert into Accounts (AId,Advance,Remaining,AccountStatus) values('$id','$aa','$ar','$as')";
mysqli_query($con, $query);
mysqli_close($con);

echo "<script>location='main.php'</script>"
?>

