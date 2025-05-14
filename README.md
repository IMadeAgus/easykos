# 🏠 EasyKos Web App

*EasyKos* is a fullstack web application for finding and booking boarding houses (kos) online, with search functionality by city, kos details, and a login-free booking system. Admins can manage data through a dashboard.

## 🔗 Links

- 🔴 **Live Demo** – *Coming Soon*

## 📌 Project Overview

- **Project Type**: Personal Project / Portfolio
- **Structure**: Fullstack – Laravel application
- **Development Period**: October 2024
- **Role**: Fullstack Web Developer

## 🛠️ Technologies Used

### Frontend
- **Laravel Blade** 
- **Tailwind CSS** – Responsive and modern styling

### Backend
- **Laravel 11**
- **FilamentPHP** – Admin panel
- **Laravel Sanctum** – Admin authentication
- **MySQL** – Relational database

## 📦 Folder Structure

```bash
📂 kos-finder-project
└── 📁 app      # Laravel + Filament + API + Blade Views
```

## ✨ Application Features
For Users
- 🔍 List of all available boarding houses (kos)
- 🏙️ Filter kos by city
- 🧾 Kos details (facilities, price, capacity)
- 📱 Book offices without login – only with phone number
- 💸 Payment through mitrans, ##not yet implemented

For Admins
- 🔐 Login through Filament Admin
- 📋 CRUD operations for kos and cities
- 🧰 Booking Management

## Challenges - Solutions - Impact

Challenges

- Data Validation: Ensuring booking data is valid before entering the database
- UI Responsiveness: Building interfaces that function optimally across various devices
- Safe payment method: Building safe payment method for user

Solutions

- Use of TypeScript interfaces aligned with Laravel API Resources
- Layered validation with Request Validation in backend
- Leveraging Tailwind CSS with a mobile-first design approach
- Implementation mitrans for payment method (not yet implemented)

Impact

- A user-friendly kos search platform with simplified booking process
- Reduced development time while maintaining robust data management
- Improved administrative workflow efficiency
- Optimized application performance for large datasets
- Consistent experience across desktop and mobile devices

📘 Lessons Learned

From this project, I gained valuable experience in fullstack development combining React and Laravel:

- Improved understanding of TypeScript and React for frontend development
- Learned efficient admin panel creation with FilamentPHP
- Enhanced skills in responsive design with Tailwind CSS

⚙️ Installation Guide
1️⃣ Backend (Laravel + Filament)

```bash
git clone https://github.com/IMadeAgus/easykos.git
cd kos-finder-project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate 
php artisan serve
```
Ensure .env is properly configured for database connection.

## Create a admin account
You can create a new admin account with the following command:
```bash
php artisan make:filament-user
```

## 📲 Application Usage

1. Open the main page and view the list of boarding houses
2. Filter by city
3. Click on an kos  to view details
4. Book by entering name, phone number, and booking date
5. make the payment using mitrans (not yet implemented)

## 🔒 Admin Login

1. Visit: /admin/login
2. Enter admin email and password
3. Easily manage kos data, cities, bookings through the Filament Admin Panel

✉️ Contact
For questions or collaborations, please contact me via email or through the contact page of this project.

Thank you for using EasyKos! 🚀
