<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">
<header   align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Car information</h1></legend>
        <table border="1" align="center">
            <form action="Car-process.php" method="post">
                <tr>
                    <td ><input type="number" name="cid" placeholder="Car Id " required></td>
                </tr>
                <tr>
                    <td><input type="text" name="crate" placeholder="Car Rate"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cmodel" placeholder="Car model"></td>
                </tr>
                <tr>
                    <td><input type="text" name="cyear" placeholder="By year" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="ccompany" placeholder="Company" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cstatus" placeholder="Status" ></td>
                </tr>

                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="car" value="Car info save">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

