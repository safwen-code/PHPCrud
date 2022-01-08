<?php
include('pdo.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>

<body>
    <?php
    if (isset($_SESSION['error'])) {
        echo ("<p>" . $_SESSION['error'] . "</p>");
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo ("<p>" . $_SESSION['success'] . "</p>");
        unset($_SESSION['success']);
    }

    ?>
    <?php
    echo ('<table border="1">' . "\n");
    $stmt = $pdo->query("SELECT name, email, password, user_id from users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo ("<tr><td>");
        echo (htmlentities($row['name']));
        echo ("</td><td>");
        echo (htmlentities(($row['email'])));
        echo ("</td><td>");
        echo (htmlentities($row['password']));
        echo ("</td><td>");
        echo ('<a href="edit.php?user_id=' . $row['user_id'] . '">Edite</a> /');
        echo ('<a href="delete.php?user_id=' . $row['user_id'] . '">delete</a>');
        echo ("</td></tr> \n");
    }
    echo ("</table>");
    ?>
    <a href="add.php">add user</a>
</body>

</html>