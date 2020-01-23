<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">

<?php
include_once("config.php");

$pid= $_REQUEST['edit_id'];
//reading data
$query= "select * from Cars where CarId= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);
?>

<header  align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Car information</h1></legend>
        <table border="1" align="center">
            <form action="car-edit-process.php" method="post">
                <tr>
                    <td ><input type="number" name="cid" placeholder="Car Id " value="<?php echo $r[0] ?>" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="crate" placeholder="Car Rate" value="<?php echo $r[1] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cmodel" placeholder="Car model" value="<?php echo $r[2] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cyear" placeholder="By year" value="<?php echo $r[3] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="ccompany" placeholder="Company" value="<?php echo $r[4] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cstatus" placeholder="Status"  value="<?php echo $r[5] ?>"></td>
                </tr>

                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="car" value="Edit">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

