<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua" >

<table align="center" width="800" border="5">
    <button onClick="location='Acoount.php'">New Record</button><br><br>
    <tr>
        <th>Account id</th>
        <th>Advance</th>
        <th>Remaining</th>
        <th>Account Status</th>


    </tr>
    <?php
    include ("config.php");

    $query="select * from Accounts";
    $rs=mysqli_query($con,$query);

    while($r=mysqli_fetch_array($rs)){


    ?>
    <tr>
        <td><?php echo $r[0] ?></td>
        <td><?php echo $r[1] ?></td>
        <td><?php echo $r[2] ?></td>
        <td><?php echo $r[3] ?></td>
        <td><a href="account-edit.php?account_id=<?php echo $r[0]?>">Edit</a></td>
        <td><a href="account-delete.php?account_delete=<?php echo $r[0]?>">delete</a></td>
        <?php
        }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

