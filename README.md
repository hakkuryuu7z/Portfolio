# Dinamis Personal Web Portfolio

A modern, dynamic, and fully responsive personal portfolio website built with Laravel 11, Filament PHP (V3), and Bootstrap 5. 

## 🚀 Features

- **Dynamic Content**: Manage your profile, skills, projects, and incoming messages directly from a secure admin panel.
- **Modern UI/UX**: Dark mode aesthetic with cyan-green accents, glassmorphism, and micro-animations for a premium feel.
- **Project Showcase**: Display featured projects with thumbnail images, descriptions, and direct links to live demos or source code.
- **Admin Panel**: Built with Filament PHP, offering a clean, powerful, and easy-to-use CMS dashboard.
- **Contact Form**: Built-in messaging system where public visitors can reach out to you seamlessly.
- **Responsive Design**: Looks great on all devices (mobile, tablet, desktop) powered by Bootstrap 5.

## 🛠️ Tech Stack

- **Backend**: Laravel 11, PHP 8.2+
- **Admin Panel**: Filament PHP (V3)
- **Frontend**: Blade Templating, HTML5, CSS3, JavaScript, Bootstrap 5
- **Database**: SQLite (Local Dev) / PostgreSQL (Production)

## 📋 Prerequisites

Before setting up the project, make sure you have the following installed on your machine:
- [PHP](https://www.php.net/) >= 8.2 (with `intl` extension enabled)
- [Composer](https://getcomposer.org/)
- [Node.js & NPM](https://nodejs.org/) (Optional, for frontend assets if needed)
- A Web Server (Apache/Nginx/Laravel Herd/Valet)

## ⚙️ Local Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/hakkuryuu7z/Portfolio
   cd portfolio
   ```

2. **Install Composer dependencies**
   ```bash
   composer install
   ```

3. **Environment Setup**
   Copy the example environment file and generate a new app key:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   *Note: By default, local development uses SQLite. If you want to use PostgreSQL, update the `DB_CONNECTION` and related variables in the `.env` file.*

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Create Storage Symlink**
   This is required to display images uploaded via the Admin Panel to the public frontend.
   ```bash
   php artisan storage:link
   ```

6. **Create an Admin User**
   Create a new user to access the Filament admin dashboard:
   ```bash
   php artisan make:filament-user
   ```
   *(Or use the default seeded user if applicable: admin@example.com / password)*

7. **Run the Application**
   ```bash
   php artisan serve
   ```
   - **Frontend**: Visit `http://localhost:8000`
   - **Admin Panel**: Visit `http://localhost:8000/admin`

## 🎨 Screenshots
*(Add screenshots of your frontend and admin dashboard here)*

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).
