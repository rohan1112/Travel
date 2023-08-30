<?php

$con= mysqli_connect('localhost','root');
if($con){
    echo "connected";
}
else{
    echo "error";
}

mysqli_select_db($con,'tour');

$email=$_POST['email'];
$pass=$_POST['password'];

$emailfromdb = "SELECT email FROM signup WHERE email='$email' AND pass='$pass'";
$result = mysqli_query($con,$emailfromdb);
$row  = mysqli_fetch_array($result);

echo $row;
if($email=='' || $pass==''){
    ?>
    <script>
        alert("Fields cannot be empty");
        location.href="login.html";
    </script>
<?php
}
if(is_array($row)){
    
    $_SESSION['email']=$row['email'];
    ?>
    <script>
        alert("Login Successful!!!");
        location.href="bookingform.html";
    </script>
<?php
}
else{
    ?>
    <script>
        alert("Invalid Email ID/Password");
        location.href="login.html";
    </script>
<?php
}


?>