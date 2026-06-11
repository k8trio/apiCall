# apiCall
**Author:** Nathalie Kate Torio

## Description
This project is a simple Laravel CRUD API application that demonstrates how API calls work using routes, controllers, models, and database migrations. The application provides API endpoints for retrieving, inserting, updating, and deleting student records stored in a SQLite database. API requests can be tested using Postman.

---

# Setup 101

### 1. Clone or Download the Repository
Clone this repository or download the project files and open the project folder in Visual Studio Code.

### 2. Install the Following Requirements
* Laravel Herd
* Composer
* Postman
* SQLite Viewer Extension (VS Code)

### 3. Install Project Dependencies
Open a terminal inside the project directory and run:
```bash
composer install
```

### 4. Configure the .env file
Copy the `.env.example` file and rename it to `.env`.
Configure the database settings for SQLite:
```env
DB_CONNECTION=sqlite
```
Make sure the `database.sqlite` file exists inside the `database` folder.

### 5. Generate the Application Key
```bash
php artisan key:generate
```

### 6. Run Database Migrations
```bash
php artisan migrate
```

### 7. Seed Sample Data (Optional)
```bash
php artisan db:seed
```

### 8. Start the Laravel Development Server
```bash
php artisan serve
```

### 9. Access the API
Open the following URL in your browser:
```
http://127.0.0.1:8000/api/students
```

---

# Testing with Postman

### Retrieve All Student Records
```http
GET http://127.0.0.1:8000/api/students
```

---

### Retrieve a Specific Student Record
```http
GET http://127.0.0.1:8000/api/students/1
```
Replace `1` with the desired student ID.

---

### Add a New Student
```http
POST http://127.0.0.1:8000/api/students
```
Body → raw → JSON
```json
{
    "name": "John Doe",
    "email": "john@example.com",
    "course": "BSIT"
}
```

---

### Update a Student Record
```http
PUT http://127.0.0.1:8000/api/students/1
```
Body → raw → JSON
```json
{
    "name": "Juan Dela Cruz",
    "email": "juan@example.com",
    "course": "BSCS"
}
```

---

### Partially Update a Student Record
```http
PATCH http://127.0.0.1:8000/api/students/1
```
Body → raw → JSON
```json
{
    "course": "BSIS"
}
```

---

### Delete a Specific Student Record
```http
DELETE http://127.0.0.1:8000/api/students/1
```

---

### Delete All Student Records
```http
DELETE http://127.0.0.1:8000/api/students
```

---

# Demo Tutorial
apiCall tutorial link: https://drive.google.com/file/d/1KBCF26yHkxr7NgRgZuHnkCp8iJR1vzRV/view?usp=drive_link

The tutorial demonstrates how to test Laravel API endpoints using Postman, including creating, retrieving, updating, and deleting student records through API requests.

---

# Technologies Used
* Laravel
* PHP
* SQLite
* Composer
* Postman
* Visual Studio Code

---

# API Endpoints Summary

| Method | Endpoint           | Description                 |
| ------ | ------------------ | --------------------------- |
| GET    | /api/students      | Retrieve all students       |
| GET    | /api/students/{id} | Retrieve a specific student |
| POST   | /api/students      | Create a new student        |
| PUT    | /api/students/{id} | Update a student            |
| PATCH  | /api/students/{id} | Partially update a student  |
| DELETE | /api/students/{id} | Delete a student            |

