<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';
include 'class/Rating.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/feedbackreview.css">
    <link rel="stylesheet" href="css/nav1.css">
     <!-- ICONS CDN FONTAWESOME -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
</head>
<body>

<!-- ===== Para sa Navigation Bar ===== -->   
<nav>
       
       <div class="nav-bar">
           <i class='bx bx-menu sidebarOpen' ></i>
           <div class="logo">
               <img src="images/DoggoLogo.png" width="80" height="80">
       
           </div>
           <span class="logo navLogo"><a href="#">Find Vet&Groom</a></span>

           <div class="menu">
               <div class="logo-toggle">
                   <span class="logo"><a href="#">Find Vet&Groom</a></span>
                   <i class='bx bx-x siderbarClose'></i>
               </div>
               
             <ul class="nav-links">
                   <li><a href="Mainpage.php">Home</a></li>
                   <li><a href="dashboard.php">Dashboard</a></li>
                   <li><a href="vetgroomservices.php">Services</a></li>
                   
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
       <ul>
       
           <li class="nr_li dd_main">

               <?php
               
                     if (isset($_SESSION["user_id"])) {
                       $users_id = $_SESSION['user_id'];
                       $select = mysqli_query($conn, "SELECT * FROM `users` WHERE usersId = '$users_id'") or die('query failed');
                       if(mysqli_num_rows($select) > 0){
                           $fetch = mysqli_fetch_assoc($select);
                       }
                       ?>
                       <img class=""<?php echo '<img src="uploaded_img/'.$fetch['image'].'"'; ?>>
                        <a href = "includes/logout.inc.php">
                       </a>
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
                           <li><i class="far fa-star"></i></li>
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
                               <li><a href="userprofile.php" class="profile">Favorites</a></li> 
                               <li><a href="includes/logout.inc.php" class="logout">Log Out</a></li>  
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
<div class="container">
<?php
          $vetid = $_GET['vet_and_groom_ID'];
					$select = mysqli_query($conn, "SELECT * FROM `vet_and_groom_services` WHERE vet_and_groom_ID='$vetid'") or die('query failed');
					if(mysqli_num_rows($select) > 0){
					$fetch = mysqli_fetch_assoc($select);
					}
				?>
 <header>Review Form</header>
 <div id="ratingSection">
		<div class="row">
			<div class="col-sm-12">
				<form id="ratingForm" method="POST">					
					<div class="form-group">
						<h4>Rate this product</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
						  <span class="fas fa-star star-light submit_star mr-1" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fas fa-star star-light submit_star mr-1" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fas fa-star star-light submit_star mr-1" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fas fa-star star-light submit_star mr-1" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="fas fa-star star-light submit_star mr-1" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="vetgroomid" name="vetgroomid" value="<?php echo $_GET['vet_and_groom_ID']; ?>">
            <input type="hidden" class="form-control" id="vetgroomname" name="vetgroomname" value="<?php echo $fetch['b_name']; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>		
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>
                       

</div>
</div>
</div>
</form>
</div>
<!-- JS -->
</body>
</html>
<script src="star.js"></script>
<script src="js/rating.js"></script>
<script src="js/dropdownnav.js"></script>
<script src="js/sidebarnav.js"></script>