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


Folder Structure:
- index.php (main page)
- add_task.php (insert task)
- delete_task.php (delete task)
- db_connect.php (database connection)
- style.css (optional styling)
- script.js (optional JS)
- task_manager.sql (database dump)



How to Run:
1. Install XAMPP and start Apache and MySQL
2. Import task_manager.sql into phpMyAdmin
3. Place project folder in xampp/htdocs
4. Open browser and go to: http://localhost/task-manager-webapp/index.php



✅ REQUIRED FILES:
index.php
→ Main interface of the app (add/view tasks)

add_task.php
→ Handles inserting new tasks into the database

delete_task.php
→ Handles deleting selected tasks from the database

db_connect.php
→ Connects to MySQL database (important for all backend files)

style.css
→ Optional but needed for layout/design (if you want proper styling)

task_manager.sql
→ Must be imported into phpMyAdmin to create the database & table


STEP-BY-STEP WORKING:

STEP 1: Install XAMPP
Download and install XAMPP
Open the XAMPP Control Panel
Start Apache and MySQL services


STEP 2: Move project to XAMPP
Copy the entire project folder
Paste it inside: C:\xampp\htdocs\
Rename the folder to: task-manager-webapp (if needed)


STEP 3: Create the Database
Open browser and go to: http://localhost/phpmyadmin
Click "New" and create a database named: task_manager
Click on "Import" tab and upload the task_manager.sql file
This will create the necessary table automatically


STEP 4: Run the project in browser
Open: http://localhost/task-manager-webapp/index.php
You can now add, view, and delete tasks



Folder Structure:
- index.php (main page)
- add_task.php (insert task)
- delete_task.php (delete task)
- db_connect.php (database connection)
- style.css (optional styling)
- script.js (optional JS)
- task_manager.sql (database dump)


