<?php
session_start();
include "connection.php";

// initializing variables

$email    = "";
$errors = array();


if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email  is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {

        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($connect, $query);



        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: ../index.php');
        }

        else {
            array_push($errors, "Invalid email or password");
        }
    }
}