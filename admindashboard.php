<?php
  include_once 'includes/dbh.inc.php';
  include_once 'includes/adminfunction.inc.php';
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminnavside.css">
    <link rel="stylesheet" href="css/admindashboard.css">
	<link rel="stylesheet" href="css/loginsucess.css">
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
			<li class="active">
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
				<a href="addadminvetandgrom.php" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Add SHOP</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
				<i class='bx bxs-group' ></i>
					<span class="text">
						<?php
						$query = "SELECT usersId FROM users ORDER BY usersId";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p>Total User</p>
					</span>
				</li>
				<li>
				<i class='bx bxs-store-alt'></i>
					<span class="text">
					<?php
						$query = "SELECT vet_and_groom_ID FROM vet_and_groom_services ORDER BY vet_and_groom_ID";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p>Total Services</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-star' ></i>
					<span class="text">
					<?php
						$query = "SELECT rate_feedback_ID FROM rate_feedbacks ORDER BY rate_feedback_ID";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p>Total Review</p>
					</span>
				</li>
			</ul>

		<!-----DITO YUN MAG SISIMULA------>	
		
				<!----LINE GRAPH ------->
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3> Pie Graph </h3>
					</div>
					<?php
					$connn = mysqli_connect("localhost", "root", "", "vetgroom_services_db");
					if(!$connn){
						echo "Disconnected!!".mysqli_error();
					}else{
						$sl1 = "SELECT COUNT(*) as scale FROM `rate_feedbacks` UNION ALL SELECT COUNT(*) FROM `users` UNION ALL SELECT COUNT(*) FROM `vet_and_groom_services`;";
						$result1 = mysqli_query($connn,$sl1);
						while($row1 = mysqli_fetch_array($result1)){
							$user_rating1[] = $row1['scale'];
						}
					}
					?>
					<div>
					<canvas id="pieChart"></canvas>
					<script>
						const pieChart = document.getElementById('pieChart').getContext('2d');
						const myChart2 = new Chart(pieChart, {
							type: 'polarArea',
							data: {
								labels:['Total Review', 'Total Users', 'Total Of Veterinary and Grooming Services'],
								datasets: [{
									label: '# of Votes',
									data: <?php echo json_encode($user_rating1)?>,
									backgroundColor: [
										'rgba(255, 99, 132, 0.2)',
										'rgba(54, 162, 235, 0.2)',
										'rgba(255, 206, 86, 0.2)',
										'rgba(75, 192, 192, 0.2)',
										'rgba(153, 102, 255, 0.2)',
										'rgba(255, 159, 64, 0.2)'
									],
									borderColor: [
										'rgba(255, 99, 132, 1)',
										'rgba(54, 162, 235, 1)',
										'rgba(255, 206, 86, 1)',
										'rgba(75, 192, 192, 1)',
										'rgba(153, 102, 255, 1)',
										'rgba(255, 159, 64, 1)'
									],
									borderWidth: 1
								}]
							},
							options: {
								scales: {
									y: {
										beginAtZero: true
									}
								}
							}
						});

					</script>
				</div>
			</div> 
				<!----PIE GRAPH ---->
				<div class="todo">
					<div class="head">
						<h3>Top 5 Rating of Services</h3>
					</div>
					<?php
						$con = mysqli_connect("localhost", "root", "", "vetgroom_services_db");
						if(!$con){
						echo "Disconnected!!".mysqli_error();
						}else{
						$sl = "SELECT v. *, ROUND(AVG(r.ratingNumber),1) AS average_rating,
						SUM(r.ratingNumber) as total_reviews
						FROM vet_and_groom_services as v
						INNER JOIN rate_feedbacks as r ON r.vet_and_groom_ID = v.vet_and_groom_ID
						GROUP BY v.vet_and_groom_ID
						ORDER BY  total_reviews DESC
						LIMIT 5";
						$result = mysqli_query($con,$sl);
						while($row = mysqli_fetch_array($result)){
						$usersName[] = $row['b_name'];
						$user_rating[] = $row['total_reviews'];
						}
						}
						?>
					<div>
					<canvas id="MyChart" width="700" height="680">></canvas>
					</div>
					<script>
					const labels = <?php echo json_encode($usersName)?>;
					const data = {
						labels: labels,
						datasets: [{
						label: '',
						data: <?php echo json_encode($user_rating)?>,
						backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(255, 159, 64, 0.2)',
						'rgba(255, 205, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(201, 203, 207, 0.2)'
						],
						borderColor: [
						'rgb(255, 99, 132)',
						'rgb(255, 159, 64)',
						'rgb(255, 205, 86)',
						'rgb(75, 192, 192)',
						'rgb(54, 162, 235)',
						'rgb(153, 102, 255)',
						'rgb(201, 203, 207)'
						],
						borderWidth: 1,
						}]
					};

					const config = {
					type: 'bar',
					data: data,
					options: {
						plugins:{
							legend:{
								onClick: (evt, legendItem, legend) =>{
									const index = legend.chart.data.labels.indexOf(legendItem.text);
									legend.chart.toggleDataVisibility(index);
									console.log(legend.chart.getDataVisibility(index));
									legend.chart.update();
								},
								labels:{
									generateLabels: (chart) => {
										let visibility = [];
										for(let i = 0; i < chart.data.labels.length; i++){
											if(chart.getDataVisibility(i)==true){
												visibility.push(false)
											}else{
												visibility.push(true)
											}
										};
										return chart.data.labels.map(
											(label, index) => ({
											text:label,
											strokeStyle: chart.data.datasets[0].borderColor[index],
											fillStyle: chart.data.datasets[0].backgroundColor[index],
											hidden: visibility[index]
										})
										)

									}
								}
							}
						},
						scales: {
						y: {
							beginAtZero: true
						}
						}
					},
					};
					const MyChart = new Chart(
						document.getElementById('MyChart'),
						config,
					);
					</script>
				</div>
			</div>
		
         <!----Recently------->
		</main>
		<!--END OF MAIN -->

	<!--END OF CONTENT -->
	<?php
	if (isset($_GET["error"])) {
        if ($_GET["error"] == "none") {
        ?>
                     <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Logged In</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
 <?php }} ?>
	<script src="js/sucess.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
	<script src="js/adminnav.js"></script>
</body>
</html>