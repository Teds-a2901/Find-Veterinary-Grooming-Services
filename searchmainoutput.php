<?php
  require_once 'includes/searchconoutput.inc.php';

  if (isset($_POST['query'])) {
    $inpText = $_POST['query'];
    $sql = 'SELECT * FROM vet_and_groom_services WHERE b_name LIKE :name';
    $stmt = $conn->prepare($sql);
    $stmt->execute(['name' => '%' . $inpText . '%']);
    $result = $stmt->fetchAll();

    if ($result) {
      foreach ($result as $row) {
        /*echo '<img src="Business_Logo" class="width=200px">'.$row['b_logo'].'</img>';*/
        echo '<li><a href="vetgroomservicesinformation.php?vet_and_groom_ID='.$row['vet_and_groom_ID'].'" class="table"><img  src="Business_Logo/'.$row['b_logo'].'" class="rounded-0" style="width: 40px; height:40px; margin-right: 20px; border-radius:50%;" > ' . $row['b_name'] . '</a></li>';
      }
    } else {
      echo '<li><h1><p class="table">No Record Try Again..</p></h1></li>';
    }
  }
?>