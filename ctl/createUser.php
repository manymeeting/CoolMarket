<?php
session_start();
require dirname(__FILE__).'/' . 'checkSession.php';
require dirname(__FILE__).'/' . '../functions/functions.php';

//pull username, generate new ID and hash password
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$homephone = $_POST['homephone'];
$homeaddr = $_POST['homeaddr'];
$cellphone = $_POST['cellphone'];

$userForm = new UserForm;

$response = $userForm->createUser($email, $password, $firstname, $lastname, $homephone, $homeaddr, $cellphone);

if ($response == 'true') {
    // success
    header("Location: ../views/users_list.php");
    exit();
} else {
    // failure, handle errors in the future
    echo "Failed to add user, please check the input.";
    exit();

}