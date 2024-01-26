<?php 
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';



$sqlrand= "SELECT * FROM `vet_and_groom_services` ORDER BY RAND() LIMIT 6;";
$queryrand = mysqli_query($conn, $sqlrand);


$sqlt5 = "SELECT v. *, ROUND(AVG(r.ratingNumber),1) AS average_rating,
SUM(r.ratingNumber) as total_reviews
FROM vet_and_groom_services as v
INNER JOIN rate_feedbacks as r ON r.vet_and_groom_ID = v.vet_and_groom_ID
GROUP BY v.vet_and_groom_ID
ORDER BY  total_reviews DESC
LIMIT 5";
$querysqlt5 = mysqli_query($conn, $sqlt5);

?>