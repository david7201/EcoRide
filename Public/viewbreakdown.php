<?php
require_once 'breakdown.php';
require_once '../config.php';
require_once '../src/DBconnect.php';
require_once 'header.php';

try {
    $sql = "SELECT * FROM breakdowntowing";
    $statement = $connection->prepare($sql);
    $statement->execute();

    $breakdowns = [];
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $breakdown = new Breakdown($connection);
        $breakdown->setName($row["name"]);
        $breakdown->setEmail($row["email"]);
        $breakdown->setMessage($row["message"]);
        $breakdowns[] = $breakdown;
    }
} catch(PDOException $error) {
    echo $sql . "<br>" . $error->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Breakdowns</title>
    <style>
        .container {
            max-width: 50%;
            margin: auto;
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 10px;
        }

        .breakdown {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            text-align: center;
        }

        .breakdown h3 {
            margin-bottom: 5px;
            font-size: 14px;
        }

        .breakdown p {
            margin-bottom: 5px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<?php
if ($breakdowns && count($breakdowns) > 0) {
    ?>
    <h2>All Breakdowns</h2>
    <div class="container">
        <?php foreach ($breakdowns as $breakdown) { ?>
            <div class="breakdown">
                <h3>Name: <?php echo $breakdown->getName(); ?></h3>
                <p>Email: <?php echo $breakdown->getEmail(); ?></p>
                <p>Message: <?php echo $breakdown->getMessage(); ?></p>
            </div>
        <?php } ?>
    </div>
<?php 
} else { ?>
    <p>No breakdowns found.</p>
<?php
}

require "footer.php";
?>

</body>
</html>
