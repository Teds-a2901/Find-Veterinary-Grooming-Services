<?php
function emptyInputSignup($name, $username, $email, $contact, $pwd, $pwdRepeat){
    $result;
    if (empty($name) || empty($username) || empty($email) || empty($contact) || empty($pwd)  || empty($pwdRepeat)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidUid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",  $username)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    $result; 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function pwdMatch($pwd, $pwdRepeat) {
    $result; 

    if ($pwd != $pwdRepeat){
        $result=true;
    }
    else{
        $result=false;
    }
    return $result;
}

function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../loginAndSignup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return  $result;
    }
    mysqli_stmt_close($stmt);

}



function createUser($conn, $name, $username, $email, $contact, $pwd) {
    $sql = "INSERT INTO users (usersName, usersUid, usersEmail, usersContactNumber, usersPwd) VALUES (?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $name, $username, $email, $contact, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../loginAndSignup.php?error=none");
    exit();
}

function emptyInputLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    
    if ($uidExists == false) {
        header("location: ../loginAndSignup.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);
    
    if ($checkPwd == false) {
        header("location: ../loginAndSignup.php?error=wronglogin");
        exit();
    }

    elseif ($checkPwd == true ) {
        session_start();
        $_SESSION["user_id"] = $uidExists["usersId"];
        $_SESSION["userUid"] = $uidExists["usersUid"];
        header("location: ../Mainpage.php?successful=login");
        exit();
    }

    }

    function UserUpdate($conn, $update_name, $update_email, $users_id){
        $sql = mysqli_query($conn, "UPDATE `users` SET usersName = '$update_name', usersEmail = '$update_email' WHERE usersId = '$users_id'") or die('query failed');
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql, $select)) {
            header("location: ../?error=stmtfailed");
            exit();
            mysqli_stmt_bind_param($stmt, "ss", $update_name, $update_email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            header("location: ../?error=none");
            exit();    
        }
    }

    /*Admin Section Functions*/

    function createAdmin($conn, $adminname, $adminpwd) {
        $sql = "INSERT INTO admin (adminUsername, adminpwd) VALUES (?, ?);";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../adminslogin.php?error=stmtfailed");
            exit();
        }
    
        $hashedPwd = password_hash($adminpwd, PASSWORD_DEFAULT);
    
        mysqli_stmt_bind_param($stmt, "ss", $adminname, $hashedPwd);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../adminslogin.php?error=none");
        exit();
    }


    function adminExists($conn, $adminname){
        $sql = "SELECT * FROM admin WHERE adminUsername = ?;";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../adminslogin.php?error=stmtfailed");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "s", $adminname);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }
        else{
            $result = false;
            return  $result;
        }
        mysqli_stmt_close($stmt);
    
    } 

    function emptyInputAdmin($adminname, $adminpwd){
        $result;
        if (empty($adminname) || empty($adminpwd)){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }

    function loginAdmin($conn, $adminname, $adminpwd){
        $adminExists = adminExists($conn, $adminname, $adminname);
        
        if ($adminExists == false) {
            header("location: ../adminslogin.php?error=wrongloginadmin");
            exit();
        }
    
        $pwdHashed = $adminExists["adminpwd"];
        $checkPwd = password_verify($adminpwd, $pwdHashed);
        
        if ($checkPwd == false) {
            header("location: ../adminslogin.php?error=wrongloginadmin");
            exit();
        }
    
        elseif ($checkPwd == true ) {
            session_start();
            $_SESSION["admin_id"] = $adminExists["adminId"];
            header("location: ../admindashboard.php?error=none");
            exit();
        }
    
        }

