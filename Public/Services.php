<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecoride Plus - Services</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --main-bg-color: #E6EDEA;
            --navbar-bg-color: #C5E4CB;
            --primary-text-color: #3B5249;
            --secondary-text-color: #2F3E34;
            --accent-color: #A9C9A4;
            --navbar-text-color: #3B5249;
            --button-bg-color: #A9C9A4;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Open Sans', sans-serif;
            background-color: var(--main-bg-color);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .navbar {
            background-color: var(--navbar-bg-color);
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--navbar-text-color);
        }

        .navbar ul {
            list-style: none;
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar ul li {
            padding: 0 15px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: var(--navbar-text-color);
            font-weight: 600;
        }

        .login-register-btn {
            background-color: var(--button-bg-color);
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            color: white;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .login-register-btn:hover {
            background-color: darken(var(--button-bg-color), 10%);
        }

        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .hero-text {
            max-width: 800px;
            text-align: center;
            color: var(--primary-text-color);
        }

        .hero-text h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .main-content {
            display: grid;
            grid-template-columns: 1fr 3fr;
            gap: 20px;
            padding: 20px;
        }

        .sidebar {
            background-color: var(--navbar-bg-color);
            padding: 20px;
            color: var(--secondary-text-color);
        }

        .main-section {
            background-color: white;
            padding: 20px;
            color: var(--primary-text-color);
        }

        footer {
            background-color: var(--navbar-bg-color);
            color: var(--secondary-text-color);
            text-align: center;
            padding: 10px 0;
        }

        /* Reservation form styles */
        .reservation-form {
            background-color: white;
            padding: 20px;
            margin-top: 20px;
        }

        .reservation-form label {
            display: block;
            margin-bottom: 10px;
            color: var(--primary-text-color);
        }

        .reservation-form input[type="text"],
        .reservation-form input[type="email"],
        .reservation-form input[type="date"],
        .reservation-form textarea,
        .reservation-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        .reservation-form textarea {
            height: 100px;
        }

        .reservation-form input[type="submit"] {
            background-color: var(--button-bg-color);
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .reservation-form input[type="submit"]:hover {
            background-color: #8DAE8A; /* Green shade */
        }

        /* Reservation button styles */
        .reservation-button {
            text-align: center;
            margin-top: 50px;
        }

        .reservation-button a {
            display: inline-block;
            background-color: var(--button-bg-color);
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .reservation-button a:hover {
            background-color: #8DAE8A; /* Green shade */
        }
    </style>
</head>
<body>
<nav class="navbar">
    <div class="navbar-logo">Ecoride Plus</div>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="rentals.php">Rentals</a></li>
        <li><a href="adminpage.php">Admin</a></li>
    </ul>
    <button class="login-register-btn">Login / Register</button>
</nav>

<header class="hero">
    <div class="hero-text">
        <h1>Welcome to Ecoride Plus</h1>
        <p>Eco-friendly transport and motion services. We offer the best in class services for you and the environment.</p>
    </div>
</header>

<div class="main-content">
    <aside class="sidebar">
        <h3>About Us</h3>
        <p>Learn more about our mission and services.</p>
    </aside>
    <section class="main-section">
        <h2>Our Services</h2>
        <p>Explore the various eco-friendly services we provide.</p>
        <ul>
            <li>Eco-friendly car rentals</li>
            <li>Green energy vehicle charging stations</li>
        </ul>
    </section>
</div>

<div class="reservation-button">
    <a href="addReservation.php">Make a Reservation</a>
</div>

<footer>
    <p>&copy; 2024 Ecoride Plus. All rights reserved.</p>
</footer>
</body>
</html>
