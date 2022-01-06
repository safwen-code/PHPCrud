<?php 
include("pdo.php");
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']))
{
    $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        ':name'=> $_POST['name'],
        ':email'=> $_POST['email'],
        ':password'=> $_POST['password'],
    ));
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user1</title>
</head>
<body>
  <form method="POST">
        <h1>add user</h1>
   <label>name</label> 
   <input type="text" placeholder="name" value="" name="name"/>   
   
   <label>email</label> 
   <input type="text" placeholder="email" value="" name="email"/>
   
   <label>password</label> 
   <input type="text" placeholder="password" value="" name="password"/>

   <input type="submit" />
  </form>  
   
</body>
</html>