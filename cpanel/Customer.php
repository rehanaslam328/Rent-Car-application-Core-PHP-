<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body   background="1.jpg">
<header   align="center">
    <h1>Customer</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Customer information</h1></legend>
        <table border="1" align="center">
            <form action="customer-process.php" method="post">
                <tr>
                    <td ><input type="number" name="cuid" placeholder="CNIC"  required></td>
                </tr>
                <tr>
                    <td><input type="text" name="cfname" placeholder="First name"></td>
                </tr>
                <tr>
                    <td><input type="text" name="clname" placeholder="last name"></td>
                </tr>
                <tr>
                    <td><input type="text" name="caddress" placeholder="Address" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cphone" placeholder="Phone no" ></td>
                </tr>

                <tr>
                    <td><input type="text" name="ceid" placeholder="Employee Id" ></td>
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

