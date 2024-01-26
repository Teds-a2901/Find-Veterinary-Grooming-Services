<?php
  include_once ('navbar.php');
?>

<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/functions.inc.php';
$users_id = $_SESSION['user_id'];
if(isset($_POST['passwordsetting_profile'])){;
    $update_pass = $_POST['update_pass'];
    $new_pass = $_POST['new_pass'];
    $confirm_pass = password_hash($_POST['confirm_pass'], PASSWORD_DEFAULT);
    
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE usersId = '$users_id'") or die('query failed');
      if(mysqli_num_rows($select) > 0){
         $fetch = mysqli_fetch_assoc($select);
      }

    if (password_verify($update_pass, $fetch['usersPwd'])){
        if(password_verify($new_pass, $confirm_pass)){
            header("location: ./userprofilepasswordsetting.php?error=successfully");
            mysqli_query($conn, "UPDATE `users` SET usersPwd = '$confirm_pass' WHERE usersId = '$users_id'") or die('query failed');
        }else{
            header("location: ./userprofilepasswordsetting.php?error=confirmpasswordnotmatched");
        }
}else{
    header("location: ./userprofilepasswordsetting.php?error=oldpasswordnotmatched");
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
    <link rel="stylesheet" href="css/userprofile.css">
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

                    <!-- ===== ===== Header/Navbar ===== ===== -->
                    <!--<header>
                        <div class="brandLogo">
                            <figure><img src="web_logo.jpg" alt="logo" width="40px" height="40px"></figure>
                            <span>MarqueTech</span>
                        </div>
                    </header>-->


                    <!-- ===== ===== User Main-Profile ===== ===== -->
                    <div class="userProfile card">
                        <div class="profile">
                            <figure><?php if($fetch['image'] == ''){
                                echo '<img src="images/user.png">';
                            }else{
                                echo '<img src="uploaded_img/'.$fetch['image'].'">';
                            }
                            if(isset($message)){
                                foreach($message as $message){
                                echo '<div class="message">'.$message.'</div>';
                                }
                            }?>
                            </figure>
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
                                <p class="address"><?php echo $fetch['address']; ?></p>
                            </div>

                            <!--<div class="BIO">
                                <h1>Metropolitan <br> Museum</h1>
                                <span>Secondary</span>
                                <p>S34 E 65th Street <br> New York, NY 10651-78 156-187-60</p>
                            </div>-->
                        </div>

                        <!-- ===== ===== Skills Container ===== ===== -->
                        <!--<div class="skills">
                            <h1 class="heading">Skills</h1>
                            <ul>
                                <li style="--i:0">Android</li>
                                <li style="--i:1">Web-Design</li>
                                <li style="--i:2">UI/UX</li>
                                <li style="--i:3">Video Editing</li>
                            </ul>
                        </div>-->
                    </div>


                    <!-- ===== ===== User Details Sections ===== ===== -->
                    <div class="userDetails card">
                        <div class="userName">
                            <h1 class="usersname"><?php echo $fetch['usersName']; ?></h1>
                            <div class="map">
                                <i class="ri-map-pin-fill ri"></i>
                            </div>
                            <p>NAME</p>
                        </div>

                        <!--<div class="rank">
                            <h1 class="heading">Rankings</h1>
                            <span>8,6</span>
                            <div class="rating">
                                <i class="ri-star-fill rate"></i>
                                <i class="ri-star-fill rate"></i>
                                <i class="ri-star-fill rate"></i>
                                <i class="ri-star-fill rate"></i>
                                <i class="ri-star-fill rate underrate"></i>
                            </div>
                        </div>-->

                        <div class="btns">
                            <ul>
                                <!--<li class="sendMsg">
                                    <i class="ri-chat-4-fill ri"></i>
                                    <a href="#">Send Message</a>
                                </li>-->

                                <li class="edit active">
                                    <i class="ri-check-fill ri"></i>
                                    <input type="submit" value="SAVE PASSWORD" name="passwordsetting_profile" class="btn">
                                </li>
                            </ul>
                        </div>
                    </div>


                    <!-- ===== =====  About Sections ===== ===== -->
                    <div class="timeline_about card">
                        <div class="tabs">
                            <ul>
                                <li class="about">
                                    <a href="userprofile.php">
                                    <i class="ri-user-3-fill ri"></i>
                                    <span>About</span>
                                    </a>
                                </li>
                                <li class="about active">
                                    <a href="userupdateprofile.php">
                                    <i class="ri-user-3-fill ri"></i>
                                    <span>Password Setting</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="contact_info">
                            <h1 class="heading">Password</h1>
                            <ul>
                                <li class="phone">
                                    <p><input type="hidden" name="old_pass" value="<?php echo $fetch['usersPwd']; ?>"><p></span>
                                    <h1 class="label">Old Password:</h1>
                                    <span class="pnum"><p><input type="password" name="update_pass" require><p></span>
                                </li>
                        
                                <li class="email">
                                    <h1 class="label">New Password:</h1>
                                    <span class="email"><p><input type="password" name="new_pass" require><p></span>
                                </li>

                                <li class="site">
                                    <h1 class="label">Confirm Password:</h1>
                                    <span class="usite"><p><input type="password" name="confirm_pass" require><p></span>
                                </li>
                        
                            </ul>
                        </div>        
                    </div>
                    
                </form>
        <?php
        if (isset($_GET["error"])) {
        if ($_GET["error"] == "successfully") {
        ?>
                     <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Updated!</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
        <?php }
        elseif ($_GET["error"] == "oldpasswordnotmatched") {
            ?>
                <div class="show">
                    <div class="show-content">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                        <div class="message">
                            <span class="text text-1">Warning</span>
                            <span class="text text-2">old password not matched!</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-xmark close"></i>
                    <div class="progress"></div>
                </div>
            <?php
        }elseif ($_GET["error"] == "confirmpasswordnotmatched") {
            ?>
                <div class="show">
                    <div class="show-content">
                    <i class="fa-solid fa-triangle-exclamation"></i>
                        <div class="message">
                            <span class="text text-1">Warning</span>
                            <span class="text text-2">Confirm Password Not Match</span>
                        </div>
                    </div>
                    <i class="fa-solid fa-xmark close"></i>
                    <div class="progress"></div>
                </div>
            <?php
        }

        } ?>
 
<script src="js/danger.js"></script>
<script src="js/warning.js"></script>
<script src="js/sucess.js"></script>   
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
</body>
</html>
