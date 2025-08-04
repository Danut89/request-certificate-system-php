<?php
$conn = mysqli_connect("localhost", "root", "", "proqual_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (int)$_POST['id']; // Cast ID to integer for security
    $sql = "UPDATE certificate_requests SET status='Approved' WHERE id=$id";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
header("Location: admin.php");
exit();
?>
