<?php

$string_contacts = file_get_contents('contacts.json');
$contacts_array = json_decode($string_contacts, true);
array_splice($contacts_array, $_POST['id'], 1);
$json = json_encode($contacts_array, JSON_PRETTY_PRINT);
file_put_contents('contacts.json', $json);
header('Location: /index.php');

$contacts =[
    'firstname' => $_POST['firstName'],
    'lastname' => $_POST['lastName'],
    'email' => $_POST['email'],
    'number' => $_POST['number'],
    'gender' => $_POST['gender'],
];


array_push($contacts_array, $contacts);
$json = json_encode($contacts_array, JSON_PRETTY_PRINT);
file_put_contents('contacts.json', $json);
header('Location: /index.php');

