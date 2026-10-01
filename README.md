# POS System - IT0049 TFA2

A simple Point of Sale web application created using CodeIgniter 4 and MySQL.

## Requirements

- PHP 8.2 or later
- Composer
- MySQL
- CodeIgniter 4
- XAMPP

## Setup

1. Clone or download this repository.
2. Start Apache and MySQL in XAMPP.
3. Create a MySQL database named `pos_db`.
4. Import `database/pos_db.sql` using phpMyAdmin.
5. Copy the `env` file and rename the copy to `.env`.
6. Configure the database settings in `.env`:

    database.default.hostname = localhost
    database.default.database = pos_db
    database.default.username = root
    database.default.password =
    database.default.DBDriver = MySQLi
    database.default.port = 3306

7. Open a terminal in the project directory and run:

    php spark serve

8. Open `http://localhost:8080` in a browser.

## Pages

- Home
- About
- Customer Accounts
- User Accounts

## Database

The database contains the following tables:

- `customers`
- `users`

The SQL database export is located at:

`database/pos_db.sql`