# 🧑‍🎓 Student–Adviser Records System

## 📘 Description / Overview
The **Student–Adviser Records System** is a web-based CRUD (Create, Read, Update, Delete) application developed using **Laravel**.  
It is designed to manage and organize student information alongside their assigned advisers.  
The system allows users to **add**, **view**, **update**, and **delete** records efficiently, providing a simple and user-friendly interface for academic record management.

---

## 🎯 Objectives
- To develop a functional Laravel CRUD application.
- To demonstrate the use of **MVC (Model–View–Controller)** architecture in Laravel.
- To implement database operations using **Eloquent ORM**.
- To provide a simple interface for managing **student and adviser information**.
- To enhance understanding of **Blade templates**, **routing**, and **form validation**.

---

## ⚙️ Features / Functionality
- **Add Record** – Create new student and adviser entries.
- **View Record** – Display detailed information of a student and their adviser.
- **Edit Record** – Update existing information.
- **Delete Record** – Remove unnecessary data from the system.
- **Simple User Interface** – Clean layout with minimal styling for readability.
- **Validation** – Ensures that form inputs are correctly filled before submission.

---

## 🖥️ Installation Instructions
Follow these steps to set up the project locally:

1. **Clone or copy the project folder**
   ```bash
   git clone https://github.com/Bas1CUBER/Student-Adviser-Records-System.git

## 🚀 Usage

1. Run the Laravel development server:
   ```bash
   php artisan serve

---

## 🖼️ **Screenshots or Code Snippets**

### Homepage (Student List)
![Student List Screenshot](public/images/StudentList.png)

### Add Student Form
![Add Student Screenshot](public/images/AddStudent.png)

### Example Controller Code
```php
public function index()
{
    $students = Student::all();
    return view('students.index', compact('students'));
}
```

## 👥 **Contributors**

- **Odrei John C. Patajo**  
  BS Information Technology – Major in Business Analytics  
  [GitHub Profile](https://github.com/Bas1CUBER)


## 📄 License
This project is licensed under the **MIT License**.  
You are free to use, modify, and distribute this project for educational purposes.

© 2025 Odrei John C. Patajo