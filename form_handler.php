<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    
    $to = "arjunrana18ak@gmail.com";  // Replace with your email address
    $subject = "Form Submission";
    $message = "First name: " . $fname . "\nLast name: " . $lname;
    $headers = "From: arjunrana18ak@gmail.com";  // Replace with your email address

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
        error_log("Email sent successfully to $to");
    } else {
        echo "Failed to send email.";
        error_log("Failed to send email to $to");
    }
}
?>
