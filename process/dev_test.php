<?php

// Het template om te verbinden met de server


// Create connection
$db = new PDO('mysql:host=localhost;dbname=test;charset=utf8mb4', 'recruitm', 'X!063360RVpdS!x');

$sql = "INSERT INTO web_contact (name,telephone, message) VALUES ('$name', '$telephone', '$message')";

$db->query($sql);

echo "Executed";
?>