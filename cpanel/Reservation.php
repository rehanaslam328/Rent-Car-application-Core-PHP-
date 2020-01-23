<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body  background="1.jpg">
<header   align="center">
    <h1>Rent a car</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Reservation information</h1></legend>
        <table border="1" align="center">
            <form action="reserve-process.php" method="post">
                <tr>
                    <td ><input type="number" name="rid" placeholder="Reservation Id " required></td>
                </tr>
                <tr>
                    <td><input type="text" name="rdistance" placeholder="distance"></td>
                </tr>
                <tr>
                    <td><input type="text" name="rtime" placeholder="Time"></td>
                </tr>
                <tr>
                    <td><input type="number" name="carid" placeholder="Car id" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="cnic" placeholder="CNIC" ></td>
                </tr>
                <tr>
                    <td><input type="number" name="aid" placeholder="Acoount id" ></td>
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

