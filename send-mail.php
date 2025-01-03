<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: contact-form.php?error=1");
        exit;
    }

    // Email settings
    $to = "your-email@example.com"; // Replace with your actual email address
    $subject = "New Enquiry from Contact Form";
    $body = "You have received a new enquiry:\n\n".
            "Name: $name\n".
            "Email: $email\n".
            "Message: $message\n";
    $headers = "From: no-reply@yourdomain.com" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        header("Location: contact-form.php?success=1");
    } else {
        header("Location: contact-form.php?error=1");
    }
}
?>
