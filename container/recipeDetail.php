<?php 
 echo $_GET['product_id'];
 echo $_GET['titre'];
 echo $_GET['description'];
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
    <h2>hi from detail</h2>
    <?= "titel" .$_GET['titre']?>
</body>
</html>