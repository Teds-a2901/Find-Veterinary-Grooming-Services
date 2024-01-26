<?php
session_start();
$users_id = $_SESSION['user_id'];
if(isset($_POST['update_profile'])){
                            
    require_once 'dbh.inc.php';

    $users_id = $_POST['userids'];
    $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
    $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
    $query = "UPDATE `users` SET usersName = '$update_name', usersEmail = '$update_email' WHERE usersId = '$users_id'";
    $query_run = mysqli_query($conn, $query);
    
    if(!$update)
    {
        header("location: ../userupdateprofile.php?");
        exit();
    }
 

    if(InvalidEmail($update_email)!==false){
        header("location: ../userprofile.php?error=invalidemail");
    exit();
    }

    if(EmptyInputSignup($update_name, $update_email)!==false){
        header("location: ../userprofile.php?error=emptyinput");
    exit();
    }

}
else {
    header("location: ../userupdateprofile.php");
    exit();
}