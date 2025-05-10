#E-Bazar
## 🛒 E-Commerce Website using Core PHP

This is a simple e-commerce web application built using **Core PHP**, **MySQL**, **HTML/CSS**, and **Bootstrap**. It supports user authentication, product listing, cart management, and order placement.

---

## 🚀 Features

- User Registration and Login
- Admin Panel to Add/Edit/Delete Products
- Product Listing with Details
- Add to Cart Functionality
- Cart Page with Total Calculation
- Order Placement System
- Session Management
- Image Upload for Products

---

## 🛠 Tech Stack

- **Frontend**: HTML, CSS, Bootstrap
- **Backend**: Core PHP
- **Database**: MySQL
- **Local Server**: XAMPP / Apache

---

## 📂 Project Structure
```bash
├── shared/
│ └── connection.php # DB connection file
├── auth/
│ ├── login.php
│ └── signin.php
├── admin/
│ ├── addp.php
│ └── manage_products.php
├── cart/
│ ├── addcart.php
│ └── viewcart.php
├── product/
│ └── product_list.php
├── assets/
│ ├── css/
│ └── images/
├── index.php
└── README.md
```

---

## ⚙️ Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/ecommerce-php.git
2. **Move to XAMPP's htdocs**
   - Copy the ecommerce-php folder to:
```bash
C:\xampp\htdocs\
```
3. **Start XAMPP Server**
- Run Apache and MySQL
4. **Import the Database**

-Open http://localhost/phpmyadmin

-Create a database named ecommerce

-Import ecommerce.sql (provided in the project folder)

5. **Configure DB Connection**

-Update shared/connection.php with:

```bash
$con = new mysqli("localhost", "root", "", "ecommerce");
```
6. **Run the Project**

- Open browser and go to:
```bash
http://localhost/ecommerce-php/
```

---

##🔐 Admin Login (if applicable)
- Username: admin
- Password: admin123


