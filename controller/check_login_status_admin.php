<?php
session_start();
/**
 * Created by PhpStorm.
 * User: EliseIGank
 * Date: 22.03.2017
 * Time: 04.14
 */

$loggedIn = $_SESSION["loggedin"];

if($loggedIn != "admin") {
    header("Location: admin_login.php?error=login");
    exit();
}

