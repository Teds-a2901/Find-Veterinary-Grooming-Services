<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';
include_once 'includes/categoriesfunction.inc.php';
session_start();
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
    <link rel="stylesheet" href="css/addadminvetandgrom.css">
	<link rel="stylesheet" href="css/updatesucessadmin.css">
	<link rel="stylesheet" href="css/dangerupdateaddadmin.css">
	

	<title>Administrator</title>
</head>
<body>


	<!--START OF SIDEBAR -->
	<form id="sidebar">
		<a href="#" class="brand">
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
			<li class="active">
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

			<li>
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
							<a href="#">Dashboard</a>
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

		<!---START OF FORM-->
			<div class="container">
				<header>Update Services Management Post</header>
				<form method="POST" class="row g-6" enctype="multipart/form-data">
                <?php
					$select = mysqli_query($conn, "SELECT * FROM `admin`") or die('query failed');
					if(mysqli_num_rows($select) > 0){
					$fetch = mysqli_fetch_assoc($select);
					}
				?>
                <div class="form first">
                <?php foreach($query as $value){?>
						<div class="details personal">
							<span class="title">Shop Details</span>
<!--FOr Uploadfile-->	        <div class="field">
									<div class="input-field">
								<label>Business Profile</label>
                                <input type="hidden" name="update_b_admin_id" placeholder="Business Name" class="col-md-6 form-control bg-white text-dark my-3 text-start" value="<?php echo $_SESSION['admin_id']; ?>">
								<input type="hidden" name="update_b_vetandgroom_id" placeholder="Business Name" class="col-md-6 form-control bg-white text-dark my-3 text-start" value="<?php echo $value['vet_and_groom_ID']; ?>">
				                    </div>
									<div class="profile-pic-div">
										<img <?php echo '<img src="Business_Logo/'.$value['b_logo'].'"'; ?>  id="photo">
										<input type="file" name="update_b_logo" id="file">
										<label for="file" id="uploadBtn">Choose Photo</label>
									  </div>
<!--End For Uploadfile-->	            </div>

<!--Text Field-->		    <div class="fields">
								<div class="input-field">
									<label>Business Name</label>
									<input type="text"  name="update_b_name" placeholder="Enter business name"  required value="<?php echo $value ['b_name']; ?>">
								</div>
								<div class="input-field">
									<label>Business Owner</label>
									<input type="text" name="update_b_owner" placeholder="Enter business owner" required value="<?php echo $value ['b_owner']; ?>">
								</div>
                                
                                <div class="input-field">
									<label>Business Address</label>
									<input  type="text" name="update_b_address" placeholder="Enter business Address" required value="<?php echo $value ['b_address']; ?>">
								</div>

								<div class="input-field">
									<label>Latitude</label>
									<input  type="text" name="update_Latitude" placeholder="Enter Latitude" required value="<?php echo $value ['Latitude']; ?>">
								</div>

								<div class="input-field">
									<label>Longitude</label>
									<input  type="text" name="update_Longitude" placeholder="Enter Longitude" required value="<?php echo $value ['Longitude']; ?>">
								</div>

								<div class="input-field">
									<label>Business City</label>
									<input  type="text" name="update_b_city" placeholder="Enter business City" required value="<?php echo $value ['b_city']; ?>">
								</div>

                                <div class="input-field">
									<label>Business Founded year in Business</label>
									<input  type="date" name="update_b_founded_year_in_business" placeholder="Enter business founded year" required value="<?php echo $value ['b_founded_year']; ?>">
								</div>

                                <div class="input-field">
									<label>Business Phone</label>
									<input type="text" name="update_b_phone" placeholder="Enter business number" required value="<?php echo $value ['b_phone']; ?>">
								</div>

                                <div class="input-field">
									<label>Business Email</label>
									<input type="text" name="update_b_email" placeholder="Enter business email" required value="<?php echo $value ['b_email']; ?>">
								</div>

								<div class="input-field">
									<label>Business Shop Schedule</label>
									<input type="text" name="update_b_operation_hr" placeholder="Enter business Operation Hours" required value="<?php echo $value ['b_operation_hr']; ?>">
								</div>
								<?php }?>
                                <div class="input-field">
								<label>Services Provide</label>
									<?php 
									if(isset($_GET['vet_and_groom_ID']))
									{
										$ids = $_GET['vet_and_groom_ID'];
										$vet = getByID("vet_and_groom_services",$ids);
										if(mysqli_num_rows($vet)>0)
										{
											$data = mysqli_fetch_array($vet);
											?>
											<select name="cat_ID" class="form-select" onchange="document.getElementById('text_content').value=this.options[this.selectedIndex].text">
											<option selected>Select Services Provide</option>
											<?php 
											$categories = getAll("categories");
											if(mysqli_num_rows($categories)>0)
											{
												foreach($categories as $value)
												{
													?>
														<option value="<?= $value['cat_ID'];?>"<?= $data['cat_ID'] == $value['cat_ID']?'selected':''?>><?= $value['cat_name'];?></option>
													<?php
												}
											}
											else{
												echo "No Servieces Provider Available";
											}
											?>
											</select>
											<?php

										}else{
											echo "Id misssing from url";
										}

									}
									else
									{
										echo "Id misssing from url";
									}
									?>
									<input type="hidden" name="update_provide_name" id="text_content">
									</select>
									<!--<input type="text" name="update_b_service_provide" placeholder="Enter business business services provide" required value=" ?>">-->
								</div>
								<?php foreach($query as $value){?>
								<div class="input-field">
									<input  type="hidden" name="" placeholder="">
								</div>
	
								<div class="input-field">
									<label>Business Description</label>
									<textarea name="update_b_description" placeholder="Enter business description" required ><?php echo $value ['b_description']; ?></textarea>
								</div>	
<!--End Of Text Field-->    </div>
						</div>

<!--Type of Services start--><div class="details personal">
							<span class="title">Type of Services</span>
	 <!--Field2 -->	 			<div class="field">
							<div class="input-field">
								<label>Services Profile</label>
							</div>
						</div>
							<div class="services-pic">
								<img id="photo2" <?php echo '<img src="Bussines_Logo_Services_1/'.$value['b_services_logo_1'].'"'; ?>>
								<input type="file" name="update_b_services_logo_1" id="file2">
								<label for="file2" id="uploadBtn2">Choose Photo</label>
							  </div>		
							<div class="typeserve">
							<div class="input-field">
								<label>Services Name</label>
								<input type="text" name="update_b_services_name_1" placeholder="Enter services name" required value="<?php echo $value ['b_services_name_1']; ?>">
							</div>
							<div class="input-field">
								<label>Services Description</label>
								<textarea name="update_b_services_description_1" placeholder="Enter services description" required><?php echo $value ['b_services_description_1']; ?></textarea>
							</div>
						</div>
					
	  <!--Field3-->			<div class="field">
							<div class="input-field">
								<label>Services Profile</label>
							</div>
						</div>
							<div class="services-pic3">
								<img id="photo3"  <?php echo '<img src="Bussines_Logo_Services_2/'.$value['b_services_logo_2'].'"'; ?>>
								<input type="file" name="update_b_services_logo_2" id="file3">
								<label for="file3" id="uploadBtn3">Choose Photo</label>
							  </div>		
							<div class="typeserve">

							<div class="input-field">
								<label>Services Name</label>
								<input type="text" name="update_b_services_name_2" placeholder="Enter services name" required value="<?php echo $value ['b_services_name_2']; ?>">
							</div>
							<div class="input-field">
								<label>Services Description</label>
								<textarea name="update_b_services_description_2" placeholder="Enter services description" required><?php echo $value ['b_services_description_2']; ?></textarea>
							</div>
						</div>
						
	  <!--Field4-->				<div class="field">
		                      <div class="input-field">
			                <label>Services Profile</label>
		                </div>
	                    </div>
		                      <div class="services-pic4">
			                   <img id="photo4" <?php echo '<img src="Bussines_Logo_Services_3/'.$value['b_services_logo_3'].'"'; ?>>
			                    <input type="file" name="update_b_services_logo_3" id="file4">
			                   <label for="file4" id="uploadBtn4">Choose Photo</label>
		                </div>		
		                        <div class="typeserve">

		                        <div class="input-field">
			                   <label>Services Name</label>
			                   <input type="text" name="update_b_services_name_3" placeholder="Enter services name" required value="<?php echo $value ['b_services_name_3']; ?>">
		               </div>
		                         <div class="input-field">
			                      <label>Services Description</label>
			                   <textarea name="update_b_services_description_3" placeholder="Enter services description" required><?php echo $value ['b_services_description_3']; ?></textarea>
		               </div>
	                   </div>
				  	
					   		
	  <!--Field5-->				   <div class="field">
		                       <div class="input-field">
			                   <label>Services Profile</label>
		                </div>
		               </div>
			                      <div class="services-pic5">
			                      <img id="photo5" <?php echo '<img src="Bussines_Logo_Services_4/'.$value['b_services_logo_4'].'"'; ?>>
				                 <input type="file" name="update_b_services_logo_4" id="file5">
			                    <label for="file5" id="uploadBtn5">Choose Photo</label>
		               </div>		
				                 <div class="typeserve">

				                <div class="input-field">
			                   <label>Services Name</label>
			                      <input type="text" name="update_b_services_name_4" placeholder="Enter services name" required value="<?php echo $value ['b_services_name_4']; ?>">
	                    </div>
				               <div class="input-field">
				               <label>Services Description</label>
			                   <textarea name="update_b_services_description_4" placeholder="Enter services description" required><?php echo $value ['b_services_description_4']; ?></textarea>
	                    </div>
	                     </div>
					
						      			   		
	  <!--Field6-->				   <div class="field">
		                       <div class="input-field">
			                   <label>Services Profile</label>
	                     </div>
	                     </div>
			                    <div class="services-pic6">
			                   <img id="photo6" <?php echo '<img src="Bussines_Logo_Services_5/'.$value['b_services_logo_5'].'"'; ?>>
			                   <input type="file"  name="update_b_services_logo_5" id="file6">
			                    <label for="file6" id="uploadBtn6">Choose Photo</label>
	                     </div>		
			                     <div class="typeserve">

			                     <div class="input-field">
			                    <label>Services Name</label>
			                    <input type="text" name="update_b_services_name_5" placeholder="Enter services name" required value="<?php echo $value ['b_services_name_5']; ?>">
	                     </div>
			                    <div class="input-field">
			                    <label>Services Description</label>
			                    <textarea name="update_b_services_description_5" placeholder="Enter services description" required><?php echo $value ['b_services_description_5']; ?></textarea>
	                      </div>
	                       </div>
				
						<div class="row">
							<input type="submit" name="update_post" class="app-button" value="Update">
							<a href="adminservicestable.php"><input type="button" class="app-button" value="Cancel"></a>
						  </div>
						</div>
						
                       </div><!--Details Personal2 End-->	
                       <?php }?>
					</div>
				</form>
			</div> <!--END OF FORM-->

		</main>
		<script src="js/adminnav.js"></script>
        <script src="js/addupdateuploadfilevetandgroom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
</body>
</html>
