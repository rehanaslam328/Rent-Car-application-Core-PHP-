<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">

<?php
include_once("config.php");

$pid= $_REQUEST['employee_id'];
//reading data
$query= "select * from Employee where EId= '$pid'";
$rs= mysqli_query($con,$query);
$r= mysqli_fetch_array($rs);
?>

<header   align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Employee information</h1></legend>
        <table border="1" align="center">
            <form action="employee-edit-process.php" method="post">
                <tr>
                    <td ><input type="number" name="id" placeholder="Employee Id " value="<?php echo $r[0] ?>" required></td>
                </tr>
                <tr>
                    <td><input type="text" name="name" placeholder="First name" value="<?php echo $r[1] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="nameL" placeholder="last name" value="<?php echo $r[2] ?>"></td>
                </tr>
                <tr>
                    <td><input type="text" name="salary" placeholder="Salary" value="<?php echo $r[3] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="post" placeholder="Post" value="<?php echo $r[4] ?>" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="address" placeholder="Address" value="<?php echo $r[5] ?>" ></td>
                </tr>

                <tr>
                    <td><input type="text" name="phone" placeholder="Phone no" value="<?php echo $r[6] ?>" ></td>
                </tr>
                <tr>
                    <td ><input type="number" name="mid" placeholder="Manager Id " value="<?php echo $r[7] ?>" required></td>
                </tr>

                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="employee" value="Employee info save">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

