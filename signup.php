<?php

$con= mysqli_connect('localhost','root');

if($con){
    echo "connected";
}
else{
    echo "error";
}

mysqli_select_db($con,'tour');

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['confirm_password'];

if($firstname=='' || $lastname=='' || $email=='' || $pass=='' || $cpass==''){
?>
    <script>
        alert("Fields cannot be empty");
        location.href="signup.html";
    </script>
<?php
}
if($pass===$cpass){
    $data = "INSERT INTO signup (fname,lname,email,pass,c_pass) VALUES('$firstname','$lastname','$email', '$pass','$cpass')";
    mysqli_query ($con, $data);
?>
    <script>
        alert("Registration successful!!!");
        location.href="login.html";
    </script>
<?php
}
else{
?>
    <script>
        alert("password not match");
        location.href="signup.html";
    </script>
<?php
}

?>