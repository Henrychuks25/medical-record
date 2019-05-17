<?php
/**
 * Created by PhpStorm.
 * User: 15N
 * Date: 15-May-19
 * Time: 3:13 PM
 */
include "connection.php";

$errors = array();

if (isset($_POST['submit'])) {

    // receive all input values from the form
    $username = mysqli_real_escape_string($connect, $_POST['username']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $role = mysqli_real_escape_string($connect, $_POST['role']);




    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($connect, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['username'] === $username) {
            array_push($errors, "username already exists");
        }


        if ($user['email'] === $email) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {


        $query = "INSERT INTO users (username, email, password, role  )
  			  VALUES('$username', '$email', '$password',   '$role')";
        mysqli_query($connect, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Registration Successful";
        header('location: ../index.php');


    }

}