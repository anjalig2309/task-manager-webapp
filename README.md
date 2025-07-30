Task Manager Web App

This is a simple task manager web application developed using PHP and MySQL. The app allows users to add, update, and delete tasks. It is designed with HTML, CSS, JavaScript, and Bootstrap for the front-end, and uses PHP for backend logic and MySQL for storing task data.

Features:
- Connects to MySQL database
- Handles form data with PHP
- Add, delete, and view tasks
- Clean UI using Bootstrap
- Interactive form handling using JavaScript

Tech Stack:
- HTML for webpage structure
- CSS for styling
- Bootstrap for responsive UI
- JavaScript for interactivity
- PHP for backend logic
- MySQL for database
- XAMPP for running PHP and MySQL locally

Database Table: tasks
- id (INT, auto-increment, primary key)
- task_name (VARCHAR)
- due_date (DATE)
- category (VARCHAR)

How to Run:
1. Install XAMPP and start Apache and MySQL
2. Import task_manager.sql into phpMyAdmin
3. Place project folder in xampp/htdocs
4. Open browser and go to: http://localhost/task-manager-webapp/index.php

Folder Structure:
- index.php (main page)
- add_task.php (insert task)
- delete_task.php (delete task)
- db_connect.php (database connection)
- style.css (optional styling)
- script.js (optional JS)
- task_manager.sql (database dump)


