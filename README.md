# 🚀 Mini PHP MVC Framework

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777bb4?style=for-the-badge&logo=php&logoColor=white)
![Architecture](https://img.shields.io/badge/Architecture-MVC-blue?style=for-the-badge)
![Security](https://img.shields.io/badge/Security-Protected-green?style=for-the-badge)

A lightweight, custom-built PHP framework designed from scratch. This project demonstrates a deep understanding of backend architecture, routing systems, and security best practices without relying on heavy external libraries.

---

## ✨ Core Features

* **🎯 Custom Router:** Efficient URL handling with a dedicated routing engine.
* **🏗️ Pure MVC:** Strict separation of concerns (Models, Views, Controllers) for maintainable code.
* **🔐 Authentication:** Full session management and secure user login logic.
* **🛡️ Security Suite:** Integrated protection against **XSS**, **CSRF**, and **SQL Injection**.
* **📋 Data Validation:** Centralized input handling to ensure data integrity.
* **⚙️ Dotenv Support:** Secure configuration management using `.env` files.

---

## 📂 Project Structure

```text
├── app/
│   ├── Controllers/    # Business logic & Request handling
│   ├── Models/         # Database interactions & Logic
│   ├── Views/          # UI Templates & Frontend
│   └── Core/           # Framework Engine (Router, Request, Response)
├── config/             # Configuration files
├── public/             # Entry point (index.php) & Static assets
└── .env.example        # Environment template
```

## 🚀 Getting Started

### 1. Prerequisites
* **PHP** 8.0+
* **Composer**
* **MySQL**

### 2. Installation
```bash
# Clone the repository
git clone [https://github.com/ayoubelfaqir1-ops/mini-framework-php-mvc.git](https://github.com/ayoubelfaqir1-ops/mini-framework-php-mvc.git)

# Navigate to the folder
cd mini-framework-php-mvc
```

### 3. Database Setup
Update your .env file with your database credentials and import the provided schema (if available).
```powershell
# Install dependencies
composer install

# Setup environment
cp .env.example .env
```
