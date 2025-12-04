<?php
// contact.php

// CORS headers for development (allow requests from any origin)
// In production, replace '*' with your specific domain like 'https://yourdomain.com'
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

// Only allow POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Sanitize and Validate Input
    $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $company = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_STRING);
    $service = filter_input(INPUT_POST, 'service', FILTER_SANITIZE_STRING);
    $budget = filter_input(INPUT_POST, 'budget', FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    // Basic Validation
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        http_response_code(400); // Bad Request
        echo json_encode(["success" => false, "message" => "Please fill in all required fields."]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit;
    }

    // 2. Prepare Email (For production)
    $to = "info@techsolutions.com"; // Replace with your real email
    $subject = "New Project Inquiry from $firstName $lastName";

    $email_content = "Name: $firstName $lastName\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Company: $company\n";
    $email_content .= "Service Interest: $service\n";
    $email_content .= "Budget Range: $budget\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // 3. Send Email Logic
    // If running on localhost, simulate success. Otherwise, try sending real mail.
    $isLocalhost = ($_SERVER['SERVER_NAME'] === 'localhost' || $_SERVER['SERVER_NAME'] === '127.0.0.1');

    if ($isLocalhost) {
        $mailSent = true; // Simulation for local dev
    } else {
        // Suppress warnings with @ to handle errors manually via return value
        $mailSent = @mail($to, $subject, $email_content, $headers);
    }

    if ($mailSent) {
        // Success response
        http_response_code(200);
        echo json_encode([
            "success" => true,
            "message" => "Thank you! Your message has been sent.",
            "debug_info" => $isLocalhost ? "Simulated on localhost" : "Sent via PHP mail()"
        ]);
    } else {
        // Server Error
        http_response_code(500);
        echo json_encode(["success" => false, "message" => "Oops! Something went wrong and we couldn't send your message."]);
    }

} else {
    // Not a POST request
    http_response_code(405); // Method Not Allowed
    echo json_encode(["success" => false, "message" => "Method not allowed."]);
}