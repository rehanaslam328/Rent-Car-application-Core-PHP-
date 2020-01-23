<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">

<?php
include_once("config.php");

$pid= $_REQUEST['customer_id'];
//reading data
$query= "select * from Customer where CNIC= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);
?>

<header   align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Customer information</h1></legend>
        <table border="1" align="center">
            <form action="customer-edit-process.php" method="post">
                <tr>
                    <td ><input type="text" name="cuid" placeholder="CNIC" value="<?php echo $r[0] ?>" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="cfname" placeholder="First name" value="<?php echo $r[1] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="clname" placeholder="last name" value="<?php echo $r[2] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="caddress" placeholder="Address"   value="<?php echo $r[3] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cphone" placeholder="Phone no"    value="<?php echo $r[4] ?>" ></td>
                </tr>

                <tr>
                    <td><input type="text" name="ceid" placeholder="Employee Id"    value="<?php echo $r[5] ?>" ></td>
                </tr>



                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="customer" value="Customer info save">
                    </td>
                </tr>

            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

