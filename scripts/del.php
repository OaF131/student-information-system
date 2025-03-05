<?php
$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

if ($conn->query("DELETE FROM students") === TRUE) {
    echo "All student records have been deleted!";
} else {
    echo "Error deleting records: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Students</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <p> <a href="view.php">Check records </a></p>
</body>
</html>