<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbname = "portfolio";
$port = 3308; // Make sure the port matches your MySQL configuration (default is 3306 or 3308)

// Connect to the database
$conn = new mysqli($host, $user, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Only process the form if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO me (name, email, subject, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $subject, $message);

    if ($stmt->execute()) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Handle the case where the method is not POST
    http_response_code(405);
    echo "Method Not Allowed";
}

// Close connection
$conn->close();
?>
