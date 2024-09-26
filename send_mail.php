<?php include("include/header.php");?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Email recipient (replace with your email address)
    $to = "your-email@example.com";  // Replace with your email address
    $email_subject = "New Message from: " . $name . " - " . $subject;

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Email body content
    $email_body = "
    <html>
    <head>
        <title>New Contact Form Submission</title>
    </head>
    <body>
        <h2>New message from the contact form</h2>
        <p><strong>Name: </strong> {$name}</p>
        <p><strong>Email: </strong> {$email}</p>
        <p><strong>Subject: </strong> {$subject}</p>
        <p><strong>Message: </strong><br> {$message}</p>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an issue sending your message. Please try again.";
    }
}
?>


<!-- footer -->
<?php include("include/footer.php");?>