<?php

if (!isset($_SESSION)) {
    session_start();
}
session_unset();

header("Location: login.php");
?>
