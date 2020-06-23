<?php


$string_contacts = file_get_contents('contacts.json');
$contacts_array = json_decode($string_contacts, true);
array_splice($contacts_array, $_GET['id'], 1);
$json = json_encode($contacts_array, JSON_PRETTY_PRINT);
file_put_contents('contacts.json', $json);
header('Location: /index.php');
exit;