# 🚗 Supercar & Accessories E-Commerce Website

A full-stack dynamic web application for selling luxury supercars and automotive accessories. Built using **PHP and MySQL**, this system includes secure authentication, shopping cart functionality, checkout processing, and a powerful admin dashboard.

---

## 🌟 Project Overview

This platform allows customers to:

* Browse supercars and accessories
* Add items to cart
* Complete purchases
* Manage profiles
* View order confirmations

Administrators can:

* Manage users
* Manage products
* Monitor transactions
* Control inventory

---

## ✨ Features

### 👤 Customer Features

* User Registration & Login
* Profile Management
* Browse Products
* Add to Cart / Remove from Cart
* Checkout System
* Order Confirmation Page
* Responsive Design

### 🛠️ Admin Features

* Admin Login Panel
* Dashboard Overview
* Add / Edit / Delete Products
* Manage Users
* Delete Users
* Inventory Control

---

## 🛠 Technologies Used

| Layer           | Technology              |
| --------------- | ----------------------- |
| Frontend        | HTML5, CSS3, JavaScript |
| Backend         | PHP                     |
| Database        | MySQL                   |
| Server          | Apache (XAMPP / WAMP)   |
| Version Control | Git & GitHub            |

---

## 📸 Application Screenshots

> Make sure your screenshots are stored inside:
> `assets/screenshots/`

---

### 🏠 Home Page

<p align="center">
  <img src="home.png" width="900">
</p>

---

### 🔐 Login Page

<p align="center">
  <img src="login.png" width="900">
</p>

---

### 🛠️ Service Page

<p align="center">
  <img src="service.png" width="900">
</p>

---

### 👤 User Profile

<p align="center">
  <img src="profile.png" width="900">
</p>

---

### 📊 Admin Dashboard

<p align="center">
  <img src="admin.png" width="900">
</p>

---

## 📂 Project Structure

```
/supercar
│
├── assets/
│   ├── avatars/
│   └── screenshots/
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

## ⚙️ Installation

### 1️⃣ Clone Repository

```bash
git clone https://github.com/joshua14134/supercar.git
cd supercar
```

### 2️⃣ Setup Database

* Open phpMyAdmin
* Create database: `supercar_db`
* Import the provided SQL file

### 3️⃣ Configure Database

Edit `config.php`:

```php
$servername = "localhost";
$username = "root";
$password = "";
$database = "supercar_db";
```

### 4️⃣ Run Project

* Move project folder to `htdocs`
* Start Apache & MySQL
* Open in browser:

```
http://localhost/supercar
```

---

## 🔐 Security Improvements (Recommended)

* Use `password_hash()` for passwords
* Use prepared statements (PDO/MySQLi)
* Add CSRF protection
* Validate and sanitize inputs
* Regenerate session IDs

---

## 🚀 Future Enhancements

* Payment Gateway Integration
* Order Tracking
* Product Search & Filters
* Wishlist System
* Email Verification
* Sales Analytics Dashboard

---

## 👨‍💻 Developer

**Joshua Greg Colao**
