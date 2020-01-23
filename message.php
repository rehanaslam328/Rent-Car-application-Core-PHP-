<?php

     include_once('connection.php');
     
     if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $php=$_POST['phn'];
        $query="insert into message(name,phoneno,email,message)values('$name','$php','$email','$message')";
        mysqli_query($con,$query);
        mysqli_close($con);
       echo "<script>location='contact.html'</script>";
     }
     ?>