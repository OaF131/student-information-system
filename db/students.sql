CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    surname VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    personal_code CHAR(11) NOT NULL UNIQUE,
    student_course INT NOT NULL,
    email VARCHAR(50),
    message VARCHAR(250),
    UNIQUE KEY unique_entry (surname, name, personal_code)
);
