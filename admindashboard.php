<?php
session_start();
require 'config.php';

if ($_SESSION['role'] != 'Admin') {
    header("Location: profile.php");
    exit();
}
?>