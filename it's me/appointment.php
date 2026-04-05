<?php

$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$message = $_POST['message'];

echo "<h2>Appointment Booked Successfully</h2>";

echo "Name: $name <br>";
echo "Date: $date <br>";
echo "Time: $time <br>";

?>



<?php
$conn = new mysqli("localhost","root","","nishant_site");

$date = date("Y-m-d");

$slots = [
"10:00",
"11:00",
"12:00",
"02:00",
"03:00",
"04:00"
];
?>
<form id="appointForm">

<input type="text" name="name" placeholder="Your Name" required>

<input type="email" name="email" placeholder="Email" required>

<input type="date" name="date" required>

<input type="time" name="time" required>

<textarea name="message" placeholder="Message"></textarea>

<button type="submit">Book Appointment</button>

</form>

<div id="popup"></div>

<script src="appoint.js"></script>