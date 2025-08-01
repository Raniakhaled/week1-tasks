<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<h2>Message Received</h2>";
        echo "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
    } else {
        echo "<h3 style='color:red;'>Error: All fields are required.</h3>";
    }
} else {
    echo "<h3 style='color:red;'>Invalid request method.</h3>";
}
?>
