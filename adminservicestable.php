<?php
  include_once 'includes/dbh.inc.php';
  include 'includes/adminfunction.inc.php';
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
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminnavside.css">
    <link rel="stylesheet" href="css/admindashboard.css">
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
			<li class="active">
				<a href="adminservicestable.php">
					<i class='bx bx-table'></i>
					<span class="text">Services</span>
				</a>
			</li>

			<li>
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
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			
		</nav>
		<!--END OF NAVBAR -->

<main>
			<div class="head-title">
				<div class="left">
					<h1>Find <br>VET&GROOM</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Services Table</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="admindashboard.php">Home</a>
						</li>
					</ul>
				</div>
				<a href="addadminvetandgrom.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Add SHOP</span>
				</a>
			</div>
			<script>
                $(document).ready(function () {
                    $("#MyInput1").on("keyup",function() {
                        var value =$(this).val().toLowerCase();
                        $("#output1 tr").filter(function(){
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                         
                        });
                    });
                });
           </script>
            <div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Services Management</h3>
						<input type="search" placeholder="Search..." id="MyInput1">
					</div>
					<table>
						<thead>
							<tr>
								<th>#</th>
								<th>Logo</th>
								<th>Name of Shop</th>
                                <th>Owner</th>
                                <th>Address</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody id="output1">
						<?php 
						$sqlt = mysqli_query($conn, "SELECT * FROM vet_and_groom_services");
						$count=1;
						$vettale = mysqli_num_rows($sqlt);
						if($vettale > 0){
							while($vettale = mysqli_fetch_array($sqlt)){
						?>	
							<tr>
								<td><?php echo $count;?></td>
								<td>
									<img <?php echo '<img src="Business_Logo/'.$vettale['b_logo'].'"'; ?>>
									<td><?php echo $vettale ['b_name'];?></td>
								</td>
								<td><?php echo $vettale ['b_owner'];?></td>
								<td><?php echo $vettale ['b_address'];?></td>
								<td><span class="status completed"><a href="updatedeletevetandgroom.php?vet_and_groom_ID=<?php echo $vettale['vet_and_groom_ID']?>" class="edit">Edit</a></span></td>
								<td><span class="status pending"><a href="adminservicestable.php?delidvet=<?php echo $vettale['vet_and_groom_ID']?>" onClick="return confirm('Do you really want to remove this record?');" class="delete">Delete</a></span></td>
							</tr>
						<?php 
						$count = $count+1;
					}}?>

						</tbody>
					</table>
				</div>
	<?php
        if (isset($_GET["info"])) {
        if ($_GET["info"] == "updated") {
        ?>
                    <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Modified/Update</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
					<?php
				}
				elseif ($_GET["info"] == "added") {
					?>
						 <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Added to the Database</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
					<?php
				}
				elseif ($_GET["info"] == "failed") {
					?>
						 <div class="show2">
                        <div class="show2-content">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                            <div class="message2">
                                <span class="text text-1">Warning</span>
                                <span class="text text-2">Failed to Add</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close2"></i>
                        <div class="progress2"></div>
                    </div>
					<?php
				}
				elseif ($_GET["info"] == "deleted") {
					?>
					<div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Deleted</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
					<?php
				}
	} ?>
	<script src="js/danger.js"></script>
	<script src="js/sucess.js"></script>			
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
	<script src="js/adminnav.js"></script>
	<script src="js/chart.js"></script>
</main>
</body>
</html>