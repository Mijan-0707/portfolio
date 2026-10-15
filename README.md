# Mijanur Rahman — Developer Portfolio

A modern, minimalist developer portfolio web application built with **Django 6** and **Tailwind CSS**, tailored for a **Mobile & Flutter Application Engineer**.

Live Website: **[https://mijan-0707.github.io/portfolio/](https://mijan-0707.github.io/portfolio/)**  
Live Repository: [https://github.com/Mijan-0707/portfolio](https://github.com/Mijan-0707/portfolio)

---

## ✨ Features

- **Minimalist & Clean Dark Aesthetics**: Responsive layout styled with Tailwind CSS, typography using *Instrument Sans* & *JetBrains Mono*.
- **Focused Tech Stack**: Deep highlights on Flutter, Dart, Android SDK, iOS interop, reactive state management (Bloc, Riverpod, Provider), Clean Architecture, and backend services.
- **Projects Showcase**: Highlights 6 flagship mobile applications with key performance metrics, architecture stack, and GitHub links.
- **Interactive Contact Form**: Backed by Django ModelForm validation (`ContactForm`), model persistence (`ContactMessage`), and message framework feedback.
- **Django Admin**: Easily view and manage contact submissions at `/admin/`.
- **Automated Tests**: Unit and integration test suite (`core/tests.py`) verifying page render, form submission, and validation.

---

## 🚀 Getting Started

### Requirements
- **Python 3.10+** (Python 3.14 tested)

### Installation

1. **Clone the repository:**
   ```bash
   git clone git@github.com:Mijan-0707/portfolio.git
   cd portfolio
   ```

2. **Create and activate a virtual environment:**
   ```bash
   python3 -m venv venv
   source venv/bin/activate  # On Windows: venv\Scripts\activate
   ```

3. **Install dependencies:**
   ```bash
   pip install -r requirements.txt
   ```

4. **Run Migrations:**
   ```bash
   python manage.py migrate
   ```

5. **(Optional) Create Superuser for Admin:**
   ```bash
   python manage.py createsuperuser
   ```

6. **Start the Development Server:**
   ```bash
   python manage.py runserver
   ```
   Open [http://127.0.0.1:8000](http://127.0.0.1:8000) in your browser.

---

## 🧪 Running Tests

```bash
python manage.py test
```
