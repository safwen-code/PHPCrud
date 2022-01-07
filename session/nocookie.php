<?php
ini_set('session.use_cookies', '0');
ini_set('session.use_only_cookies', 0);
ini_set('session.use_trans_sid', 1);

session_start();

// Start the view
?>



<?php
session_start();
if (!isset($_SESSION['value'])) {
    echo ("no session\n");
    $_SESSION['value'] = 0;
} else if ($_SESSION['value'] < 3) {
    $_SESSION['value'] = $_SESSION['value'] + 1;
    echo ("<p>add session value =</p>" . $_SESSION['value'] . "\n");
} else {
    session_destroy();
    session_start();
    echo ("<p>session retore </p>\n");
}


?>


<p>
    <a href="nocookie.php">click me </a>
</p>
<form action="" method="">
    <input type="submit" name="click" value="click submit btn" />
</form>
<p>session id : <?= session_id() ?></p>
<pre>
    <?php print_r($_SESSION) ?>
</pre>