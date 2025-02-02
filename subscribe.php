<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }
    
    $file = 'subscribers.txt';
    file_put_contents($file, $email . "\n", FILE_APPEND);
    echo "Thank you for subscribing!";
} else {
    echo "Error: Invalid request.";
}
?>