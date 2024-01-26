<?php   
session_start();
$user_id = $_SESSION['user_id'];
        if(isset($_POST['submit'])){

                    $update_name = $_POST['update_name'];
                    $update_phonenum = $_POST['phonenumber'];
                    $update_email = $_POST['upemail'];
                    $update_socialmedia = $_POST['upsocialmedia'];
                    $update_birthday = $_POST['brt'];
                    $update_gender = $_POST['gen'];
                    $update_address = $_POST['address'];
                 
                    require_once 'dbh.inc.php';
                    require_once 'functions.inc.php';
                    $query = "UPDATE `users` SET usersName = '$update_name', usersEmail = '$update_email', usersContactNumber = '$update_phonenum',  socialmedia = '$update_socialmedia', birthday = '$update_birthday', gender = '$update_gender', address = '$update_address' WHERE usersId = '$users_id'";
                    $query_run = mysqli_query($conn, $query);

                    if($query_run){
                        $message[] = 'password updated successfully!';
                    }
                    else{
                        $message[] = 'Filed Update';
                    }

                
                 }
                 else{
                    echo "error update";
                 }
     ?>