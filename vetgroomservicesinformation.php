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
    <title>Shop Profile</title>

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="css/vetgroomservicesinformation.css">
    <link rel="stylesheet" href="css/responsive.css">
 <!-- ===== Fontawesome CDN Link ===== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>
        
   
</head>

<body>


    <div class="main-bg">
    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">
    <?php foreach ($query as $value){?>
        <!-- ===== ===== Header ===== ===== -->
        <header>
            <div class="brandLogo">
                <span>Shop Infromation</span>
            </div>
        </header>
        <!-- ===== ===== User Main-Profile ===== ===== -->
        <form class="userProfile card">
            <div class="profile">
                <figure><img  <?php echo '<img src="Business_Logo/'.$value['b_logo'].'"'; ?> alt="profile" width="250px" height="250px"></figure>
            </div>
        </form>

        <!-- ===== ===== User Details Sections ===== ===== -->
        <form class="userDetails card">
            <div class="userName">
                <h1 class="name"><?php echo $value['b_name']; ?></h1>
                <p>Business name</p>
                <h2 class="name"><?php echo $value['b_owner']; ?></h2>
                <p>Owner</p>
            </div>

            <div class="timeline_about card">
                <div class="tabs">
                    <ul>
                        <li class="about active">
                            <i class="ri-user-3-fill ri"></i>
                            <span>Description</span>
                        </li>
                    </ul>
                </div>
    
                <div class="contact_Info">
                <p><?php echo $value['b_description']; ?></p>
                </div>
            </div>

            <div class="timeline_about card">
                <div class="tabs">
                    <ul>
                        <li class="about active">
                            <i class="ri-user-3-fill ri"></i>
                            <span>About</span>
                        </li>
                    </ul>
                </div>
    
                <div class="contact_Info">
                    
                    <p></p>

                   
                    <ul>
                        <li class="founded">
                            <h1 class="label">Founded:</h1>
                            <span class="info"> <?php echo $value['b_founded_year']; ?></span>
                        </li>
    
                        <li class="email">
                            <h1 class="label">E-mail:</h1>
                            <span class="info"><a href = "mailto:"><?php echo $value['b_email']; ?></a></span>
                        </li>
                        
                        <li class="contact">
                            <h1 class="label">Phone #:</h1>
                            <span class="info"><a href = "tel:"> <?php echo $value['b_phone']; ?></a></span>
                        </li>

                        <li class="servicespro">
                            <h1 class="label">Services Provide:</h1>
                            <span class="info"><?php echo $value['b_service_provide']; ?></span>
                        </li>
                        <li class="sched">
                            <h1 class="label">Shop Schedule :</h1>
                            <span class="info"><?php echo $value['b_operation_hr']; ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </form>

                <!-- ===== ===== Med & Groom Section ===== ===== -->
                <section class="work_skills card">

                <!-- ===== ===== Work Contaienr ===== ===== -->
                <div class="work">
                    <h1 class="heading">Location</h1>
                    <div class="primary">
                        <h1>Street</h1>
                        <p></span><?php echo $value['b_address']; ?></p>
                        <h1> City </h1>
                        <p></span><?php echo $value['b_city']; ?></p>
                    </div>
                    <div class="map">
                        <iframe src='https://www.google.com/maps?q=<?php echo $value["Latitude"];?>,<?php echo $value["Longitude"]; ?>&hl=es;&output=embed' width="500px" height="450px" ></iframe></iframe>
                    </div>
                </div>


                </section>

        <!--Services-->
            <section class="service" id="service"> 
                <h1 class="name">SERVICE OFFER</h1>   
                    <div class="box-container">
                
                       <div class="box">
                            <img <?php echo '<img src="Bussines_Logo_Services_1/'.$value['b_services_logo_1'].'"'; ?>>
                            <h3><?php echo $value['b_services_name_1']; ?></h3>
                            <p><?php echo $value['b_services_description_1']; ?></p>
                        </div>

                        <div class="box">
                            <img <?php echo '<img src="Bussines_Logo_Services_2/'.$value['b_services_logo_2'].'"'; ?>>
                            <h3><?php echo $value['b_services_name_2']; ?></h3>
                            <p><?php echo $value['b_services_description_2']; ?></p>
                        </div>
                        
                        <div class="box">
                            <img <?php echo '<img src="Bussines_Logo_Services_3/'.$value['b_services_logo_3'].'"'; ?>>
                            <h3><?php echo $value['b_services_name_3']; ?></h3>
                            <p><?php echo $value['b_services_description_3']; ?></p>
                        </div>

                        <div class="box">
                            <img <?php echo '<img src="Bussines_Logo_Services_4/'.$value['b_services_logo_4'].'"'; ?>>
                            <h3><?php echo $value['b_services_name_4']; ?></h3>
                            <p><?php echo $value['b_services_description_4']; ?></p>
                        </div>
                        
                        <div class="box">
                            <img <?php echo '<img src="Bussines_Logo_Services_5/'.$value['b_services_logo_5'].'"'; ?>>
                            <h3><?php echo $value['b_services_name_5']; ?></h3>
                            <p><?php echo $value['b_services_description_5']; ?></p>
                        </div>
                        
                    </div>
                </section>
<!--End of Services-->
       <!--End Of UserDetails-->
       <?php } ?>
    </div> <!--End of Container-->
    <script src="js/sidebarnav.js"></script>
    </body>
    </html>
    <?php include 'ratingreviews.php'; ?>
    <script src="js/rating.js"></script>

