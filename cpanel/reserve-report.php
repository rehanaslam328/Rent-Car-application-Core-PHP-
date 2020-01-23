<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua">

<table align="center" width="800" border="5">
    <button onClick="location='Reservation.php'">New Record</button><br><br>
    <tr>
        <th>Rid</th>
        <th>Distance</th>
        <th>Time</th>
        <th>Car id</th>
        <th>CNIC</th>
        <th>Account id</th>


    </tr>
    <?php
    include ("config.php");

    $query="select * from Reservation";
    $rs=mysqli_query($con,$query);

    while($r=mysqli_fetch_array($rs)){


    ?>
    <tr>
        <td><?php echo $r[0] ?></td>
        <td><?php echo $r[1] ?></td>
        <td><?php echo $r[2] ?></td>
        <td><?php echo $r[3] ?></td>
        <td><?php echo $r[4] ?></td>
        <td><?php echo $r[5] ?></td>
        <td><a href="reserve-edit.php?reserve_id=<?php echo $r[0]?>">Edit</a></td>
        <td><a href="reserve-delete.php?reserve_delete=<?php echo $r[0]?>">delete</a></td>
        <?php
        }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

