<?php
session_start();
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';

$admin_id = $_SESSION["admin_id"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.8.2/dist/chart.min.js"></script>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminnavside.css">
    <link rel="stylesheet" href="css/admindashboard.css">
    <link rel="stylesheet" href="css/categoriesadd.css">
	<link rel="stylesheet" href="css/updatesucessadmin.css">
	<link rel="stylesheet" href="css/dangerupdateaddadmin.css">
	

	<title>Administrator</title>
</head>
<body>


	<!--START OF SIDEBAR -->
	<form id="sidebar">
		<a href="admindashboard.php" class="brand">
				<div class="logo">
					<img src="images/DoggoLogo.png" width="110" height="110" left="">
			
				</div>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="admindashboard.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="adminservicestable.php">
					<i class='bx bx-table'></i>
					<span class="text">Services</span>
				</a>
			</li>

			<li >
				<a href="addadminvetandgrom.php">
					<i class='bx bxs-add-to-queue' ></i>
					<span class="text">Add Servicecs</span>
				</a>
			</li>

			<li>
				<a href="admincategoriestable.php">
					<i class='bx bx-table'></i>
					<span class="text">Categories</span>
				</a>
			</li>

			<li class="active">
				<a href="adminaddcategories.php">
					<i class='bx bxs-add-to-queue' ></i>
					<span class="text">Add Categories</span>
				</a>
			</li>


			
			<li>
				<a href="includes/adminlogout.inc.php" class="logout">
					<i class='bx bxs-log-out' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</form>
	<!--END OF SIDEBAR -->



	<!--START OF CONTENT -->
	<section id="content">

		<!--START OF NAVBAR -->
		<nav>
			
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<!--END OF NAVBAR -->

        	<!--START OF MAIN -->
            <main>
			<div class="head-title">
				<div class="left">
					<h1>Find <br>VET&GROOM</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Add Services</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Add SHOP</span>
				</a>
			</div>

			<div class="container">
				<header>Services Management  Post</header>
				<form action="#" method="POST" enctype="multipart/form-data">
					<div class="form first">
						<div class="details personal">
<!--Type of Services start-->
							<span class="title">Category</span>
	                        <div class="field">
							<div class="input-field">
								<label>Category Profile</label>
							</div>
						</div>
							<div class="services-pic">
								<img src="image.jpg" id="photo2">
								<input type="file" name="add_img" id="file2">
								<label for="file2" id="uploadBtn2">Choose Photo</label>
							  </div>		
							<div class="typeserve">
 
							<div class="input-field">
								<label>Category  Name</label>
								<input type="text" name="add_name" placeholder="Enter services name" required>
							</div>
							<div class="input-field">
								<label>Category  Description</label>
								<textarea type="text" name="add_description" placeholder="Enter services description" required></textarea>
							</div>
						</div>	
						<div class="row">
							<input type="submit" name="add_categories" class="app-button" id="btnSearch" value="Add">
						  </div>
                       </div>

					</div>
				</form>
			</div> <!--END OF FORM-->	

		</main>
		<script src="js/adminnav.js"></script>
		<script src="js/categoriesadduploadfile.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
</body>
</html>
