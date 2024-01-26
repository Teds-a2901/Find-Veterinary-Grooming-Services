<?php
include_once 'navbar.php';
include_once 'includes/dbh.inc.php';
include_once 'includes/adminfunction.inc.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Services </title>
        <link rel="stylesheet" href="css/navbar1.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/vetgroomservices.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
  <!-----MAIN CONTAINER-------->
                        <div class = "main-container">
                            <h2> Services </h2>
                                <!-----SEARCH BOX------>
                                <div class="search-box">
                                    <input type="text" id="MyInput2" placeholder="Where Your Location">
                                    <div class="search-icon">
                                    <i class="fas fa-search"></i>
                                    </div>
                                <div class="cancel-icon">
                                    <i class="fas fa-times"></i>
                                    </div>
                                <div class="search-data">
                                </div>
                                </div>
                                
                                <!----END OF SEARCH BOX----->
                <!-----CATEGORIES------>
                            <div class = "filter-container">
                                <div class = "category-head">
                                    <ul>
                                        <div class = "category-title active" id = "all">
                                            <li>All</li>
                                            <span><i class = "fas fa-border-all"></i></span>
                                        </div>
                                        <div class = "category-title" id = "Grooming">
                                            <li>Grooming</li>
                                            <span><i class = "fas fa-paw"></i></span>
                                        </div>
                                        <div class = "category-title" id = "Veterinary">
                                            <li>Veterinary</li>
                                            <span><i class = "fas fa-paw"></i></span>
                                        </div> 
                                        

                                    </ul>
                                </div>    

                <!-----GROOMING CATEGORY-------->
                <script src="js/rating.js"></script>
                <script>
                            $(document).ready(function () {
                                        $("#MyInput2").on("keyup",function() {
                                            var value =$(this).val().toLowerCase();
                                            $("#output2 div").filter(function(){
                                                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                            
                                            });
                                        });
                                    });
                        </script>
                     <div class = "posts-collect"  id="output2">
                                    <div class = "posts-main-container">                  
                    <?php
                    include 'class/Rating.php';
                    $rating = new Rating();
                    $itemList = $rating->getItemList();
                    foreach($itemList as $item){
                        $average = $rating->getRatingAverage($item["vet_and_groom_ID"]);
                    {?>
                        <div class = "all <?php echo $item['b_service_provide'] ?>"> 
                                        <div class = "post-content">
                                            <img class="blogo" <?php echo '<img src="Business_Logo/'.$item['b_logo'].'"'; ?>> 
                                            <span class = "category-name"><?php echo $item['cat_ID'] ?></span>
                                            <span class = "category-rating"><?php printf('%.1f',$average)?>/5 Rating</span>
                                            <span class = "category-location"><?php echo $item['b_city']; ?></span>    
                                            <h2><?php echo $item['b_name']; ?></h2></h2>
                                            <p><?php echo $item['b_description']; ?></p>
                                            <a href="vetgroomservicesinformation.php?vet_and_groom_ID=<?php echo $item['vet_and_groom_ID']?>"><button type = "button" class = "read-btn">View More</button></a>
                                        </div>

                        </div>
                    <?php }} ?> 
            
                                
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
        <script src="js/rating.js"></script>
        <script src="js/sidebarnav.js"></script>


        <!-- ===== Para sa Footer ===== -->

    </body>
</html>
<?php
include_once 'footer.php';
?>