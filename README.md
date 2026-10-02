<p align="center">
  <img src="https://raw.githubusercontent.com/esraaghneem/sweet-house-backend/main/public/logo.png" width="400" alt="Sweet House Logo">
</p>

<h1 align="center">Sweet House</h1>

<p align="center">
  A RESTful API backend for a modern dessert e-commerce application.
</p>

<p align="center">
  <a href="https://github.com/esraaghneem/sweet-house-backend">
    <img src="https://img.shields.io/badge/Backend-Laravel%2012-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Backend">
  </a>
  <a href="https://github.com/esraaghneem/sweet-house-frontend">
    <img src="https://img.shields.io/badge/Frontend-React-61DAFB?style=for-the-badge&logo=react&logoColor=black" alt="Frontend">
  </a>
  <img src="https://img.shields.io/badge/Database-MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/Auth-Sanctum-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Sanctum">
</p>

<p align="center">
  <a href="https://github.com/esraaghneem/sweet-house-frontend">
    <strong>Frontend Repository</strong>
  </a>
  &nbsp; • &nbsp;
  <a href="http://127.0.0.1:8000/api">
    <strong>API</strong>
  </a>
</p>

---

## 🍰 About Sweet House

**Sweet House** is a full-stack dessert e-commerce application built with a Laravel REST API backend and a React frontend.

The application allows customers to browse desserts, filter products by category, manage their shopping cart, create orders, and complete a simulated payment process.

The project was designed with a focus on clean code, separation of responsibilities, authentication, validation, and scalable backend architecture.

---

## 🛠️ Technologies

### Backend

* Laravel 12
* PHP
* MySQL
* Laravel Sanctum
* Eloquent ORM
* RESTful API

### Frontend

* React
* Vite
* JavaScript
* Axios
* CSS

---

## ✨ Features

### 🔐 Authentication

* User registration
* User login
* User logout
* Authenticated user information
* Token-based authentication using Laravel Sanctum

### 🍰 Products & Categories

* Category management
* Product management
* Product/category relationships
* Product images
* Product stock management
* Active product filtering

### 🛒 Shopping Cart

* Add products to cart
* Increase/decrease quantities
* Remove products
* Calculate cart total
* Clear cart

### 📦 Orders

* Create orders
* View authenticated user's orders
* View order details
* Order items
* Automatic order total calculation
* Stock validation
* Automatic stock reduction
* Database transactions

### 💳 Simulated Payment

The project includes a simulated payment system for demonstration and portfolio purposes.

```text
Cart
  ↓
Create Order
  ↓
Payment
  ↓
Simulated Payment
  ↓
Payment Successful
  ↓
Order Confirmed
```

No real payment provider or real money transactions are used.

---

## 🏗️ Backend Architecture

The backend follows a clean and organized Laravel architecture.

```text
Request
   ↓
Controller
   ↓
Form Request
   ↓
Service
   ↓
Model
   ↓
Database
```

Main structure:

```text
app/
├── Http/
│   ├── Controllers/
│   │   └── Api/
│   │
│   ├── Requests/
│   │
│   └── Resources/
│
├── Models/
│
└── Services/
```

Business logic is separated into Service Classes, validation is handled through Form Requests, and API responses are structured using Resources.

---

## 📡 API Endpoints

### Authentication

| Method | Endpoint        | Description            |
| ------ | --------------- | ---------------------- |
| POST   | `/api/register` | Register a user        |
| POST   | `/api/login`    | Login                  |
| POST   | `/api/logout`   | Logout                 |
| GET    | `/api/user`     | Get authenticated user |

### Categories

| Method    | Endpoint               | Description     |
| --------- | ---------------------- | --------------- |
| GET       | `/api/categories`      | Get categories  |
| POST      | `/api/categories`      | Create category |
| GET       | `/api/categories/{id}` | Get category    |
| PUT/PATCH | `/api/categories/{id}` | Update category |
| DELETE    | `/api/categories/{id}` | Delete category |

### Products

| Method    | Endpoint             | Description    |
| --------- | -------------------- | -------------- |
| GET       | `/api/products`      | Get products   |
| POST      | `/api/products`      | Create product |
| GET       | `/api/products/{id}` | Get product    |
| PUT/PATCH | `/api/products/{id}` | Update product |
| DELETE    | `/api/products/{id}` | Delete product |

### Orders

| Method | Endpoint                   | Description               |
| ------ | -------------------------- | ------------------------- |
| GET    | `/api/orders`              | Get user's orders         |
| POST   | `/api/orders`              | Create order              |
| GET    | `/api/orders/{id}`         | Get order                 |
| POST   | `/api/orders/{id}/payment` | Process simulated payment |

---

## 🗄️ Database

Main entities:

```text
users
categories
products
orders
order_items
```

Relationships:

```text
User
 └── hasMany Orders

Category
 └── hasMany Products

Order
 ├── belongsTo User
 └── hasMany OrderItems

OrderItem
 ├── belongsTo Order
 └── belongsTo Product

Product
 └── belongsTo Category
```

---

## 🚀 Installation

Clone the repository:

```bash
git clone https://github.com/esraaghneem/sweet-house-backend.git
```

Install dependencies:

```bash
composer install
```

Create the environment file:

```bash
copy .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

Configure the database in `.env`.

Run migrations:

```bash
php artisan migrate
```

Create the storage link:

```bash
php artisan storage:link
```

Start the Laravel server:

```bash
php artisan serve
```

The API will be available at:

```text
http://127.0.0.1:8000/api
```

---

## 🧪 Testing

The API can be tested using **Postman** or through the React frontend.

Protected endpoints use Laravel Sanctum authentication:

```text
Authorization: Bearer YOUR_TOKEN
```

---

## 🔗 Project Links

### Backend

[Sweet House Backend](https://github.com/esraaghneem/sweet-house-backend)

### Frontend

[Sweet House Frontend](https://github.com/esraaghneem/sweet-house-frontend)

---

## 👩‍💻 Author

**Esraa Ghneem**

Backend Developer

[GitHub](https://github.com/esraaghneem)

---

## 📄 License

This project is created for educational and portfolio purposes.
