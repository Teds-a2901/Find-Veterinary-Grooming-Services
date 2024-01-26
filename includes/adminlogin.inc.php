<?php
if (isset($_POST["submit2"])) {

    $adminname = $_POST["nameadmin"];
    $adminpwd = $_POST["adminpass"];
    
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    

    if (emptyInputLogin($adminname, $adminpwd) !==false) {
        header("location: ../adminslogin.php?error=emptyinput");
        exit();
    }

    loginAdmin($conn, $adminname, $adminpwd);


}
else {
    header("location: ../admindashboard.php");
    exit();
}