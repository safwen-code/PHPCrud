<?php
session_start();
if (isset($_POST['guesse'])) {
    $guesse = $_POST['guesse'] + 0;
    $_SESSION['guesse'] = $guesse;
    if ($guesse == 42) {
        $_SESSION['message']  = "greate job";
    } elseif ($guesse < 42) {
        $_SESSION['message'] = "tow low";
    } else {
        $_SESSION['message']  = "tow high";
    }
    header("location : guess.php");
    return;
}
?>

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
    $guesse = isset($_SESSION['guesse']) ? $_SESSION['guesse'] : '';
    $message = isset($_SESSION['message']) ? $_SESSION['message'] : false;
    ?>
    <p>Guesse what ....</p>
    <?php
    if ($message != false) {
        echo ("<p>$message</p>");
    }

    ?>
</body>
<form method="POST">
    <p>label</p>
    <input type="text" name="guesse" value="<?= htmlentities($guesse) ?>" />
    <input type="submit" />
</form>

</html>