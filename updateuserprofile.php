<?php


session_start();
include_once 'includes/dbh.inc.php';
$users_id = $_SESSION['user_id'];
if(isset($_POST['save1'])){

   $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_phonenum = mysqli_real_escape_string($conn, $_POST['update_email']);

   mysqli_query($conn, "UPDATE `users` SET usersName = '$update_name', usersEmail = '$update_email' WHERE usersId = '$users_id'") or die('query failed');
    
   $old_pass = $_POST['old_pass'];
   $update_pass = mysqli_real_escape_string($conn, md5($_POST['update_pass']));
   $new_pass = mysqli_real_escape_string($conn, md5($_POST['new_pass']));
   $confirm_pass = mysqli_real_escape_string($conn, md5($_POST['confirm_pass']));

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         $message[] = 'old password not matched!';
      }elseif($new_pass != $confirm_pass){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "UPDATE `users` SET usersPwd = '$confirm_pass' WHERE usersId = '$users_id'") or die('query failed');
         $message[] = 'password updated successfully!';
      }
   }

   $update_image = $_FILES['update_image']['name'];
   $update_image_size = $_FILES['update_image']['size'];
   $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
   $update_image_folder = 'uploaded_img/'.$update_image;

   if(!empty($update_image)){
      if($update_image_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `users` SET image = '$update_image' WHERE usersId = '$users_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_image_tmp_name, $update_image_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }
   
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
    <Title>Profile</Title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Para sa CSS ===== -->
    <link rel="stylesheet" href="css/updateprofile.css">
    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<title>Responsive Navigation Menu Bar</title>-->
</head>
<body>  
<?php
     $select = "SELECT * FROM users WHERE usersId = '$users_id'";
      $result = mysqli_query($conn, $select) or die('query failed');
      if(mysqli_num_rows($result) > 0){
         $fetch = mysqli_fetch_assoc($result);
      }
   ?>

            <!-- ===== ===== Main-Container ===== ===== -->
    <form class="container">
        
            <div class="userProfile card">
                            <div class="profile">
                                <img src="images/user.png" alt="profile" width="250px" height="250px" class="images">
                            </div>
                            <div class="upload">
                                <input type ="file" class = "file">
                            </div>
            </div>


        <!-- ===== ===== Work & Skills Section ===== ===== -->
        <div class="work_skills card">

            <!-- ===== ===== Work Contaienr ===== ===== -->
            <div class="work">
                <h1 class="heading"></h1><br>
                <div class="primary">
                    <h1>ADDRESS</h1>
                    <span>Permanent Address</span>
                    <p><input type="text" name="address" value="<?php echo $fetch['address']; ?>"><p>
                </div>
            </div>
        </div>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <div class="userDetails card">
        
            <div class="userName">
                <input type="text" name="update_name" value="<?php echo $fetch['usersName']; ?>">
                <p>NAME</p>
            </div>

            <div class="btns">
                <ul>
                    

                    <li class="edit active">
                        <i class="ri-check-fill ri"></i>
                        <a href="userprofile.php">EDIT</a>
                    </li>

                    <li class="save">
                        <input  type="submit" name="save1" href="">SAVE</input>
                    </li>
                </ul>
            </div>
        </div>


        <!-- ===== =====  About Sections ===== ===== -->
        <div class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_info">
                <h1 class="heading">Contact Information</h1>
                <ul>
                    <li class="phone">
                        <h1 class="label">Phone Number:</h1>
                        <input type="text" name="phonenumber" value="<?php echo $fetch['usersContactNumber']; ?>">
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <input type="text" name="update_email"  value="<?php echo $fetch['usersEmail']; ?>" >
                    </li>

                    <li class="site">
                        <h1 class="label">Social Media:</h1>
                        <input type="text" name="site" value="<?php echo $fetch['socialmedia']; ?>" >
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthday:</h1>
                        <input type="text" name="brt" value="<?php echo $fetch['birthday']; ?>">
                    </li>

                    <li class="sex">
                        <h1 class="label">Gender:</h1>
                        <input type="text" name="gen" value="<?php echo $fetch['gender']; ?>">
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Password Setting</h1>
                <ul>
    
                    <li class="sex">
                        <h1 class="label">Old Password:</h1>
                        <input type="password" name="newpass">
                        <input type="hidden" name="oldpass" value="<?php echo $fetch['usersPwd']; ?>">
                    </li>

                    <li class="birthday">
                        <h1 class="label">New Pass:</h1>
                        <input type="password" name="brt">
                    </li>

                    <li class="birthday">
                        <h1 class="label">Cofirm Pass:</h1>
                        <input type="password" name="brt">
                    </li>
                </ul>
            </div>
            
        </div>

    </form>
  
                
<script src="js/uploadprofile.js"></script>
</body>
</html>
