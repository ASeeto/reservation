<?php
if (!isset($_POST["email"])) {
	header("Location: contact.php");
	exit;
}

echo "<title>Snell Library | InfoCommons</title>";

// Create Variables for Inputs
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];
 
// Send the email
$to = "seeto.a@husky.neu.edu";
$subject = "AlexSeeto.com: Message from $lastname, $firstname";
$message = "$message";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

echo "<br><br><center><a href=http://www.alexseeto.com/reservationproject/index.php><img src=/reservationproject/images/header.png></a><br><i>Click the header to return to the main site!</i>";
// Die with a success message
die("<span class='success'><br><br><h1>Success! Your message has been sent.</h1><br><br></span>");

echo "</center>";
?>