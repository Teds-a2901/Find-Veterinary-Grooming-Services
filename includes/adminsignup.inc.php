<?php
if (isset($_POST["submit3"])) {
    $adminname = $_POST["adminname"];
    $adminpwd = $_POST["adminpwd"];
    $adminpwdrepeat = $_POST["pwdrepeat"];

require_once 'dbh.inc.php';
require_once 'functions.inc.php';

if (emptyInputAdmin($adminname, $adminpwd, $adminpwdrepeat) !==false) {
    header("location: ../adminslogin.php?error=emptyinput");
    exit();
}

if (pwdMatch($adminpwd, $adminpwdrepeat) !==false) {
    header("location: ../adminslogin.php?error=passwordsdontmatch");
    exit();
}

if (AdminExists($conn, $adminname) !==false) {
    header("location: ../adminslogin.php?error=adminname");
    exit();
}

createAdmin($conn, $adminname, $adminpwd);
}
else {
    header("location: ../adminslogin.php");
    exit();
}