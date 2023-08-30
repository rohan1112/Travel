<?php

$con= mysqli_connect('localhost','root');



mysqli_select_db($con,'tour');

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$email=$_POST['email'];
$tour_name=$_POST['tour'];
$phone=$_POST['phone'];

if($firstname=='' || $lastname=='' || $email=='' || $tour_name=='' || $phone==''){
    ?>
    <script>
        alert("Fields cannot be empty");
        location.href="bookingform.html";
    </script>
<?php
}
else{
    $data = "INSERT INTO bookings (fname,lname,email,tour_name,phone_no) VALUES('$firstname','$lastname','$email','$tour_name','$phone')";
    mysqli_query ($con, $data);
    echo "Inserted sucessfully";
    ?>
    <script>
        alert("Submited Successfully");
        location.href="bookingform.html";
    </script>
<?php
}

?>