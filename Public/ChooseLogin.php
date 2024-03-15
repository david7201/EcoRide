
<?php require "header.php"; ?>
<style>
  body {
    font-family: 'Open Sans', sans-serif;
    background-color: #E6EDEA;
    margin: 0;
    padding: 0;
    line-height: 1.6;
  }
  .container {
    width: 80%;
    margin: auto;
    padding-top: 50px;
    text-align: center;
  }
  h1 {
    color: #3B5249;
    margin-bottom: 20px;
  }
  ul {
    list-style-type: none;
    padding: 0;
  }
  ul li {
    background-color: #C5E4CB;
    margin-bottom: 10px;
    padding: 20px;
    border-radius: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  ul li a {
    text-decoration: none;
    color: #2F3E34;
    font-weight: bold;
    margin-right: 10px; /* Spacing between the link and the text */
  }
  ul li span {
    color: #2F3E34;
  }
</style>

<div class="container">
  <h1>Choose Login</h1>
  <ul>
    <li>
      <a href="UserLogin.php"><strong>Login as User</strong></a>
    </li>
    <li>
      <a href="UserSignup.php"><strong>Signup as User</strong></span> </a>
    </li>
    <li>
      <a href="EmployeeLogin.php"><strong>Login as Employee</strong></a>
    </li>
    <li>
      <a href="AdminLogin.php"><strong>Login as Admin</strong></a>
    </li>
  </ul>
</div>

<?php include "footer.php"; ?>
