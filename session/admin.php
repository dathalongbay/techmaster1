<?php
session_start();
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $_SESSION['email'] = $email;
}


echo "<pre>";
print_r($_SESSION);
echo "</pre>";
exit;