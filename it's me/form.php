<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

echo "<h2>Thank You $name!</h2>";
echo "<p>Your message has been received.</p>";

}
?>

<?php

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

echo "<h2>Thank you $name!</h2>";
echo "<p>Your message has been received.</p>";

?>