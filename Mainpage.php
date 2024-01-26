<?php
  include 'navbar.php';
  include_once 'includes/dbh.inc.php';
  include_once 'includes/adminfunction.inc.php';
  include_once 'includes/select.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <Title>Find Vet&Groom</Title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== Para sa CSS ===== -->
    <link rel="stylesheet" href="css/mainpage.css">
    <link rel="stylesheet" href="css/loginsucess.css">
        <!--PARA SA SLIDER CARD-->
    <!-- ===== Link Swiper's CSS ===== -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- ===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<title>Responsive Navigation Menu Bar</title>-->
</head>
<body>
    <!--Search for veterinary services-->
    <div class="wrapper"></div>
     <div class="search_wrap">
        <div class="search_box">
            <input type="text" id="search_main" placeholder="Search for Veterinary Services....." autocomplete="off" class="form-control form-control-lg rounded-1 border-info" style="width:100%; height:70%;" required />
            <div class="form-control form-control-lg rounded-1 border-info" id="show-list">
            <!-- Here autocomplete list will be display -->
            </div>
        </div>
    </div>
    <!--END OF VETERINARY SERVICES-->

    <div class="slider">
      <div class="slide active">
        <a href= "vetgroomservicescategoriesoutput.php?categories=Veterinary">
        <img src="img/img2.jpg" alt="">
        <div class="info">
          <h2> Veterinary </h2>
          <p> Treat the injuries and illnesses of pets and other animals with a variety of medical equipment, including surgical tools and x-ray and ultrasound machines. They provide treatment for animals that is similar to the services a physician provides to humans.</p>
        </div>
        </a>
      </div>
      <div class="slide">
        <img src="img/img3.jpg" alt="">
        <a href= "vetgroomservicescategoriesoutput.php?categories=Veterinary">
        <div class="info">
          <h2> Animal medical Care</h2>
          <p> The treatment that an animal receives is covered by other terms such as animal care, animal husbandry, and humane treatment. Protecting an animal's welfare means providing for its physical and mental needs.</p>
        </div>
        </a>
      </div>
      <div class="slide">
        <a href= "vetgroomservicescategoriesoutput.php?categories=Grooming">
        <img src="img/img4.jpg" alt="">
        <div class="info">
          <h2> Grooming </h2> </a>
          <p>Bathing and clipping dogs to conform to a variety of breed-specific standard styles. Detangling and removing matted hair. Drying the coat. Checking for parasites and other skin conditions. Trimming nails.</p>
        </div>
        </a>
      </div>
      <div class="slide">
        <a href= "vetgroomservicescategories.php">
        <img src="img/img5.jpg" alt="">
        <div class="info">
          <h2> Vet & Groom </h2>
          <p>
            The hygienic care and cleaning of a dog, as well as a process by which a dog's physical appearance is enhanced for showing or other types of competition.
            Most veterinarians diagnose animal health problems, vaccinate against diseases, medicate animals suffering from infections or illnesses, treat and dress wounds, set fractures, perform surgery, and advise owners about animal feeding, behavior, and breeding.
          </p>
        </div>
        </a>
      </div>
      <div class="navigation">
        <i class="fas fa-chevron-left prev-btn"></i>
        <i class="fas fa-chevron-right next-btn"></i>
      </div>
      <div class="navigation-visibility">
        <div class="slide-icon active"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
        <div class="slide-icon"></div>
      </div>
    </div>

    <!--CARDS-->

    <div class="container">
      <div class="heading1">
        <h1>Suggestions:</h1>
       </div>
      <input type="radio" name="dot" id="one">
      <input type="radio" name="dot" id="two">
      <div class="main-card">
      <?php foreach ($queryrand as $value){?>
        <div class="cards">
          <div class="card">
           <div class="content">
             <div class="img">
              <img <?php echo '<img src="Business_Logo/'.$value['b_logo'].'"'; ?>>
             </div>
             <div class="details">
              <div class="name"><?php echo $value['b_name'] ?></div>
              <div class="job"><?php echo $value['b_service_provide'] ?></div>
             </div>
             <div class="media-icons">
               <a  href="vetgroomservicesinformation.php?vet_and_groom_ID=<?php echo $value['vet_and_groom_ID']?>"><i class="fas fa-paw"></i></a>
             </div>
           </div>
          </div>
        </div>
        <?php }?>
      </div>
      <div class="button">
        <label for="one" class=" active one"></label>
        <label for="two" class="two"></label>
      </div>
    </div>

    <form class="about" id="about">

      <h1 class="heading"></h1>
      
      <div class="row-1">
      
          <div class="content">
              <h3> About Find VET&GROOM </h3>
              <div class="box-container">
                  <div class="box">
                      <p> Find VET&GROOM is a web application that is a pur-parent friendly. Find VET&GROOM helps the users to find and to connect them to their choosen vet and groom service providers. The Find VET&GROOM have so many categories you can choose to your pur-baby, from the veterinary services to grooming service there is so many service for your pet. </p>
                      
                  </div>
              </div>
          </div>
          <div class="image">
              <img src="images/DoggoLogo.png" alt="">
          </div>
      </div>
      
      <div class="row-2">
          <div class="image">
              <img src="images/undraw_team_collaboration_re_ow29.svg" alt="">
          </div>
          <div class="content">
              <h3> Our User </h3>
              <!--<h1> Sausa, Bryan Paolo A. </h1>-->
              <div class="box-container">
                  <div class="box">
                      <p> At Find VET&GROOM, We ensure that our users will find a good and quality services of Veterinary and Grooming for their beloved pets. And we also want to help some Vet and Groom shops by posting their Ratings and Feedbacks of their satisfied customers so that the other customers will see if their shop is good or not.    </p>
                      
                  </div>
              </div>
          </div>
      </div>
      </form>
      <?php
        if (isset($_GET["successful"])) {
        if ($_GET["successful"] == "login") {
        ?>
                     <div class="show1">
                        <div class="show1-content">
                        <i class="fa-solid fa-check"></i>
                            <div class="message1">
                                <span class="text text-1">Successfully</span>
                                <span class="text text-2">Logged-in</span>
                            </div>
                        </div>
                        <i class="fa-solid fa-xmark close1"></i>
                        <div class="progress1"></div>
                    </div>
 <?php }} ?>

      <!--END OF CARDS-->
     <!-- Swiper JS -->
    <script src="js/mainpagecarousel.js"></script>
    <script src="js/sidebarnav.js"></script>
    <script src="js/searchmainoutput.js"></script>
    <script src="js/danger.js"></script>
    <script src="js/warning.js"></script>
    <script src="js/sucess.js"></script> 
</body>
</html>
<?php
  include 'footer.php';
?>