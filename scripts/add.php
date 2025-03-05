<?php
include '../includes/validate.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST['surname'];
    $name = $_POST['name'];
    $personal_code = $_POST['personal_code'];
    $student_course = $_POST['student_course'];  
    $email = $_POST['email'];
    $message = $_POST['message'] ?? '';

    if (empty($surname) || empty($name) || empty($personal_code) || empty($student_course) || empty($email)) {  
        echo "All fields must be filled!";
        return;
    }

    if (!validateEmail($email)) {
        echo "Invalid email!";
        return;
    }

    if (!validatePersonalCode($personal_code)) {
        echo "Invalid personal code!";
        return;
    }

    $surname = formatName($surname);
    $name = formatName($name);
    $email = strtolower($email);

    $conn = new mysqli("localhost", "root", "", "student_db");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO students (surname, name, personal_code, student_course, email, message) VALUES (?, ?, ?, ?, ?, ?)");  
    $stmt->bind_param("sssiss", $surname, $name, $personal_code, $student_course, $email, $message);  

    if ($stmt->execute()) {
        echo "$name $surname has been added to the database!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <div class="navbar">
        <a href='../index.php' class="back-button">← Back</a>
        <h1 class="header-button">Add Student</h1>
    </div>
    <div class="container">
        <form method="post">
            <label>Surname: <input type="text" name="surname"></label><br>
            <label>Name: <input type="text" name="name"></label><br>
            <label>Personal Code: <input type="text" name="personal_code"></label><br>
            <label>Student's Course: <input type="text" name="student_course"></label><br>  <!-- Изменение здесь -->
            <label>E-mail: <input type="email" name="email"></label><br>
            <label>Message: <textarea name="message"></textarea></label><br>
            <button type="submit">Submit</button>
            <button type="reset">Cancel</button>
        </form>
    </div>
</body>
</html>

