<!-- send_email.php -->

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = "your.email@example.com"; // Replace with your email address
    $subject = "Message from $name";
    $body = "You have received a new message from $name ($email):\n\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! I will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
}
?>
