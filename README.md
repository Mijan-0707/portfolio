# Mijanur Rahman — Developer Portfolio

A modern, minimalist portfolio web application built with **Laravel 12** and **Tailwind CSS**, tailored for a **Mobile & Flutter Application Engineer**.

Live Repository: [https://github.com/Mijan-0707/portfolio](https://github.com/Mijan-0707/portfolio)

---

## ✨ Features

- **Minimalist & Clean Dark Aesthetics**: Responsive layout styled with Tailwind CSS, typography using *Instrument Sans* & *JetBrains Mono*.
- **Focused Tech Stack**: Deep highlights on Flutter, Dart, Android SDK, iOS interop, reactive state management (Bloc, Riverpod, Provider), Clean Architecture, and backend services.
- **Projects Showcase**: Highlights 6 flagship mobile applications with key performance metrics, architecture stack, and GitHub links.
- **Interactive Contact Form**: Backed by Laravel Form Request validation (`ContactRequest`), model persistence (`ContactMessage`), and flash feedback.
- **Quality & Automated Tests**: Comprehensive feature tests (`tests/Feature/PortfolioTest.php`) verifying page render, form submission, and validation.

---

## 🚀 Getting Started

### Requirements
- **PHP 8.2+** (PHP 8.5 tested)
- **Composer 2.x**
- **Node.js 18+** & **npm**

### Installation

1. **Clone the repository:**
   ```bash
   git clone git@github.com:Mijan-0707/portfolio.git
   cd portfolio
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

5. **Build Frontend Assets:**
   ```bash
   npm run build
   ```

6. **Start the Development Server:**
   ```bash
   php artisan serve
   ```
   Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🧪 Running Tests

```bash
php artisan test
```

Code formatting with Laravel Pint:
```bash
vendor/bin/pint --format agent
```
