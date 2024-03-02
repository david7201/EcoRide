<?php
/**
 * Function to query information based on
 * a parameter: in this case, id.
 *
 */
if (isset($_POST['submit'])) {
    try {
        require "../common.php";
        require_once '../src/DBconnect.php';
        // Adjusted to select from employee table based on id
        $sql = "SELECT * FROM employee WHERE id = :id";
        $id = $_POST['id']; // Changed to capture 'id' from the form
        $statement = $connection->prepare($sql);
        $statement->bindParam(':id', $id, PDO::PARAM_INT); // Binding id as an integer
        $statement->execute();
        $result = $statement->fetchAll();
    } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
}
require "header.php";
if (isset($_POST['submit'])) {
    if ($result && $statement->rowCount() > 0) {
        ?>
        <h2>Results</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email Address</th>
                    <th>Age</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) { ?>
                <tr>
                    <td><?php echo escape($row["id"]); ?></td>
                    <td><?php echo escape($row["firstname"]); ?></td>
                    <td><?php echo escape($row["lastname"]); ?></td>
                    <td><?php echo escape($row["email"]); ?></td>
                    <td><?php echo escape($row["age"]); ?></td>
                    <td><?php echo escape($row["location"]); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php 
    } else { ?>
        <p>No results found for ID <?php echo escape($_POST['id']); ?>.</p>
        <?php
    }
}
?>
<h2>Find Employee based on ID</h2>
<form method="post">
    <label for="id">Employee ID</label>
    <input type="text" id="id" name="id"> <!-- Adjusted for 'id' -->
    <input type="submit" name="submit" value="View Results">
</form>
<a href="index.php">Back to home</a>
<?php require "footer.php"; ?>
