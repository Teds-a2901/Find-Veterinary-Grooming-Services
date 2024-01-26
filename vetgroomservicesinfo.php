<?php
include_once 'navbar.php';
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
 <!--PARA SA SLIDER CARD-->
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <!-- ===== Fontawesome CDN Link ===== -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/vetgroomservicesinfo.css">
    <link rel="stylesheet" href="css/footer.css">
    <!--Custom css file link  -->
    
</head>
<body>
 <!-------SHOPS-->
<!-- About section starts  -->

<form class="about" id="about">
<?php foreach ($query as $value){?>
    <h1 class="heading"> <span> </span> </h1>
    
    <div class="row-1">
    
        <div class="image">
            <img <?php echo '<img src="Business_Logo/'.$value['b_logo'].'"'; ?>>
        </div>
    
        <div class="content">
            <h3><?php echo $value['b_name']; ?></h3>
            <p><?php echo $value['b_description']; ?></p>
            <div class="box-container">
                <div class="box">
                    <p> <span> Owner : </span><?php echo $value['b_owner']; ?></p>
                    <p> <span> Founded : </span><?php echo $value['b_founded_year']; ?></p>
                    <p> <span> Address : </span><?php echo $value['b_address']; ?>
                    <p> <span> Location : </span> <?php echo $value['b_city']; ?> </p>
                    <p> <span> Email : </span><a href = "mailto:"><?php echo $value['b_email']; ?></a></p>
                </div>
                <div class="box">
                    <p> <span> Phone Number : </span><a href = "tel:"><?php echo $value['b_phone']; ?></a></p>
                    <p> <span> Services Provide: </span><?php echo $value['b_service_provide']; ?></p>
                    <p> <span> Hours : </span><?php echo $value['b_operation_hr']; ?></p>
                </div>
            </div>
           <!-- <a href="#" class="btn">ADD TO FAVOURITES</a> -->
        </div>
       
    </div>
    <!-- about section ends -->
    
    <!-- service section starts  -->
    
    <section class="service" id="service">
    
        <h1 class="heading"> <span> Medical & Grooming </span> services </h1>
        <div class="box-container">
        
        <div class="box">
            <img class="imglogologo" <?php echo '<img src="Bussines_Logo_Services_1/'.$value['b_services_logo_1'].'"'; ?>>
            <h1><?php echo $value['b_services_name_1']; ?></h1>
            <p><?php echo $value['b_services_description_1']; ?></p>
        </div>

        <div class="box">
        <img class="imglogologo" <?php echo '<img src="Bussines_Logo_Services_2/'.$value['b_services_logo_2'].'"'; ?>>
            <h1><?php echo $value['b_services_name_2']; ?></h1>
            <p><?php echo $value['b_services_description_2']; ?></p>
        </div>
        <div class="box">
        <img class="imglogologo" <?php echo '<img src="Bussines_Logo_Services_3/'.$value['b_services_logo_3'].'"'; ?>>
            <h1><?php echo $value['b_services_name_3']; ?></h1>
            <p><?php echo $value['b_services_description_3']; ?></p>
        </div>

        <div class="box">
        <img class="imglogologo" <?php echo '<img src="Bussines_Logo_Services_4/'.$value['b_services_logo_4'].'"'; ?>>
            <h1><?php echo $value['b_services_name_4']; ?></h1>
            <p><?php echo $value['b_services_description_4']; ?></p>
        </div>
        <div class="box">
        <img class="imglogologo" <?php echo '<img src="Bussines_Logo_Services_5/'.$value['b_services_logo_5'].'"'; ?>>
            <h1><?php echo $value['b_services_name_5']; ?></h1>
            <p><?php echo $value['b_services_description_5']; ?></p>
        </div>
        
    </div>
            <?php } ?>
            <h1 class="heading"> <span> Shop </span> Ratings </h1>
    <!----CHART STARTS HERE-->
    <div class="charts">
     
        <div class="charts-card">
          
         </div>
         <canvas id="reviewshoplineChart"></canvas>
    </div>
       <!----CHART ENDS HERE-->
        </section>
        <!-- service section ends -->


    <!-- experience section starts  -->
    <!-- experience section ends -->
    </form>
    

<!--REVIEW RATING--->

    <!-- contact section starts  -->
    
    <section class="contact" id="contact">
    
        <h1 class="heading"> Shop <span> Contact</span> </h1>
    
        <div class="icons-container">
    
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Shop Email</h3>
                <p>VetShop@gmail.com</p>
            </div>
    
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Shop Number</h3>
                <p>+123-456-7890</p>
            </div>
    
            <div class="icons">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Shop Location</h3>
                <p>Pinagbuhatan Pasig City</p>
            </div>
    
        </div>
        <div class="row">
    
            <form action="">
    
                <div class="text" placeholder="name" class="box">
                <div class="email" placeholder="email" class="box">
    
                <textarea name="" placeholder="FEEDBACK" id="" cols="30" rows="10"></textarea>
    
                <input type="submit" class="btn" value="send message">
    
            </form>
    
        </div>
    
    
    </section>
	
    
    <!-- contact section ends -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiperservicesinfo.js"></script>
    <script src="js/serviceschart.js"></script>
	<script src="js/rating.js"></script>
</body>
</html>
<!-- START -->
<?php include_once 'ratingreview.php';?>

<?php
include_once 'footer.php';
?>