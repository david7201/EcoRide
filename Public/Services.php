<?php session_start(); 
?>
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
  <h1>Service Page</h1>
  <ul>
    <li>
      <a href="CancelBooking.php"><strong>Cancel a reservation</strong></a>
    </li>
    <li>
      <a href="breakdown.php"><strong>Contact us for breakdown</strong></span> </a>
    </li>
  </ul>
  <?php if (isset($_SESSION['Username'])) : ?>
        <form action="logout.php" name="Logout_Form" class="form-signin">
            <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
        </form>
    <?php endif; ?>
</div>

<?php include "footer.php"; ?>
