<?php
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Admin.php'); 
require ('header.php');

session_start();

if(isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $admin = new Admin($connection);

    $admin->setUsername($username);
    $admin->setPassword($password);

    var_dump($admin->getUsername(), $admin->getPassword());

    $authenticatedAdmin = $admin->authenticate();

    $stmt = $connection->prepare("SELECT * FROM administrator WHERE username = ?");
    $stmt->execute([$admin->getUsername()]);
    $authenticatedAdmin = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($authenticatedAdmin) {
        $_SESSION['AdminID'] = $authenticatedAdmin['AdminID'];
        $_SESSION['Username'] = $authenticatedAdmin['Username'];
        $_SESSION['Active'] = true;

        header("location:AdminPage.php");
        exit;
    } else {
        $error = "Incorrect Username or Password";
    }
}
?>
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>Sign in</title>
</head>
<style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 100%;
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
}

.error {
    color: #ff0000;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: bold;
}

input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"] {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #007bff;
    color: #fff;
    font-size: 16px;
    cursor: pointer;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

    </style>
<body>
<div class="container">
    <form action="" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername">Username</label>
        <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>
</div>
</body>
</html>