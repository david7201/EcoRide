<?php
require_once('../config.php');
require_once('../src/DBconnect.php');
require_once('Customer.php'); 
require ('header.php');

if (isset($_POST['Submit'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $customer = new Customer($connection);

    $customer->setUsername($username);

    $authenticatedUser = $customer->authenticate();

    if ($authenticatedUser) {
        session_start();
        $_SESSION['UserID'] = $authenticatedUser['UserID'];
        $_SESSION['Username'] = $authenticatedUser['username'];
        $_SESSION['Active'] = true;

        header("location:index.php");
        exit();
    } else {
        $error = "Authentication failed after registration. Please try logging in manually.";
    }
} else {
    $error = "Please try logging in again"; 
}
?>



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
</head>
<body>
    <div class="container">
        <form action="" method="post" name="Login_Form" class="form-signin">
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
