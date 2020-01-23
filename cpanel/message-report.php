<html>
<head>
    <title>  Report </title>
</head>

<body style="background-color: aqua">

<table align="center" width="800" border="5">
    <button onClick="location='Employee.php'">New Record</button><br><br>
    <tr>
        <th>Messagee id</th>
        <th>Name</th>
        <th>Phone no</th>
        <th>Email</th>
        <th>Message</th>
    

    </tr>
    <?php
    include ("config.php");

    $query="select * from message";
    $rs=mysqli_query($con,$query);

    while($r=mysqli_fetch_array($rs)){


    ?>
    <tr>
        <td><?php echo $r[0] ?></td>
        <td><?php echo $r[1] ?></td>
        <td><?php echo $r[2] ?></td>
        <td><?php echo $r[3] ?></td>
        <td><?php echo $r[4] ?></td>
    
        <?php
        }

        mysqli_close($con);
        ?>
    </tr>

</table>

</body>
</html>

