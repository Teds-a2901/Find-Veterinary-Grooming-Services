<?php
include_once 'includes/dbh.inc.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Find Vet&Groom</Title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Para sa CSS ===== -->
    <link rel="stylesheet" href="css/nav.css">
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<title>Responsive Navigation Menu Bar</title>-->
</head>
<body>
 <!-- ===== Para sa Navigation Bar ===== -->   
    <nav>
       
        <div class="nav-bar">
            <i class='bx bx-menu sidebarOpen' ></i>
            <div class="logo">
                <img src="images/DoggoLogo.png" width="80" height="80">
        
            </div>
            <span class="logo navLogo"><a href="Mainpage.php">Find Vet&Groom</a></span>

            <div class="menu">
                <div class="logo-toggle">
                    <span class="logo"><a href="Mainpage.php">Find Vet&Groom</a></span>
                    <i class='bx bx-x siderbarClose'></i>
                </div>
                
              <ul class="nav-links">
                    <li><a href="Mainpage.php">Home</a></li>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="vetgroomservicescategories.php">Services</a></li>      
                </ul>
            </div>        
 <!-- ===== Para sa Dark Mode ===== -->   
 <div class="darkLight-searchBox">
    <div class="dark-light">
    </div>
<!--END OF DARK MODE-->

<!--SideBar-->
<div class="searchBox">
    <div class="searchToggle">
     
     </div>

      
      </div>
    </div>
    <!--END OF SIDE BAR-->

    <!--Dropdown File-->
    <div class="wrapper">
        <div class="navbar">
    <div class="nav_right">
        <ul >
        
            <li class="nr_li dd_main">

                <?php
                
                      if (isset($_SESSION["user_id"])) {
                        $users_id = $_SESSION['user_id'];
                        $select = mysqli_query($conn, "SELECT * FROM `users` WHERE usersId = '$users_id'") or die('query failed');
                        if(mysqli_num_rows($select) > 0){
                            $fetch = mysqli_fetch_assoc($select);
                        }
                        ?>
                        <?php if($fetch['image'] == ''){ ?>
                            <img src="images/user.png" alt="profile" width="250px" height="250px"  accept="image/jpg, image/jepg, image/png">
                        <?php } else { ?>
                            <img class=""<?php echo '<img src="uploaded_img/'.$fetch['image'].'"'; ?>>
                        <?php } ?> 
                         <a href = "includes/logout.inc.php">
                        </a>
                        <script src="js/dropdownnav.js"></script>
                        <?php
                        }  
                        else {
                        ?>
                        <!--SIGN-IN-->
                        <a href = "loginAndSignup.php">
                        <button  type="button"  class="button">
                        <span class="button__text">Sign In</span>
                        <span class="button__icon">
                        <i class="fa-solid fa-arrow-right-to-bracket"></i>
                        </span>                   
                        </button>
                        </a>
                        <!--END SIGN-IN-->
                        <?php
                        }
                ?>
                
                <div class="dd_menu">
                    <div class="dd_left">
                    <?php
                        if (isset($_SESSION["user_id"])) { ?>
                        <ul>
                        
                            <li><i class="fa-solid fa-user"></i></li>
                            <li><i class="fas fa-sign-out-alt"></i></li>
                        </ul>
                        <?php
                        } ?>  
                    </div>
                    <div class="dd_right">
                        <ul>
                        <?php
                            if (isset($_SESSION["user_id"])) {
                                ?>
                                <li><a href="userprofile.php" class="profile">Profile</a></li>
                                <li><a href="includes/logout.inc.php" class="logout">Logout</a></li>  
                                <?php
                                }  
                        ?>   
                        </ul>
                    </div>
                </div>
            </li>
          
        </ul>
    </div>
    </div>
</div>
</div>
<!--END OF DROPDOWN FILE-->
</nav>
<!--END OF NAVIGATOR BAR-->
