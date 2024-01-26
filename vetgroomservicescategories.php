<?php
include_once 'navbar.php';
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';
include_once 'includes/categoriesfunction.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Services </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/vetgroomservicescategories.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
  <!-----MAIN CONTAINER-------->
                        <div class = "main-container">
                            <h2> Services Categories </h2>
                            <img src="images/Goods.png">
                            
                                <!-----SEARCH BOX------>
                                <!--<div class="search-box">
                                    <input type="text" id="MyInput2" placeholder="Where Your Location">
                                    <div class="search-icon">
                                    <i class="fas fa-search"></i>
                                    </div>
                                <div class="cancel-icon">
                                    <i class="fas fa-times"></i>
                                    </div>
                                <div class="search-data">
                                </div>
                                </div>-->
                                
                                <!----END OF SEARCH BOX----->

                <!-----GROOMING CATEGORY-------->
                        
                    <div class = "posts-collect" id="output2">
                                <div class = "posts-main-container">  
                                    <?php
                                        $categories=getAllActive("categories");
                                        if(mysqli_num_rows($categories) > 0){
                                            foreach($categories as $item){
                                                ?>
                                                    
                                                    <div class = "all">
                                                    <a href="vetgroomservicescategoriesoutput.php?categories=<?php echo $item['cat_name']; ?>">
                                                            <div class = "post-content">
                                                                <div class="rating">
                                                                </div>
                                                                <img src="vetphoto/<?php echo $item['cat_img']; ?> " width="100">
                                                                <h2><?php echo $item['cat_name'];?></h2>
                                                    
                                                            </div>
                                                    </a>
                                                    </div>
                                                    
                                                <?php
                                            }
                                        }?>                                                          
                                     
                            </div>
                        </div>
                    </div>
</div>
        <!------END OF Veterinary CATEGORY------->

        <!----END OF GROOM & VET-------->

        <!-- JS file For Category -->
        <script src = "js/vetgromservicecategories.js"></script>
<!---FOR SEARCH BOX----->
        <script src = "js/vetgromservicessearchbox.js"></script>


        <!-- ===== Para sa Footer ===== -->

    </body>
</html>
<?php
include_once 'footer.php';
?>