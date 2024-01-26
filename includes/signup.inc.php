<?php
if (isset($_POST["submit1"])) {
    $name = $_POST["name"];
    $username = $_POST["userid"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputSignup($name, $username, $email, $pwd, $contact, $pwdRepeat) !==false) {
    header("location: ../loginAndSignup.php?error=emptyinput");
    exit();
}

if (invalidUid($username) !==false) {
    header("location: ../loginAndSignup.php?error=invaliduid");
    exit();
}

if (invalidEmail($email) !==false) {
    header("location: ../loginAndSignup.php?error=invalidemail");
    exit();
}
if (pwdMatch($pwd, $pwdRepeat) !==false) {
    header("location: ../loginAndSignup.php?error=passwordsdontmatch");
    exit();
}

if (uidExists($conn, $username, $email) !==false) {
    header("location: ../loginAndSignup.php?error=usernametaken");
    exit();
}

createUser($conn, $name, $username, $email, $contact, $pwd, $image);
}
else {
    header("location: ../loginAndSignup.php");
    exit();
}