<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">
<header   align="center">
    <h1>Accounts</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Accounts information</h1></legend>
        <table border="1" align="center">
            <form action="acocount-process.php" method="post">
                <tr>
                    <td ><input type="number" name="aid" placeholder="Account Id " required></td>
                </tr>
                <tr>
                    <td><input type="text" name="aadvance" placeholder="Advance"></td>
                </tr>
                <tr>
                    <td><input type="text" name="aremaining" placeholder="Remaining"></td>
                </tr>
                <tr>
                    <td><input type="text" name="astatus" placeholder="Account Status" ></td>
                </tr>

                <tr>
                    <td colspan="4" align="center">
                        <input type="submit" name="account" value="Acoount info save">
                    </td>
                </tr>
            </form>
        </table>
    </fieldset>
</section>



</body>
</html>

