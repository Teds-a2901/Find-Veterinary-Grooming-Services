<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/functions.inc.php';

$sql= "SELECT * FROM vet_and_groom_services ORDER BY b_name";
$query = mysqli_query($conn, $sql);

$sqlcd = "SELECT * FROM categories ORDER BY cat_ID";
$querycd = mysqli_query($conn, $sqlcd);


$ad = "SELECT * FROM admin";
$sd = mysqli_query($conn, $ad);



if(isset($_POST["add-post"])){
    $add_b_logo = $_FILES['add_b_logo']['name'];
    $add_b_logo_size = $_FILES['add_b_logo']['size'];
    $add_b_logo_tmp_name = $_FILES['add_b_logo']['tmp_name'];
    $add_b_logo_folder = 'Business_Logo/'.$add_b_logo;
    $add_b_admin_id = mysqli_real_escape_string($conn, $_POST["add_b_admin_id"]);
    $add_b_name = mysqli_real_escape_string($conn, $_POST["add_b_name"]);
    $add_b_owner = mysqli_real_escape_string($conn, $_POST["add_b_owner"]);
    $add_b_address = mysqli_real_escape_string($conn, $_POST['add_b_address']);

    $add_Latitude = mysqli_real_escape_string($conn, $_POST['Latitude']);
    $add_Longitude = mysqli_real_escape_string($conn, $_POST['Longitude']);

    $add_b_phone = mysqli_real_escape_string($conn, $_POST['add_b_phone']);
    $add_b_country = mysqli_real_escape_string($conn, $_POST['add_b_country']);
    $add_b_email = mysqli_real_escape_string($conn, $_POST['add_b_email']);
    $add_b_description = mysqli_real_escape_string($conn, $_POST['add_b_description']);
    $add_b_founded = mysqli_real_escape_string($conn, $_POST['add_b_founded_year_in_business']);
    $add_b_operation_hr = mysqli_real_escape_string($conn, $_POST['add_b_operation_hr']);
    $add_b_service_provide = mysqli_real_escape_string($conn, $_POST['add_provide_name']);
    $add_b_service_provide1 = mysqli_real_escape_string($conn, $_POST['cat_ID']);
   
    /*Services 1 */
    $add_b_services_logo_1 = $_FILES['add_b_services_logo_1']['name'];
    $add_b_services_logo_1_size = $_FILES['add_b_services_logo_1']['size'];
    $aadd_b_services_logo_1_tmp_name = $_FILES['add_b_services_logo_1']['tmp_name'];
    $add_b_services_logo_1_folder = 'Bussines_Logo_Services_1/'.$add_b_services_logo_1;
    $add_b_services_name_1 = mysqli_real_escape_string($conn, $_POST['add_b_services_name_1']);
    $add_b_services_description_1 = mysqli_real_escape_string($conn, $_POST['add_b_services_description_1']);
   /* Services 2 */
    $add_b_services_logo_2 = $_FILES['add_b_services_logo_2']['name'];
    $add_b_services_logo_2_size = $_FILES['add_b_services_logo_2']['size'];
    $aadd_b_services_logo_2_tmp_name = $_FILES['add_b_services_logo_2']['tmp_name'];
    $add_b_services_logo_2_folder = 'Bussines_Logo_Services_2/'.$add_b_services_logo_2;
    $add_b_services_name_2 = mysqli_real_escape_string($conn, $_POST['add_b_services_name_2']);
    $add_b_services_description_2 = mysqli_real_escape_string($conn, $_POST['add_b_services_description_2']);
    /* Services 3 */
    $add_b_services_logo_3 = $_FILES['add_b_services_logo_3']['name'];
    $add_b_services_logo_3_size = $_FILES['add_b_services_logo_3']['size'];
    $aadd_b_services_logo_3_tmp_name = $_FILES['add_b_services_logo_3']['tmp_name'];
    $add_b_services_logo_3_folder = 'Bussines_Logo_Services_3/'.$add_b_services_logo_3;
    $add_b_services_name_3 = mysqli_real_escape_string($conn, $_POST['add_b_services_name_3']);
    $add_b_services_description_3 = mysqli_real_escape_string($conn, $_POST['add_b_services_description_3']);
   /* Services 4 */
    $add_b_services_logo_4 = $_FILES['add_b_services_logo_4']['name'];
    $add_b_services_logo_4_size = $_FILES['add_b_services_logo_4']['size'];
    $aadd_b_services_logo_4_tmp_name = $_FILES['add_b_services_logo_4']['tmp_name'];
    $add_b_services_logo_4_folder = 'Bussines_Logo_Services_4/'.$add_b_services_logo_4;
    $add_b_services_name_4 = mysqli_real_escape_string($conn, $_POST['add_b_services_name_4']);
    $add_b_services_description_4 = mysqli_real_escape_string($conn, $_POST['add_b_services_description_4']);
    /* Services 5 */
    $add_b_services_logo_5 = $_FILES['add_b_services_logo_5']['name'];
    $add_b_services_logo_5_size = $_FILES['add_b_services_logo_5']['size'];
    $aadd_b_services_logo_5_tmp_name = $_FILES['add_b_services_logo_5']['tmp_name'];
    $add_b_services_logo_5_folder = 'Bussines_Logo_Services_5/'.$add_b_services_logo_5;
    $add_b_services_name_5 = mysqli_real_escape_string($conn, $_POST['add_b_services_name_5']);
    $add_b_services_description_5 = mysqli_real_escape_string($conn, $_POST['add_b_services_description_5']);



    mysqli_query($conn, "INSERT INTO vet_and_groom_services (b_logo, b_name, b_owner, b_address, Latitude, Longitude, b_phone, b_city, b_email, b_description, b_founded_year, 
    b_operation_hr, admin_Id, b_service_provide, cat_ID, 
    b_services_logo_1, b_services_name_1, b_services_description_1,
    b_services_logo_2, b_services_name_2, b_services_description_2,
    b_services_logo_3, b_services_name_3, b_services_description_3,
    b_services_logo_4, b_services_name_4, b_services_description_4,
    b_services_logo_5, b_services_name_5, b_services_description_5) VALUES ('$add_b_logo', '$add_b_name', '$add_b_owner', '$add_b_address', '$add_Latitude', '$add_Longitude',  
    '$add_b_phone', '$add_b_country', '$add_b_email' , '$add_b_description', '$add_b_founded', '$add_b_operation_hr', '$add_b_admin_id', '$add_b_service_provide', '$add_b_service_provide1',
    '$add_b_services_logo_1', '$add_b_services_name_1', '$add_b_services_description_1', 
    '$add_b_services_logo_2', '$add_b_services_name_2', '$add_b_services_description_2',
    '$add_b_services_logo_3', '$add_b_services_name_3', '$add_b_services_description_3',
    '$add_b_services_logo_4', '$add_b_services_name_4', '$add_b_services_description_4',
    '$add_b_services_logo_5', '$add_b_services_name_5', '$add_b_services_description_5')") or die('query failed');

   mysqli_query($conn, "SELECT v.vet_and_groom_ID, v.b_name, v.b_logo, v.cat_ID, c.cat_ID, c.cat_name, c.cat_description, c.cat_img
   FROM vet_and_groom_services as v
   LEFT JOIN categories as c ON (v.cat_ID = c.cat_ID)
   WHERE v.vet_and_groom_ID = v.vet_and_groom_ID ORDER BY v.vet_and_groom_ID DESC");


    if(move_uploaded_file($add_b_logo_tmp_name, $add_b_logo_folder)){
       header("location:adminservicestable.php?info=added");
     }else{
      header("location:adminservicestable.php?info=failed");
     }

     if(move_uploaded_file($aadd_b_services_logo_1_tmp_name, $add_b_services_logo_1_folder)){
      header("location:adminservicestable.php?info=added");
      }else{
      header("location:adminservicestable.php?info=failed");
      }

      if(move_uploaded_file($aadd_b_services_logo_2_tmp_name, $add_b_services_logo_2_folder)){
      header("location:adminservicestable.php?info=added");
      }else{
      header("location:adminservicestable.php?info=failed");
      }

      if(move_uploaded_file($aadd_b_services_logo_3_tmp_name, $add_b_services_logo_3_folder)){
      header("location:adminservicestable.php?info=added");
      }else{
      header("location:adminservicestable.php?info=failed");
      }

      if(move_uploaded_file($aadd_b_services_logo_4_tmp_name, $add_b_services_logo_4_folder)){
      header("location:adminservicestable.php?info=added");
      }else{
      header("location:adminservicestable.php?info=failed");
      }

      if(move_uploaded_file($aadd_b_services_logo_5_tmp_name, $add_b_services_logo_5_folder)){
         header("location:adminservicestable.php?info=added");
         }else{
         header("location:adminservicestable.php?info=failed");
         }

}

if(isset($_REQUEST['vet_and_groom_ID'])){
    $id=$_REQUEST['vet_and_groom_ID'];

    $sql = "SELECT * FROM vet_and_groom_services WHERE vet_and_groom_ID = $id";
    $query = mysqli_query($conn, $sql);
}

/* UPDATE */

if(isset($_POST['update_post'])){
    $update_b_admin_id = mysqli_real_escape_string($conn, $_POST['update_b_admin_id']);
    $update_b_vetandgroom_id = mysqli_real_escape_string($conn, $_POST['update_b_vetandgroom_id']);
    $update_b_logo = mysqli_real_escape_string($conn, $_POST['update_b_logo']);
    $update_b_name = mysqli_real_escape_string($conn, $_POST["update_b_name"]);
    $update_b_owner = mysqli_real_escape_string($conn, $_POST["update_b_owner"]);
    $update_b_address = mysqli_real_escape_string($conn, $_POST['update_b_address']);


    $sql= "UPDATE vet_and_groom_services SET b_name= '$update_b_name', b_owner = '$update_b_owner', b_address = '$update_b_address', Latitude = '$update_Latitude', Longitude = '$update_Longitude', b_phone = '$update_b_phone', b_city='$update_b_city', b_email='$update_b_email', b_description='$update_b_description', b_founded_year='$update_b_founded_year', b_operation_hr='$update_b_operation_hr' , admin_Id='$update_b_admin_id', cat_ID='$update_b_service_provide1', b_service_provide='$update_b_service_provide2',
    b_services_name_1 = '$update_b_services_name_1', b_services_description_1 = '$update_b_services_description_1',
    b_services_name_2 = '$update_b_services_name_2', b_services_description_2 = '$update_b_services_description_2',
    b_services_name_3 = '$update_b_services_name_3', b_services_description_3 = '$update_b_services_description_3',
    b_services_name_4 = '$update_b_services_name_4', b_services_description_4 = '$update_b_services_description_4',
    b_services_name_5 = '$update_b_services_name_5', b_services_description_5 = '$update_b_services_description_5'  WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'";
    mysqli_query($conn, $sql);
    header("location:adminservicestable.php?info=updated");

    $update_b_logo = $_FILES['update_b_logo']['name'];
    $update_b_logo_size = $_FILES['update_b_logo']['size'];
    $update_b_logo_tmp_name = $_FILES['update_b_logo']['tmp_name'];
    $update_b_logo_folder = 'Business_Logo/'.$update_b_logo;

    if(!empty($update_b_logo)){
        if($update_b_logo_size > 2000000){
           $message[] = 'image is too large';
        }else{
           $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_logo = '$update_b_logo' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
           if($image_update_query){
              move_uploaded_file($update_b_logo_tmp_name, $update_b_logo_folder);
           }
           $message[] = 'image updated succssfully!';
        }
     }

   /*Services 1 */
    $update_b_services_logo_1 = $_FILES['update_b_services_logo_1']['name'];
    $update_b_services_logo_1_size = $_FILES['update_b_services_logo_1']['size'];
    $update_b_services_logo_1_tmp_name = $_FILES['update_b_services_logo_1']['tmp_name'];
    $update_b_services_logo_1_folder = 'Bussines_Logo_Services_1/'.$update_b_services_logo_1;

    if(!empty($update_b_services_logo_1)){
      if($update_b_services_logo_1_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_services_logo_1 = '$update_b_services_logo_1' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_b_services_logo_1_tmp_name, $update_b_services_logo_1_folder);
         }
         $message[] = 'image updated succssfully!';
      }
   }

   /*Services 2 */
   $update_b_services_logo_2 = $_FILES['update_b_services_logo_2']['name'];
   $update_b_services_logo_2_size = $_FILES['update_b_services_logo_2']['size'];
   $update_b_services_logo_2_tmp_name = $_FILES['update_b_services_logo_2']['tmp_name'];
   $update_b_services_logo_2_folder = 'Bussines_Logo_Services_2/'.$update_b_services_logo_2;

   if(!empty($update_b_services_logo_2)){
     if($update_b_services_logo_2_size > 2000000){
        $message[] = 'image is too large';
     }else{
        $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_services_logo_2 = '$update_b_services_logo_2' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
        if($image_update_query){
           move_uploaded_file($update_b_services_logo_2_tmp_name, $update_b_services_logo_2_folder);
        }
        $message[] = 'image updated succssfully!';
     }
  }

  /*Services 3 */
  $update_b_services_logo_3 = $_FILES['update_b_services_logo_3']['name'];
  $update_b_services_logo_3_size = $_FILES['update_b_services_logo_3']['size'];
  $update_b_services_logo_3_tmp_name = $_FILES['update_b_services_logo_3']['tmp_name'];
  $update_b_services_logo_3_folder = 'Bussines_Logo_Services_3/'.$update_b_services_logo_3;

  if(!empty($update_b_services_logo_3)){
    if($update_b_services_logo_3_size > 2000000){
       $message[] = 'image is too large';
    }else{
       $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_services_logo_3 = '$update_b_services_logo_3' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
       if($image_update_query){
          move_uploaded_file($update_b_services_logo_3_tmp_name, $update_b_services_logo_3_folder);
       }
       $message[] = 'image updated succssfully!';
    }
 }

 /*Services 4 */
 $update_b_services_logo_4 = $_FILES['update_b_services_logo_4']['name'];
 $update_b_services_logo_4_size = $_FILES['update_b_services_logo_4']['size'];
 $update_b_services_logo_4_tmp_name = $_FILES['update_b_services_logo_4']['tmp_name'];
 $update_b_services_logo_4_folder = 'Bussines_Logo_Services_4/'.$update_b_services_logo_4;

 if(!empty($update_b_services_logo_4)){
   if($update_b_services_logo_4_size > 2000000){
      $message[] = 'image is too large';
   }else{
      $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_services_logo_4 = '$update_b_services_logo_4' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
      if($image_update_query){
         move_uploaded_file($update_b_services_logo_4_tmp_name, $update_b_services_logo_4_folder);
      }
      $message[] = 'image updated succssfully!';
   }
 }

 /*Services 5 */
 $update_b_services_logo_5 = $_FILES['update_b_services_logo_5']['name'];
 $update_b_services_logo_5_size = $_FILES['update_b_services_logo_5']['size'];
 $update_b_services_logo_5_tmp_name = $_FILES['update_b_services_logo_5']['tmp_name'];
 $update_b_services_logo_5_folder = 'Bussines_Logo_Services_5/'.$update_b_services_logo_5;

 if(!empty($update_b_services_logo_5)){
   if($update_b_services_logo_5_size > 2000000){
      $message[] = 'image is too large';
   }else{
      $image_update_query = mysqli_query($conn, "UPDATE `vet_and_groom_services` SET b_services_logo_5 = '$update_b_services_logo_5' WHERE vet_and_groom_ID = '$update_b_vetandgroom_id'") or die('query failed');
      if($image_update_query){
         move_uploaded_file($update_b_services_logo_5_tmp_name, $update_b_services_logo_5_folder);
      }
      $message[] = 'image updated succssfully!';
   }
 }
}


