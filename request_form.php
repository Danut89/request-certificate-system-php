<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate Request Form</title>
</head>
<body>
    <h2>Request Certificate</h2>
    <form action="submit_request.php" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Course Name:</label><br>
        <input type="text" name="course" required><br><br>

        <label>Reason for Request:</label><br>
        <textarea name="reason" required></textarea><br><br>

        <button type="submit">Submit Request</button>
    </form>
</body>
</html>
