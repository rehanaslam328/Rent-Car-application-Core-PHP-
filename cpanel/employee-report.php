<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua">

<table align="center" width="800" border="5">
    <button onClick="location='Employee.php'">New Record</button><br><br>
    <tr>
        <th>Employee id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Salary</th>
        <th>Post</th>
        <th>Address</th>
        <th>Phone no</th>
        <th>Manager id</th>

    </tr>
    <?php
    include ("config.php");

    $query="select * from Employee";
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
        <td><?php echo $r[6] ?></td>
        <td><?php echo $r[7] ?></td>
        <td><a href="employee-edit.php?employee_id=<?php echo $r[0]?>">Edit</a></td>
        <td><a href="employee-delete.php?employee_delete=<?php echo $r[0]?>">delete</a></td>
        <?php
        }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