if(isset($_REQUEST['delidvet'])){
    $id=$_REQUEST['delidvet'];
    $sql = "DELETE FROM vet_and_groom_services WHERE vet_and_groom_ID = $id";
    $query = mysqli_query($conn, $sql);

    header("location:adminservicestable.php?info=deleted");
    exit();
}

if(isset($_POST['add_categories'])){

   $lj = "SELECT c.cat_ID, c.cat_name, c.cat_img, v.vet_and_groom_ID, v.b_name, v.cat_ID
   FROM categories as c
   LEFT JOIN vet_and_groom_services as v ON c.cat_ID=v.cat_ID
   WHERE c.cat_ID = v.vet_and_groom_ID ORDER BY v.cat_ID DESC";

   $add_img = $_FILES['add_img']['name'];
   $add_img_size = $_FILES['add_img']['size'];
   $add_img_tmp_name = $_FILES['add_img']['tmp_name'];
   $add_img_folder = 'vetphoto/'.$add_img;
   $add_cat_name = mysqli_real_escape_string($conn, $_POST["add_name"]);
   $add_cat_des = mysqli_real_escape_string($conn, $_POST["add_description"]);

   mysqli_query($conn, "SELECT c.cat_ID, c.cat_name, c.cat_img, v.vet_and_groom_ID, v.b_name, v.cat_ID
   FROM categories as c
   LEFT JOIN vet_and_groom_services as v ON c.cat_ID=v.cat_ID
   WHERE c.cat_ID = v.vet_and_groom_ID ORDER BY v.cat_ID DESC");

   mysqli_query($conn, "INSERT INTO categories (cat_img, cat_name, cat_description) VALUES ('$add_img', '$add_cat_name', '$add_cat_des')");
   header("location:admincategoriestable.php?info=added");
   if(move_uploaded_file($add_img_tmp_name, $add_img_folder)){
      header("location:admincategoriestable.php?info=added");
    }else{
     header("location:admincategoriestable.php?info=failed");
    }

}

if(isset($_POST['update_categories'])){
   $update_cat_id =  mysqli_real_escape_string($conn, $_POST['update_cat_id']);
   $update_cat_name = mysqli_real_escape_string($conn, $_POST['update_name']);
   $update_cat_des = mysqli_real_escape_string($conn, $_POST['update_description']);

   $sql= "UPDATE `categories` SET cat_name= '$update_cat_name', cat_description = '$update_cat_des' WHERE cat_ID = '$update_cat_id'";
   mysqli_query($conn, $sql);
   header("location:admincategoriestable.php?info=updated");

   $update_cat_img = $_FILES['update_img']['name'];
   $update_cat_img_size = $_FILES['update_img']['size'];
   $update_cat_img_tmp_name = $_FILES['update_img']['tmp_name'];
   $update_cat_img_folder = 'vetphoto/'.$update_cat_img;

   if(!empty($update_cat_img)){
      if($update_cat_img_size > 2000000){
         $message[] = 'image is too large';
      }else{
         $image_update_query = mysqli_query($conn, "UPDATE `categories` SET cat_img = '$update_cat_img' WHERE cat_ID = '$update_cat_id'") or die('query failed');
         if($image_update_query){
            move_uploaded_file($update_cat_img_tmp_name, $update_cat_img_folder);
         }
         header("location:admincategoriestable.php?info=updated");
      }
   }
}

if(isset($_REQUEST['delcat'])){
   $id=$_REQUEST['delcat'];
   $sql = "DELETE FROM categories WHERE cat_ID = $id";
   $query = mysqli_query($conn, $sql);

   header("location:admincategoriestable.php?info=deleted");
   exit();

}

?>