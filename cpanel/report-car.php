<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua">

<table align="center" width="800" border="5">
    <button onClick="location='Car.php'">New Record</button><br><br>
    <tr>
        <th>Car id</th>
        <th>Rate</th>
        <th>Model</th>
        <th>Year</th>
        <th>Company</th>
        <th>Status</th>

    </tr>
    <?php
    include ("config.php");

    $query="select * from Cars";
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
        <td><a href="car-edit.php?edit_id=<?php echo $r[0]?>">Edit</a></td>
        <td><a href="car-delete.php?delete=<?php echo $r[0]?>">delete</a></td>
        <?php
           }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

