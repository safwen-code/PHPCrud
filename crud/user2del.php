<?php
include('pdo.php');
$sql = "DELETE FROM users WHERE user_id = :id";
$stmt = $pdo->prepare($sql);
$stmt->execute(array(
    ':id' => $_POST['user_id']
));
?>
<p>delete user</p>
<form method="post">
    <input type="text" name="user_id" />
    <input type="submit" value="delete" />
</form>