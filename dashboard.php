<?php
  include 'navbar.php';
  include 'includes/select.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link rel="icon" type="image/x-icon" href="images/DoggoLogo.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/dashboard.css">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.0/dist/chart.min.js"></script>
	<title>Dashboard</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/footers.css">

	<title>DashBoard</title>
</head>
<body>
    <!--START OF MAIN -->
    <section id="content">
		<main>
<!-----SEARCH BOX------>

<!----END OF SEARCH BOX----->
				</div>
			</div>
         <!----Recently------->
			<div class="table-data">
				<div class="order">
					<div class="head">
                        <h3>LIST OF TOP 5 SERVICES</h3>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name of Shops</th>
								<th>Categories</th>
								<th>Rating</th>
								<th>Location</th>
								<th>View More</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<?php
							foreach($querysqlt5 as $item){
							?>
								<td>
									<img <?php echo '<img src="Business_Logo/'.$item['b_logo'].'"'; ?>>
									<p><?php echo $item ['b_name'];?></p>
								</td>
								<td><?php echo $item ['b_service_provide'];?></td>
								<td><span class="status pending"><?php echo $item['average_rating'] ?>/5 Rating</span></td>
								<td><?php echo $item ['b_city'];?></td>
								<td><span class="status completed"><a href="vetgroomservicesinformation.php?vet_and_groom_ID=<?php echo $item['vet_and_groom_ID']?>" class="action">View More</a></span></td>

							</tr>
						</tbody>
						<?php 
					}?>
					</table>
					
				</div>
				
				<!----Ranking----->
				<div class="todo">
					<div class="head">
						<h3>Total reviews of TOP 5 Services </h3>
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
		<canvas id="shoprankinglineChart"></canvas>

		
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
					const shoprankinglineChart = new Chart(
						document.getElementById('shoprankinglineChart'),
						config,
					);
					</script>
				</div>
			</div>

            <ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<?php
						$query = "SELECT usersId FROM users ORDER BY usersId";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p> User</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<?php
						$query = "SELECT vet_and_groom_ID FROM vet_and_groom_services ORDER BY vet_and_groom_ID";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p>Services</p>
						</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
					<?php
						$query = "SELECT rate_feedback_ID FROM rate_feedbacks ORDER BY rate_feedback_ID";
						$query_run = mysqli_query($conn, $query);

						$row = mysqli_num_rows($query_run);
						echo '<h3>'.$row.'</h3';
						?>
						<p>Reviews</p>
					</span>
				</li>
			</ul>
		</main>
    </section>
		<!--END OF MAIN -->
	<script src="js/vetgromservicessearchbox.js"></script>
    <script src="js/sidebarnav.js"></script>
	<script src="js/userchart.js"></script>
</body>
</html>

<?php
  include 'footer.php';
?>