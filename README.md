# Student Information System (PHP & MySQL Task)

This project is a **Student Information System (SIS)** built using **PHP** and **MySQL**. It allows users to manage and store student information such as name, surname, personal code, course, email, and messages. 

![screen](screenshot.pg)

## Features

- **Add students**: Add new students to the system with details such as name, surname, personal code, email, etc.
- **View students**: View the list of all registered students in a tabular format.
- **Delete students**: Remove student records from the database.

## Technologies Used

- **PHP**: Server-side scripting language to handle form submissions and database interactions.
- **MySQL**: Database management system to store student information.
- **HTML/CSS**: For structuring and styling the web pages.

---

## Project Structure

```
student-information-system/
│
├── css/
│   └── styles.css           # Styles for the application
│
├── db/
│   └── students.sql         # SQL file to set up the database structure and sample data
│
├── includes/
│   └──  validate.php         # Validates user input
│
├── scripts/
│   ├── add.php              # Handles adding new student records
│   ├── del.php              # Handles deleting student records
│   └── view.php             # Handles viewing student records
│
└── index.php                # Main page of the application
 
```


## Installation

To get started with the project, follow these steps:


1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/student-information-system.git
   ```


2. Create a **MySQL database**:

    - Open your MySQL client (e.g., phpMyAdmin, MySQL Workbench, or command line).
   
    - Create a new database:  
   ```sql
   CREATE DATABASE student_db;
   ```


4. Import the **students.sql** file to set up the necessary tables:

   - In phpMyAdmin, go to the **student_db** database and click on the **Import** tab.
   
   - Select the **students.sql** file located in the `db/` folder of your project.
   
   - Click **Go** to execute the SQL script and set up the database.

 
5. Configure your PHP environment (e.g., XAMPP, LAMP, WAMP) to run PHP and MySQL locally.


6. Navigate to the project directory and open it in a browser:
   ```
   http://localhost/student-information-system/
   ```
## Usage

- You can **add a student** by filling out the form with the student's details and submitting it (via `add.php`).
- To **view the list of students**, navigate to the "View Students" page (via `view.php`).
- You can also **delete** student records if necessary (via `del.php`).

## Contact

- 📧 Email: [konstantin.webdev.01@gmail.com](mailto:konstantin.webdev.01@gmail.com)
   
