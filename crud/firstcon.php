<?php
echo "<pre>\n";
$pdo=new PDO( 'mysql:host=localhost;dbname=misc;charset=utf8',
        "root");
$stmt = $pdo->query("SELECT * FROM users");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($rows);
echo "</pre>\n";?>
