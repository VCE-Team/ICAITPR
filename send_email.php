<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = $_POST['email']; // Get the user's email from the form
    $subject = "Conference Registration Confirmation";
    $message = "Registration Details: \n";
    $message .= "Category: " . $_POST['category'] . "\n";
    $message .= "Name: " . $_POST['name'] . "\n";
    $message .= "Designation: " . $_POST['designation'] . "\n";
    $message .= "Organization: " . $_POST['organization'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Phone: " . $_POST['phone'] . "\n";
    $message .= "Membership: " . $_POST['membership'] . "\n";
    $message .= "Paper ID: " . $_POST['paperId'] . "\n";
    $message .= "Paper Title: " . $_POST['paperTitle'] . "\n";
    $message .= "Pages: " . $_POST['pages'] . "\n";
    $message .= "Payment ID: " . $_POST['razorpay_payment_id'] . "\n";

    $headers = "From: noreply@conference.com";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error sending email.";
    }
}
?>
