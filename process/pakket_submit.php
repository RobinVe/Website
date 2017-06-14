<?php
require('../connect.php');


$name        = $_POST['name'];
$telephone    = $_POST['telephone'];
$message    = $_POST['message'];
$package    = $_POST['package'];

$sql = "INSERT INTO web_contact_package (name,telephone, message, package) VALUES ('$name', '$telephone', '$message', '$package')";

if ($db->query($sql)) {
    $status = 'Succes';
} else {
    $status = 'Error';
};

echo json_encode($status);
