<?php

require_once "sessionactive.php";
require_once "header.php";
require_once 'DBconnect.php';

if (isset($_SESSION['Username'])) {
    $username = $_SESSION['Username'];
    $welcome_message = "Welcome, $username";

} else {
    $welcome_message = null;
}



?>


<body>
<header class="hero">
    <div class="hero-text">
        <h1>Welcome to Ecoride Plus <?php echo isset($_SESSION['Username']) ? $_SESSION['Username'] : ''; ?></h1>
        <p>Eco-friendly transport and motion services. We offer the best in class services for you and the environment.</p>
    </div>
    <?php if (isset($_SESSION['Username'])) : ?>
        <form action="logout.php" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    <?php endif; ?>
</header>

<div class="main-content">
    <aside class="sidebar">
        <h3>About Us</h3>
        <p>Learn more about our mission and services.</p>
    </aside>
    <section class="main-section">
        <h2>Our Services</h2>
        <p>Explore the various eco-friendly services we provide.</p>
    </section>
</div>

</body>
</html>
