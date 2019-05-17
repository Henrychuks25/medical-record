<?php
/**
 * Created by PhpStorm.
 * User: 15N
 * Date: 15-May-19
 * Time: 3:49 PM
 */

session_start();

if(!isset($_SESSION['email'])){
    header("Location:login.php");
    exit();
}
