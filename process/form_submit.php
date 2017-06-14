<?php
require('../connect.php');


$name        = $_POST['name'];
$telephone    = $_POST['telephone'];
$message    = $_POST['message'];

$sql = "INSERT INTO web_contact (name,telephone, message) VALUES ('$name', '$telephone', '$message')";

if ($db->query($sql)) {
    $status = 'Succes';
} else {
    $status = 'Error';
};

echo json_encode($status);
