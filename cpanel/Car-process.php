<?php
include ("config.php");

    $id = $_POST['cid'];
    $cr = $_POST['crate'];
    $cm = $_POST['cmodel'];
    $cy = $_POST['cyear'];
    $cc = $_POST['ccompany'];
    $cs = $_POST['cstatus'];

    $query = "insert into Cars (CarId,Rate,Model,BYear,Company,RStatus) values('$id','$cr','$cm','$cy','$cc','$cs')";
    mysqli_query($con, $query);
    mysqli_close($con);


echo "<script>location='main.php'</script>"
?>

