<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $category = $_POST['category'];
    $service = $_POST['service'];
    $videoLink = $_POST['video-link'];
    $quantity = $_POST['quantity'];
    $whatsappNumber = $_POST['whatsapp-number'];
    $price = $_POST['price'];

    // Prepare email content
    $to = "hackcrackzone@gmail.com"; // Your Gmail address
    $subject = "New Order Submission";
    $message = "Category: $category\n";
    $message .= "Service: $service\n";
    $message .= "Video/Post Link: $videoLink\n";
    $message .= "Quantity: $quantity\n";
    $message .= "WhatsApp Number: $whatsappNumber\n";
    $message .= "Price: $price\n";

    // Send email
    $headers = "https://asifmufti922.github.io/social-marketing/submit.php"; // Replace with your domain
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Order submitted successfully!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Failed to submit order. Please try again.'); window.location.href = 'index.html';</script>";
    }
} else {
    // Redirect if accessed directly
    header("Location: index.html");
    exit();
}
?>
