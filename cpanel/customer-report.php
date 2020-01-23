<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua" >

<table align="center" width="800" border="5">
    <button onClick="location='Customer.php'">New Record</button><br><br>
    <tr>
        <th>CNIC</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th> Address</th>
        <th>Phone No</th>
        <th> Employee Id</th>


    </tr>
    <?php
    include ("config.php");

    $query="select * from Customer";
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
        <td><a href="customer-edit.php?customer_id=<?php echo $r[0]?>">Edit</a></td>
        <td><a href="customer-delete.php?customer_delete=<?php echo $r[0]?>">delete</a></td>
        <?php
        }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

