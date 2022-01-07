<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_SESSION['success'])) {
        echo ("<p>" . $_SESSION['success'] . "</p>\n");
    }
    //check for the loger
    if (!isset($_SESSION["account"])) { ?>
        <p>please <a href="login.php">log In</a></p>
    <?php } else { ?>
        <p>please <a href="logout.php"></a></p>
    <?php } ?>
</body>

</html>