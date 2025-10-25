# 🏷️ Heritage E-Commerce API (Laravel + Sanctum)

This is a simple backend API for a shoe e-commerce platform built with Laravel.
It’s designed as a portfolio project to demonstrate RESTful API development, user authentication using Laravel Sanctum, and role-based access control for admin and regular users.

---

## 🧠 Project Overview

This project provides essential e-commerce functionality through clean and secure API endpoints.
Users can view products, while admins can manage product data including stock and images.
The system uses token-based authentication (via Sanctum) and follows RESTful principles.

---

## ⚙️ Key Features

### Authentication

-   User registration and login using Laravel Sanctum
-   Token-based authentication for secure API access
-   Role-based access (admin and user)
-   Token revocation (logout)
-   Retrieve logged-in user information via /me

### Products

-   Full CRUD functionality (create, read, update, delete)
-   Product image upload and validation
-   Stock management for each product
-   Public storage for uploaded images
-   Cart & Checkout:
    Users can add products to their cart
-   Create orders and manage order status (pending, paid, shipped, completed)

---

## 🧩 Main Database Structure

### Users

id, name, email, password, role, timestamps

### Products

id, name, price, stock, image, timestamps

### Orders

id, user_id, total_price, status, timestamps

---

## 🔐 Roles & Permissions

-   Admin: Can create, update, and delete products
-   User: Can view products and perform checkout actions

---

## 🧾 Main API Endpoints

### Authentication

-   POST /register — Register a new user
-   POST /login — Authenticate user and return token
-   POST /logout — Revoke token and logout
-   GET /me — Get logged-in user data

### Products

-   GET /products — Get all products
-   POST /products — Create a new product (admin only)
-   GET /products/{id} — Get a single product by ID
-   PUT /products/{id} — Update product details (admin only)
-   DELETE /products/{id} — Delete a product (admin only)

---

## 🧱 Tech Stack

-   Laravel 12.35.0
-   Laravel Sanctum (API authentication)
-   MySQL (database)
-   PHP 8.4.10
-   Postman (API testing)
-   HeidiSQL (Local development environment for PHP and MySQL)
-   Laragon (Database management tool for MySQL)

---

## 🎯 Project Purpose

#### This project was built to strengthen backend development skills and demonstrate:

-   RESTful API design principles in Laravel
-   Authentication and authorization using Sanctum
-   Media upload and file management in Laravel
-   Relational database design with one-to-many relationships
