

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "adnan.azem.250@gmail.com"; // Your email address
  $subject = "Contact Form Submission from $name";
  $headers = "From: $email";

  // Send the email
  mail($to, $subject, $message, $headers);
}
?>