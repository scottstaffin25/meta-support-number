<?php
// Dummy credentials (in real cases, validate against database)
$valid_email = "user@example.com";
$valid_password = "secret123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    if ($email === $valid_email && $password === $valid_password) {
        // Redirect to a dashboard or home page
        header("Location: dashboard.php");
        exit();
    } else {
        // Redirect back to login with an error
        $error = urlencode("Invalid email or password.");
        header("Location: index.html?error=$error");
        exit();
    }
} else {
    header("Location: index.html");
    exit();
}
