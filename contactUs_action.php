<?php

require("Include/database.php");
//1. Collect all Data from Form
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["tele"];
$message = $_POST["message"];



//2.Business Login Implementation & Data Login Implementation


if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


    $sql = "INSERT INTO contact(name, email, phone, message, join_date)"
            . " VALUES('$name','$email','$phone','$message',now())";
    if (mysqli_query($con, $sql)) {
        echo "<h1> Successfull!</h1>";
    } else {
        echo "Error : " . mysqli_error($con);
    }
} else {
    echo "<h1>Invalid Email</h1>";
}
?>
