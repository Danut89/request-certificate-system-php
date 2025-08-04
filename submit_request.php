<?php
// Connect to DB
$conn = mysqli_connect("localhost", "root", "", "proqual_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data safely
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$course = htmlspecialchars($_POST['course']);
$reason = htmlspecialchars($_POST['reason']);

// Insert into DB
$sql = "INSERT INTO certificate_requests (name, email, course, reason)
        VALUES ('$name', '$email', '$course', '$reason')";

if (mysqli_query($conn, $sql)) {
    echo "✅ Your certificate request has been submitted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
