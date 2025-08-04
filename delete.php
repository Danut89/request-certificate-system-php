<?php
$conn = mysqli_connect("localhost", "root", "", "proqual_db");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = (int)$_POST['id']; // Security cast
    $sql = "DELETE FROM certificate_requests WHERE id=$id";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
header("Location: admin.php");
exit();
?>
