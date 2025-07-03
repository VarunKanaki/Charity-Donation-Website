
# Charity Donation Web Application

A PHP-based web application that allows users to donate for various causes and lets administrators track donations, generate reports, and manage charity-related data.

---

## 🔧 Tech Stack

- **Frontend**: HTML, CSS, Bootstrap 5
- **Backend**: PHP (OOP using `Charity` class)
- **Database**: MySQL
- **Other Libraries**: Font Awesome

---

## 🏗️ Project Structure

```
charitydonation/
├── admin/              # Admin dashboard, reports, analytics
├── css/                # Stylesheets (Bootstrap and custom)
├── js/                 # JavaScript files
├── images/             # Static image resources
├── lib/                # Business logic (functions_pro.php with Charity class)
├── profile_photos/     # Uploaded profile photos (user-generated content)
├── scss/               # SASS styles (optional)
├── donation_form.php   # Donation entry point for users
├── donatecat.php       # View available donation categories
├── contact_us.php      # Contact form page
├── index.php           # Landing/home page
├── charity_donation.sql # MySQL database dump (used for setup)
```

---

## 📦 Setup Instructions

### 1. Clone or Download the Repository

```bash
git clone https://github.com/yourusername/charitydonation.git
cd charitydonation
```

### 2. Import the Database

- Open **phpMyAdmin**
- Create a new database: `charity_donation`
- Import `charity_donation.sql`

### 3. Configure Database Connection

In `lib/functions_pro.php`, ensure database credentials are correct (example below):

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "charity_donation";
```

### 4. Run the Application

Use [XAMPP](https://www.apachefriends.org/index.html) or [WAMP](http://www.wampserver.com/en/) and place the folder inside `htdocs`.

Then, visit:

```
http://localhost/charitydonation/
```

---

## ✨ Features

- 📝 Donation Form: Users can fill out a form and donate to selected categories.
- 🧾 Admin Dashboard: View, filter, and download donation records.
- 📊 Reports: Excel report export for donations and fund details.
- 📫 Contact Page: With Google Maps and enquiry form.
- 🔒 Clean separation of user/admin roles (suggested upgrade).

---

## 🚫 Files Ignored by Git

- `profile_photos/` (user uploads)
- `*.sql` files
- `*.zip` and other backup data
- IDE configs (`.vscode/`, `.idea/`)
- `.env`, `.log`, `.tmp`

> All exclusions are listed in the `.gitignore`

---

## 📬 Contact

- 📧 Email: [charitycircle09@gmail.com](mailto:charitycircle09@gmail.com)
- 📍 Address: Government Polytechnic, Akkalkot Road, Solapur, Maharashtra

---

## 📌 License

This project is for academic and learning purposes. Feel free to modify or extend.

> Built with ❤️ by students to make a difference through code.
