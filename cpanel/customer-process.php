<?php
 include ("config.php");
$cid = $_POST['cuid'];

  $cfn = $_POST['cfname'];
   $cln = $_POST['clname'];
  $csa = $_POST['caddress'];
  $cpho = $_POST['cphone'];
      $eid=$_POST['ceid'];
$query1 = "insert into  Customer values('$cid','$cfn','$cln','$csa','$cpho','$eid')";
mysqli_query($con, $query1);
echo "<script>location='main.php'</script>"
?>