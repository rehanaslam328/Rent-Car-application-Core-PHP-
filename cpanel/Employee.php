<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Rent a car</title>

</head>

<body background="1.jpg">
<header   align="center">
    <h1>Employee</h1>
</header>
<hr>
<section >
    <fieldset>
        <legend align="center"><h1>Employee information</h1></legend>
        <table border="1" align="center">
            <form action="Employee-process.php" method="post">
                <tr>
                    <td ><input type="number" name="id" placeholder="Employee Id " required></td>
                </tr>
                <tr>
                    <td><input type="text" name="name" placeholder="First name"></td>
                </tr>
                <tr>
                    <td><input type="text" name="nameL" placeholder="last name"></td>
                </tr>
                <tr>
                    <td><input type="text" name="salary" placeholder="Salary" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="post" placeholder="Post" ></td>
                </tr>
                <tr>
                    <td><input type="text" name="address" placeholder="Address" ></td>
                </tr>

                <tr>
                    <td><input type="text" name="phone" placeholder="Phone no" ></td>
                </tr>
                <tr>
                    <td ><input type="number" name="mid" placeholder="Manager Id " required></td>
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

