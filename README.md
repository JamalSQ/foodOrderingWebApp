## Food Ordering Web App

This is a food restaurant website built with PHP and HTML. It allows users to browse menus, add items to their cart, view their cart details, and place orders.

## Features

* **Menu Browsing:** Users can browse through different food categories.
* **Add to Cart:** Users can add items from the menu to their cart.
* **Cart View:** Clicking a button in the upper right corner displays the cart contents, including the quantity of each item and the total bill amount.
* **Order Placement:** Users can place orders by providing their name and table number. Payment is currently handled offline.
* **QR Code Ordering:** Users can scan a QR code on their table to access the menu and place their orders directly.
* **Admin Panel (Work in Progress):** An admin panel (under development) will allow admins to view all placed orders, update their status (pending or completed), and see detailed information about each order (user details, order items, quantity, amount). The admin can also view all menus.

## Technologies Used

* Frontend: HTML, CSS (likely based on HTML Codex design)
* Backend: PHP
* Database: MySQL (database named "foodresturant")

## Installation

This project requires a local server environment like XAMPP to run. Here are the setup steps:

**1. Install XAMPP Server:**

Follow the official XAMPP download and installation instructions for your operating system.

**2. Create Database:**

- Open the phpMyAdmin tool included with XAMPP (usually accessible at http://localhost/phpmyadmin).
- Create a new database named "foodresturant".

**3. Import SQL File:**

- Make sure you have the provided SQL file containing the website's database structure and data.
- In phpMyAdmin, select the "foodresturant" database.
- Click the "Import" tab and choose the SQL file.
- Click "Go" to import the data.

**4. Place Project Files:**

- Extract the website's project files.
- Copy the extracted files to the XAMPP document root directory. This is typically located at `C:\xampp\htdocs`.

**5. Run the Website:**

- Open your web browser and navigate to: http://localhost/foodOrderingWebApp


## License

(Anyone is free to use this project however they see fit.)

## Author

* JAMAL SIDDIQUE QADRI
