<?php

require dirname(__FILE__). '/' . '../functions/functions.php';
session_start();


$ADMIN_PWD_FILENAME = "admin_pwd";
$ADMIN_ID = "admin";

$email = $_POST['email'];
$password = $_POST['password'];

$userForm = new UserForm;
$user = $userForm->searchByEmail($email)[0];

if (!is_null($user)) {
    if($user["password"] != $password)
    {
      loginFail();
    }

    $_SESSION['valid'] = true;
    $_SESSION['member_id'] = $user["id"];
    
    if($user["role"] === "ADMIN")
    {
      $_SESSION['isAdmin'] = true;
    }

    // success
    loginSuccess();

} else {
    // failure, handle errors in the future
    return loginFail();
}

function loginSuccess()
{
  $home_location = "../views/home.php";
  header("Location: " . $home_location);
  exit();
}

function loginFail()
{
  $login_location = "../views/login.php";
  header("Location: " . $login_location);
  exit();
};


?>
