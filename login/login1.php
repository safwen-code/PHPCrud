<?php
include('pdo.php');
if (isset($_POST['emai']) && isset($_POST['password'])) {
    $sql = "SELECT name FROM users WHERE email =:em AND password =:pw";
    $stmt = $pdo->query($sql);
    $stmt->execute(array(
        ':em' => $_POST['email'],
        ':pw' => $_POST['password']
    ));
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
<form method="POST">
    <h1>Please login</h1>
    <label>email</label>
    <input type="text" value="" name="email" />
    <label>password</label>
    <input type="text" value="" name="password" />
    <input type="submit" />
</form>