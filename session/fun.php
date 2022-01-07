<?php
session_start();
if (!isset($_SESSION['pizza'])) {
    echo ("<p>no session</p>\n");
    $_SESSION['pizza'] = 0;
} else if ($_SESSION['pizza'] < 3) {
    echo ("<p>add more</p>\n");
    $_SESSION['pizza'] = $_SESSION['pizza'] + 1;
} else {
    session_destroy();
    session_start();
    echo ("<p>session restore</p>\n");
}

?>

<p> <a href="fun.php"> click me</a></p>
<p>our session : <?php echo (session_id()); ?></p>
<pre>
    <?php
    print_r($_SESSION);
    ?>
</pre>