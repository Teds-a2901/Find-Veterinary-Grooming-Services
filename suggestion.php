<?php
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veterinary Shop Profile</title>

    <!--Font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <!--PARA SA SLIDER CARD-->
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="suggestion.css">
    <!--Custom css file link  -->
    <link rel="stylesheet" href="css/suggestion.css">

   

</head>
<body>
   
  <!-- Suggestions Card-->
<div class="slide-container swiper">
    <h1 class="heading"> <span> Suggestions </span> for Users: </h1>
    <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                    <?php foreach ($query as $value){?>
                        <img class="card-img" <?php echo '<img src="Business_Logo/'.$value['b_logo'].'"'; ?>>
                    </div>
                </div>

                <div class="card-content">
                    
                    <h2 class="name"><?php echo $value['b_owner']; ?></h2>
                    <p class="description"><?php echo $value['b_description']; ?></p>

                    <button class="button">View More</button>
                    <?php } ?>  
                </div>
            </div>        
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
</div>
<!--Suggestion Card End-->
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->

<!-- Swiper JS -->
  <script src="js/swiperservicesinfo.js"></script>
  
</body>
</html>