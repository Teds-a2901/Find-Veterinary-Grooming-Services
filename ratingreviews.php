<script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <!--Start Rate and Review-->
    <?php
    include 'class/Rating.php';
	$rating = new Rating();
	$itemDetails = $rating->getItem($_GET['vet_and_groom_ID']);
	foreach($itemDetails as $item){
		$average = $rating->getRatingAverage($item["vet_and_groom_ID"]);
		
	?>
	<?php } ?>

		
	<?php	
	$itemRating = $rating->getItemRating($_GET['vet_and_groom_ID']);	
	$ratingNumber = 0;
	$count = 0;
	$fiveStarRating = 0;
	$fourStarRating = 0;
	$threeStarRating = 0;
	$twoStarRating = 0;
	$oneStarRating = 0;	
    $count1 = 5;
	foreach($itemRating as $rate){
		$ratingNumber+= $rate['ratingNumber'];
		$count += 1;
		if($rate['ratingNumber'] == 5) {
			$fiveStarRating +=1;
		} else if($rate['ratingNumber'] == 4) {
			$fourStarRating +=1;
		} else if($rate['ratingNumber'] == 3) {
			$threeStarRating +=1;
		} else if($rate['ratingNumber'] == 2) {
			$twoStarRating +=1;
		} else if($rate['ratingNumber'] == 1) {
			$oneStarRating +=1;
		}
	}
	$average = 0;
	if($ratingNumber && $count) {
		$average = $ratingNumber/$count;
	}	
	?>
    
    <div class="feed-container">
        <div class="rating-review" id="ratingDetails">
           <div class="tri table-flex">
            <table>
                <tbody>
                    <tr>
                        <td>
                        <div class="rnb rvl"><!--No. of Reviews-->
                                <h3><?php printf('%.1f', $average); ?>/5.0</h3>
                                <?php
                                $averageRating = round($average, 0);
                                for ($i = 1; $i <= 5; $i++) {
                                    $ratingClass = "rating-stars";
                                    if($i <= $averageRating) {
                                        $ratingClass = "colorsssss";
                                    }
                                ?>
                            </div>
                            <div class="pdt-rate">
                                <div class="pro-rating">
                                    <div class="clearfix rating mart8">
                                        <div class="rating-stars">
                                        <button type="button" class="starsize <?php echo $ratingClass; ?>" aria-label="Left Align">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        </button>   
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="rnrn">
                                <p type="hidden" class="rars"><?php echo $count; ?> Reviews</p>
                        </div><!--End no. of reviews-->
                        </td>
                        <td>
                        <?php
                        if($count!=0){
                        $fiveStarRatingPercent = round(($fiveStarRating/$count)*100);
                        $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
                        
                        $fourStarRatingPercent = round(($fourStarRating/$count)*100);
                        $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
                        
                        $threeStarRatingPercent = round(($threeStarRating/$count)*100);
                        $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
                        
                        $twoStarRatingPercent = round(($twoStarRating/$count)*100);
                        $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
                        
                        $oneStarRatingPercent = round(($oneStarRating/$count)*100);
                        $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
                        }else{
                            $fiveStarRatingPercent = round(($fiveStarRating/$count1)*100);
                            $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
                            
                            $fourStarRatingPercent = round(($fourStarRating/$count1)*100);
                            $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
                            
                            $threeStarRatingPercent = round(($threeStarRating/$count1)*100);
                            $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
                            
                            $twoStarRatingPercent = round(($twoStarRating/$count1)*100);
                            $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
                            
                            $oneStarRatingPercent = round(($oneStarRating/$count1)*100);
                            $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';   
                        }
				        ?>
                            <div class="rqb"><!--Rating Meter-->
                                <div class="rnpb">
                                    <label>5</label>
                                    <div class="ropb">
                                        <div class="ripb"   aria-valuenow="5" aria-valuemin="0" aria-valuemax="5" style="max-width:<?php echo $fiveStarRatingPercent;?>"></div>
                                    </div>
                                    <div class="label"><?php echo $fiveStarRatingPercent;?></div>
                                </div>
                            </div>
                            <div class="rqb">
                                <div class="rnpb">
                                    <label>4</label>
                                    <div class="ropb">
                                        <div class="ripb" role="progressbar"  aria-valuenow="4" aria-valuemin="0" aria-valuemax="5" style="max-width:<?php echo $fourStarRatingPercent; ?>"></div>
                                    </div>
                                    <div class="label"><?php echo $fourStarRatingPercent;?></div>
                                </div>
                            </div>
                            <div class="rqb">
                                <div class="rnpb">
                                    <label>3</label>
                                    <div class="ropb">
                                        <div class="ripb" role="progressbar" aria-valuenow="3" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $threeStarRatingPercent; ?>"></div>
                                    </div>
                                    <div class="label"><?php echo $threeStarRatingPercent;?></div>
                                </div>
                            </div>
                            <div class="rqb">
                                <div class="rnpb">
                                    <label>2</label>
                                    <div class="ropb">
                                        <div class="ripb" role="progressbar"  aria-valuenow="2" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $twoStarRatingPercent; ?>"></div>
                                    </div>
                                    <div class="label"><?php echo $twoStarRatingPercent;?></div>
                                </div>
                            </div>
                            <div class="rqb">
                                <div class="rnpb">
                                    <label>1</label>
                                    <div class="ropb">
                                        <div class="ripb" role="progressbar"  aria-valuenow="1" aria-valuemin="0" aria-valuemax="5" style="width: <?php echo $oneStarRatingPercent; ?>"></div>
                                    </div>
                                    <div class="label"><?php echo $oneStarRatingPercent;?></div>
                                </div>
                            </div><!--End of rating meter-->
                        </td>
                        <td>
                            <div class="rrb"><!--Add Review Button-->
                            <?php if (!isset($_SESSION["user_id"])){?>
                            <?php }else{ ?>
                                <p>Please Review the Shop</p>
                                <a href="feedbackreview.php?vet_and_groom_ID=<?php echo $value['vet_and_groom_ID']?>"><button type="button" id="rateProduct" class="rbtn opmd <?php if(!empty($_SESSION["user_id"]) && $_SESSION["user_id"] ){} ?>">Add Review</button></a>
                            <?php } ?>
                            </div><!--End of Add review button-->
                        </td>
                    </tr>
                </tbody>
    
            </table>
           </div>
              <div class="bri"><!--User Review-->
              <?php
				$itemRating = $rating->getItemRating($_GET['vet_and_groom_ID']);
				foreach($itemRating as $rating){				
					$date=date_create($rating['created']);
					$reviewDate = date_format($date,"M d, Y");						
					$profilePic = "profile.png";	
					if($rating['image']) {
						$profilePic = $rating['image'];	
					}
				?>
                <div class="uscm">
                    <div class="uscm-secs">
                     <div class="us-img"><!--User profile-->
                        <img src="uploaded_img/<?php echo $profilePic; ?>">
                     </div>
                     <div class="uscms">
                        <div class="us-rate"><!--STARS-->
                            <div class="pdt-rate">
                                <div class="pro-rating">
                                    <div class="clearfix rating mart8">
                                    <?php
                                        for ($i = 1; $i <= 5; $i++) {
                                            $ratingClass = "rating-stars";
                                            if($i <= $rating['ratingNumber']) {
                                                $ratingClass = "colorsssss";
                                            }
                                        ?>
                                        <div type="hidden" class="colorsssss"></div>
                                        <div class="rating-stars">
                                        <button type="button" class="starsize <?php echo $ratingClass; ?>" aria-label="Left Align">
                                        <span class="fa fa-star" aria-hidden="true"></span>
                                        </button>
                                        </div>
                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="us-cmt"><!--User Comment-->
                            <p>Title: <?php echo $rating['title']; ?></p>
                            <p>Comment:<br><?php echo $rating['comments']; ?></p>
                        </div>
                        <div class="us-nm"><!--User Details-->
                            <p><i>By <span class="cmnm"><?php echo $rating['usersName']; ?></span> on <span class="cmdt"><?php echo $reviewDate; ?></span></i></p>
                        </div>
                     </div>
                    </div>
                    <?php } ?>
                </div>
              </div>
        </div>
    </div>
</div>
</body>
</html>
