# Volunteer & Intern Registration Backend

A basic PHP-based backend to:
- Register users as **volunteers** or **interns**
- Allow **admin** login to view registered users

## How to Use

### 1. Open the registration form:
[Register Here](https://riyaaa.fwh.is/backend/register_form.html)

Fill in your details and submit to create a new user account.

---

### 2. Admin Login

- Username: `admin`
- Password: `admin`
To access the admin panel, open:
[Admin Login](https://riyaaa.fwh.is/backend/adminLogin.html)
 
## Tech Stack
- PHP
- MySQL
- HTML/CSS
- Hosted on InfinityFree

##  Features
- User registration with secure password hashing
- Admin login authentication
- View all registered users (admin only)

##  Database Setup

Tables:
- `users`: name, email, password (hashed), role
- `admin`: username, password (SHA1)

## 🚀 How to Run Locally
1. Use XAMPP or any local PHP server
2. Place files inside `htdocs/backend`
3. Import `database.sql` in phpMyAdmin
4. Set your DB credentials in `db.php`
