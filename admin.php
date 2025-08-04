<?php
// Connect to database
$conn = mysqli_connect("localhost", "root", "", "proqual_db");

// Fetch all certificate requests
$sql = "SELECT * FROM certificate_requests ORDER BY submitted_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        table, th, td {
            border: 1px solid #ccc;
            border-collapse: collapse;
            padding: 10px;
        }
        th { background: #eee; }
        button { cursor: pointer; }
    </style>
</head>
<body>

<h2>Certificate Requests Dashboard</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Reason</th>
            <th>Status</th>
            <th>Submitted At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= htmlspecialchars($row['reason']) ?></td>
            <td><?= htmlspecialchars($row['status']) ?></td>
            <td><?= htmlspecialchars($row['submitted_at']) ?></td>
            <td>
                <?php if ($row['status'] != 'Approved'): ?>
                    <form action="approve.php" method="POST" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit">Approve</button>
                    </form>
                <?php endif; ?>
                <form action="delete.php" method="POST" style="display:inline;">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

</body>
</html>

<?php mysqli_close($conn); ?>
