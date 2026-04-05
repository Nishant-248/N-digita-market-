<?php

$conn = new mysqli("localhost","root","","nishant_site");

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

$sql = "INSERT INTO appointments(name,email,date,time,message)
VALUES('$name','$email','$date','$time','$message')";

$conn->query($sql);

$to = "yourmail@gmail.com";

$subject = "New Appointment Booking";

$body = "Name: $name\nEmail: $email\nDate: $date\nTime: $time\nMessage: $message";

mail($to,$subject,$body);

echo "Appointment Booked Successfully";

?>


<?php

$conn = new mysqli("localhost","root","","nishant_site");

$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['date'];
$time=$_POST['time'];
$message=$_POST['message'];

$check = "SELECT * FROM appointments WHERE date='$date' AND time='$time'";
$result = $conn->query($check);

if($result->num_rows > 0){

echo "Slot already booked ❌";

}else{

$sql = "INSERT INTO appointments(name,email,date,time,message)
VALUES('$name','$email','$date','$time','$message')";

$conn->query($sql);

mail("yourmail@gmail.com","New Appointment",
"$name booked appointment on $date at $time");

echo "Success! Appointment booked ✅";

}

?>