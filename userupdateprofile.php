<?php
 include 'navbar.php';
?>

<?php
        include_once 'includes/dbh.inc.php';
        $users_id = $_SESSION['user_id'];
        if(isset($_POST['update_profile'])){

        $update_name = mysqli_real_escape_string($conn, $_POST['update_name']);
        $update_email = mysqli_real_escape_string($conn, $_POST['update_email']);
        $update_phone = mysqli_real_escape_string($conn, $_POST['update_phone']);
        $update_socialmedia = mysqli_real_escape_string($conn, $_POST['upsocialmedia']);
        $update_birthday = mysqli_real_escape_string($conn, $_POST['brt']);
        $update_gender = mysqli_real_escape_string($conn, $_POST['gen']);
        $update_address = mysqli_real_escape_string($conn, $_POST['address']);

        mysqli_query($conn, "UPDATE `users` SET usersName = '$update_name', usersEmail = '$update_email', usersContactNumber = '$update_phone', socialmedia = '$update_socialmedia', 
        birthday = '$update_birthday', gender = '$update_gender', address = '$update_address' WHERE usersId = '$users_id'") or die('query failed');
        header("location: ./userprofile.php?successful=updated");

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
    <link rel="stylesheet" href="css/userupdateprofile.css">
        <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="css/warning.css">
    <link rel="stylesheet" href="css/success.css">
    <link rel="stylesheet" href="css/danger.css">

    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<title>Responsive Navigation Menu Bar</title>-->
</head>
<body>
<?php
      $select = mysqli_query($conn, "SELECT * FROM `users` WHERE usersId = '$users_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }
   ?>
   

  <!-- ===== ===== Main-Container ===== ===== -->
    <form class="container" action ="" method="POST" enctype="multipart/form-data">
                    <!-- ===== ===== User Main-Profile ===== ===== -->
                    <div class="userProfile card">
                        <div class="profile">
                            <?php
                         if($fetch['image'] == ''){ ?>
                            <img src="images/user.png" alt="profile" width="250px" height="250px" class="images" accept="image/jpg, image/jepg, image/png" name="update_image">
                         <?php
                        }else if($fetch['image'] >= ''){ ?>
                                <img class="images"  <?php echo '<img src="uploaded_img/'.$fetch['image'].'"'; ?>>
                                <?php
                            }else{
                                echo '<img src="uploaded_img/'.$fetch['image'].'">';
                            }?>
                        </div>
                        <div class="upload">
                            <input type ="file" class = "file" name="update_image">
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
                                        <a href="userprofile.php" name="">CANCEL</a>
                                    </li>

                                    <li class="save active">
                                    <input type="submit" value="UPDATE" name="update_profile" class="btn">
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
                        <input type="text" name="update_phone" value="<?php echo $fetch['usersContactNumber']; ?>">
                    </li>

                    <li class="email">
                        <h1 class="label">E-mail:</h1>
                        <input type="text" name="update_email"  value="<?php echo $fetch['usersEmail']; ?>" >
                    </li>

                    <li class="site">
                        <h1 class="label">Social Media:</h1>
                        <input type="text" name="upsocialmedia" value="<?php echo $fetch['socialmedia']; ?>" >
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
                        <input type="hidden" name="userids" value="<?php echo $fetch['usersId']; ?>">
                    </li>
                </ul>
            </div>
            <!--
            <div class="basic_info">
                <h1 class="heading">Password Setting</h1>
                <ul>
    
                    <li class="sex">
                        <h1 class="label">Old Password:</h1>
                        <input type="password" name="update_pass">
                        <input type="hidden" name="old_pass" value="<?php /* echo $fetch['usersPwd']; */?>">
                    </li>

                    <li class="birthday">
                        <h1 class="label">New Pass:</h1>
                        <input type="password" name="new_pass">
                    </li>

                    <li class="birthday">
                        <h1 class="label">Cofirm Pass:</h1>
                        <input type="password" name="confirm_pass">
                    </li>
                </ul>
            </div>
            --->

        </div>
    </form>
                  
                  <script>

                                const body = document.querySelector("body"),
                                    nav = document.querySelector("nav"),
                                    modeToggle = document.querySelector(".dark-light"),
                                    searchToggle = document.querySelector(".searchToggle"),
                                    sidebarOpen = document.querySelector(".sidebarOpen"),
                                    siderbarClose = document.querySelector(".siderbarClose");

                                    let getMode = localStorage.getItem("mode");
                                        if(getMode && getMode === "dark-mode"){
                                            body.classList.add("dark");
                                        }

                                // js code to toggle dark and light mode
                                    modeToggle.addEventListener("click" , () =>{
                                        modeToggle.classList.toggle("active");
                                        body.classList.toggle("dark");

                                        // js code to keep user selected mode even page refresh or file reopen
                                        if(!body.classList.contains("dark")){
                                            localStorage.setItem("mode" , "light-mode");
                                        }else{
                                            localStorage.setItem("mode" , "dark-mode");
                                        }
                                    });

                                // js code to toggle search box
                                        searchToggle.addEventListener("click" , () =>{
                                        searchToggle.classList.toggle("active");
                                    });
                                
                                    
                                //   js code to toggle sidebar
                                sidebarOpen.addEventListener("click" , () =>{
                                    nav.classList.add("active");
                                });

                                body.addEventListener("click" , e =>{
                                    let clickedElm = e.target;

                                    if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
                                        nav.classList.remove("active");
                                    }
                                });

                        </script>
 <script src="js/danger.js"></script>
<script src="js/warning.js"></script>
<script src="js/sucess.js"></script>  
<script src="js/uploadprofile.js"></script>
</body>
</html>
