<?php
require('pdo.php');
session_start();
if (
    isset($_POST['name']) && isset($_POST['email'])
    && isset($_POST['password']) && isset($_POST['user_id'])
) {
    $sql = "UPDATE users SET name = :name,
             email = :email, password = :password 
             WHERE user_id = :user_id
             ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name' => $_POST['name'],
        ':email' => $_POST['email'],
        ':password' => $_POST['password'],
        ':user_id' => $_POST['user_id']
    ));
    $_SESSION['success'] = "user updated";
    header('Location: index.php');
    return;
}
$stmt = $pdo->prepare(("SELECT * FROM users WHERE user_id = :id"));
$stmt->execute(array(
    ':id' => $_GET['user_id']
));
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if ($row === false) {
    $_SESSION['error'] = 'BAD value for user_id';
    header('Location: index.php');
    return;
}
$name = htmlentities($row['name']);
$email = htmlentities($row['email']);
$password = htmlentities($row['password']);
$user_id = htmlentities($row['user_id']);
?>

<p>Edite User</p>
<form method="POST">
    <p>name : <input type="text" name="name" value="<?= $name ?>" /></p>
    <p>email : <input type="text" name="email" value="<?= $email ?>" /></p>
    <p>password : <input type="text" name="password" value="<?= $password ?>" /></p>
    <input type="hidden" name="user_id" value="<?= $user_id ?>" />
    <p> <input type="submit" value="update" /></p>
    <a href="indexx.php">Cancel</a>
</form>