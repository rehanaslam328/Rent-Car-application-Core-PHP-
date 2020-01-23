<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">

<?php
include_once("config.php");

$pid= $_REQUEST['reserve_id'];
//reading data
$query= "select * from Reservation where rid= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);
?>

<header   align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Car information</h1></legend>
        <table border="1" align="center">
            <form action="reserve-edit-process.php" method="post">
                <tr>
                    <td ><input type="number" name="rid" placeholder="Reservation Id " value="<?php echo $r[0] ?>" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="rdistance" placeholder="distance"  value="<?php echo $r[1] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="rtime" placeholder="Time" value="<?php echo $r[2] ?>"></td>
                </tr>
                <tr>
                    <td><input type="number" name="carid" placeholder="Car id" value="<?php echo $r[3] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cnic" placeholder="CNIC" value="<?php echo $r[4] ?>"></td>
                </tr>
                <tr>
                    <td><input type="number" name="aid" placeholder="Acoount id" value="<?php echo $r[5] ?>" ></td>
                </tr>

                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="reservation" value="Reservation info save">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

