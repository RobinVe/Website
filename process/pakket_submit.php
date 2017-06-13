<?php
require('../connect.php');


$name        = $_POST['name'];
$telephone    = $_POST['telephone'];
$message    = $_POST['message'];
$package    = $_POST['pakket_type'];

$sql = "INSERT INTO web_contact_pakket (name,telephone, message, pakket_type) VALUES ('$name', '$telephone', '$message', '$package')";

if ($db->query($sql)) {
    $status = 'Succes';
} else {
    $status = "Error | $sql";
};

echo json_encode($status);
