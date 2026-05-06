# Hardware Marketplace Management Platform

A multi-vendor hardware ecommerce and management system built with Laravel, designed to connect multiple hardware stores in **Victorias City, Negros Occidental**, allowing them to manage products online while enabling customers to browse, compare, and review hardware items across different shops.

---

## Project Overview

This system serves as a **local hardware marketplace platform** where:

- Multiple hardware store owners can register and manage their own products
- Customers can browse products from different shops in one platform
- Users can compare prices, availability, and specifications
- Customers can rate and review products to improve transparency

The platform supports digital transformation of local hardware businesses while improving customer access and decision-making.

---

## Features

### Multi-Vendor System
- Multiple hardware shops can register and manage their own inventories
- Shop-specific product management dashboard

### Role-Based System
- **Admin** – Full system control (users, roles, permissions)
- **Shop Owner** – Manages shop profile and products
- **Customer** – Browses, compares, rates, and reviews products

### Product Discovery & Comparison
- Browse products across multiple hardware stores
- Compare prices and availability
- Filter by category, shop, or price

### Ratings & Reviews
- Customers can rate products
- Write reviews based on experience
- Improve trust and product quality transparency

### Authentication
- Laravel Breeze authentication
- Email verification support
## Requirements

- PHP >= 8.1
- Composer
- Node.js & NPM (for frontend assets)
- MySQL / PostgreSQL / SQLite
- Laravel 11.x

## Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/hardware-marketplace.git
cd hardware-marketplace
2. Install PHP Dependencies
bash
composer install
3. Install NPM Dependencies
bash
npm install
4. Environment Configuration
Copy the example environment file and update the configuration:

bash
cp .env.example .env
Update the following variables in your .env file:

env
# Database Configuration
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=hardware_marketplace
DB_USERNAME=root
DB_PASSWORD=your_password

# Application URL
APP_URL=http://localhost:8000
5. Generate Application Key
bash
php artisan key:generate
6. Run Database Migrations
bash
php artisan migrate
7. Seed Database with Roles and Permissions
bash
php artisan db:seed --class=RolePermissionSeeder
This will create:

All necessary permissions

Admin, Shop Owner, and customer roles

Demo users for testing

8. Compile Frontend Assets
For development:

bash
npm run dev
For production:

bash
npm run build
9. Start the Development Server
bash
php artisan serve
Your application will be available at: http://localhost:8000

Test Accounts
After running the seeder, you can log in with the following demo accounts:

Administrator
Credential	Value
Email	jamir@gmail.com
Password	password
Role	Admin
Permissions	Full system access (User, Role, Permission CRUD)
Shop Owner
Credential	Value
Email	benedict@gmail.com
Password	password
Role	Shop Owner
Permissions	View users, Create users (No edit/delete), Shop management
customers
Name	Email	Password	Role	Permissions
Maryan customer	maryan@gmail.com	password	customer	Limited shop operations (No user management)
Bargo customer	bargo@gmail.com	password	customer	Limited shop operations (No user management)
Bilbar customer	bilbar@gmail.com	password	customer	Limited shop operations (No user management)
Role-Based Access Matrix
Feature	Admin	Shop Owner	customer
Dashboard Access	Yes	Yes	Yes
User Management			
- View Users	Yes	Yes	No
- Create Users	Yes	Yes	No
- Edit Users	Yes	No	No
- Delete Users	Yes	No	No
Role Management	Yes	No	No
Permission Management	Yes	No	No
Shop Management	Yes	Yes	Limited
System Configuration	Yes	No	No
Project Structure
text
computer-shop-management/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   │   ├── PermissionController.php
│   │   │   │   └── RoleController.php
│   │   │   ├── UserController.php
│   │   │   ├── AdminDashboardController.php
│   │   │   ├── OwnerDashboardController.php
│   │   │   └── customerDashboardController.php
│   │   └── Middleware/
│   │       ├── AdminMiddleware.php
│   │       ├── OwnerMiddleware.php
│   │       └── customerMiddleware.php
│   └── Models/
│       └── User.php (with HasRoles trait)
├── database/
│   └── seeders/
│       └── RolePermissionSeeder.php
├── routes/
│   └── web.php
└── resources/
    └── views/
        ├── dashboards/
        │   ├── admin.blade.php
        │   ├── owner.blade.php
        │   └── customer.blade.php
        └── users/
            ├── index.blade.php
            ├── create.blade.php
            ├── edit.blade.php
            └── show.blade.php
Available Commands
Database Operations
bash
# Fresh migration with seeder
php artisan migrate:fresh --seed

# Run only the RolePermissionSeeder
php artisan db:seed --class=RolePermissionSeeder

# Clear all cached data
php artisan optimize:clear
Development Commands
bash
# Run tests
php artisan test

# Create a new user manually (in tinker)
php artisan tinker
>>> $user = User::create(['name'=>'New User', 'email'=>'user@example.com', 'password'=>Hash::make('password')]);
>>> $user->assignRole('customer');
API Routes
Method	URI	Action	Middleware
GET	/admin/dashboard	Admin Dashboard	auth, admin
GET	/owner/dashboard	Owner Dashboard	auth, owner
GET	/customer/dashboard	customer Dashboard	auth, customer
GET	/users	User List	auth, permission:view users
POST	/users	Create User	auth, permission:create users
PUT	/users/{user}	Update User	auth, permission:edit users
DELETE	/users/{user}	Delete User	auth, permission:delete users
Frontend Assets
CSS Framework
Tailwind CSS v3.x - Utility-first CSS framework

Preline UI - Component library

JavaScript
Alpine.js - Lightweight JavaScript framework

Livewire (optional) - For dynamic interfaces

Security Features
Role-Based Access Control (RBAC) using Spatie Permission

Custom Middleware for each role

CSRF Protection on all forms

XSS Prevention with Blade escaping

SQL Injection Protection via Eloquent ORM

Password Hashing using Bcrypt

Responsive Breakpoints
Breakpoint	Width	Target Devices
xs	475px	Small phones
sm	640px	Large phones
md	768px	Tablets
lg	1024px	Desktops
xl	1280px	Large desktops
2xl	1536px	HD displays
Troubleshooting
Common Issues & Solutions
Issue: Target class [role] does not exist

Solution: Add middleware aliases to bootstrap/app.php

Issue: 403 Unauthorized when accessing routes

Solution: Check if user has the correct role/permission assigned
Run: php artisan db:seed --class=RolePermissionSeeder

Issue: Login redirects to wrong dashboard

Solution: Check the authenticated method in AuthenticatedSessionController
Verify role names match exactly: 'admin', 'shop-owner', 'customer'

Issue: Seeder fails to run

Solution: Clear cache first
php artisan cache:clear
php artisan config:clear
composer dump-autoload

Dependencies
PHP Packages
laravel/breeze - Authentication scaffolding

spatie/laravel-permission - Role-based permissions

laravel/sanctum - API authentication (if needed)

NPM Packages
tailwindcss - CSS framework

@tailwindcss/forms - Form styling

@tailwindcss/typography - Prose styling

preline - UI component library

alpinejs - JavaScript interactions
