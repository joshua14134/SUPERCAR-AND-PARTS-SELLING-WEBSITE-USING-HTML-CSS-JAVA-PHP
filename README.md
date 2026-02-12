# 🚗 Supercar & Accessories E-Commerce Website

A dynamic full-stack web application for selling luxury supercars and automotive accessories. Built using **PHP, MySQL, HTML, CSS, and JavaScript**, this platform provides secure authentication, shopping cart functionality, checkout processing, and a complete admin dashboard for inventory and user management.

---

## 🌟 Project Highlights

* 🔐 Secure User Authentication System
* 🛒 Fully Functional Shopping Cart
* 💳 Checkout & Order Processing
* 👤 Profile Management System
* 📊 Admin Dashboard with CRUD Operations
* 📱 Responsive & Modern UI

---

## 🧩 Features

### 👤 Customer Side

* User Registration & Login
* Browse Supercars & Accessories
* Add to Cart / Remove from Cart
* Checkout & Payment Processing
* View Order Confirmation
* Edit Profile Details
* Responsive Interface

### 🛠️ Admin Side

* Admin Login Panel
* Dashboard Overview
* Add / Edit / Delete Products
* Manage Users
* Delete Users
* Inventory Control

---

## 🛠️ Technologies Used

| Category        | Technology              |
| --------------- | ----------------------- |
| Frontend        | HTML5, CSS3, JavaScript |
| Backend         | PHP                     |
| Database        | MySQL                   |
| Server          | Apache (XAMPP/WAMP)     |
| Version Control | Git & GitHub            |

---

## 📂 Project Structure

```
/supercar
│
├── assets/
│   └── avatars/
│
├── about.php
├── admin_page.php
├── buy.php
├── c_add_to_cart.php
├── c_cart.php
├── check_name.php
├── checkout.php
├── config.php
├── dashboard.php
├── delete_user.php
├── edit_user.php
├── footer.php
├── header.php
├── home.php
├── index.php
├── login.php
├── login_form.php
├── logout.php
├── parts_page.php
├── popular.php
├── process_payment.php
├── profile.php
├── register_form.php
├── service.php
├── thankyou.php
└── user_page.php
```

---

## ⚙️ Installation Instructions

### 1️⃣ Clone Repository

```bash
git clone https://github.com/joshua14134/supercar.git
cd supercar
```

### 2️⃣ Create Database

* Open phpMyAdmin
* Create a database (e.g., `supercar_db`)
* Import the provided SQL file

### 3️⃣ Configure Database Connection

Open `config.php` and update:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "superwheel";
```

### 4️⃣ Run the Project

* Move folder to `htdocs` (XAMPP)
* Start Apache & MySQL
* Visit:

```
http://localhost/supercar
```

---

## 🔒 Security Enhancements (Recommended)

For production deployment:

* Use `password_hash()` for storing passwords
* Implement prepared statements (PDO/MySQLi)
* Add CSRF protection
* Validate and sanitize inputs
* Regenerate session IDs on login

---

## 🚀 Future Improvements

* Online Payment Gateway Integration
* Email Verification System
* Product Search & Filters
* Wishlist Feature
* Sales Analytics Dashboard
* Order Tracking System

---

## 👨‍💻 Developer

**Joshua Greg Colao**
