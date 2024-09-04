<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = 'your-email@example.com';  // Replace with your email address
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Thank you for contacting me. I'll try to get back to you soon.';
    } else {
        echo 'Sorry, something went wrong. Please try again later.';
    }
} else {
    echo 'Invalid request method.';
}
?>
