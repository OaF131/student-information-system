<?php
include '../includes/validate.php';

$conn = new mysqli("localhost", "root", "", "student_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM students");

echo "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>View Students</title><link rel='stylesheet' type='text/css' href='../css/styles.css'></head><body>";

echo "<div class='navbar'>
        <a href='../index.php' class='back-button'>← Back</a>
        <h1 class='header-button'>List of Students</h1>
      </div>";

echo "<table><tr><th>ID</th><th>Surname</th><th>Name</th><th>Personal Code</th><th>Course</th><th>Email</th><th>Message</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["surname"]."</td><td>".$row["name"]."</td><td>".$row["personal_code"]."</td><td>".$row["student_course"]."</td><td>".$row["email"]."</td><td>".$row["message"]."</td></tr>";
    }
} else {
    echo "<tr><td colspan='7'>No data</td></tr>";
}
echo "</table></body></html>";

$conn->close();
?>
