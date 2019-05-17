<?php
/**
 * Created by PhpStorm.
 * User: 15N
 * Date: 15-May-19
 * Time: 3:06 PM
 */



$connect = new mysqli("localhost", "root", "root", "hospitale");

if($connect){
//    echo "Database connected successfully";
}
else{
    echo "not connected". mysqli_error($connect);
}