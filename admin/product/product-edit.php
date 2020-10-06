<?php include '../config.php'; ?>


<!DOCTYPE html>
<!--
Template Name: Materialize - Material Design Admin Template
Author: PixInvent
Website: http://www.pixinvent.com/
Contact: hello@pixinvent.com
Follow: www.twitter.com/pixinvents
Like: www.facebook.com/pixinvents
Purchase: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
Renew Support: https://themeforest.net/item/materialize-material-design-admin-template/11446068?ref=pixinvent
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.

-->
<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
  <?php require '../components/head.php';?>
  <style>
    #blah{
      height : 100px;
    }
  </style>
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <header class="page-topbar" id="header">
    <?php require '../components/header.php';?>
    </header>
    <!-- END: Header-->




    <!-- BEGIN: SideNav-->
    <?php require '../components/sidebar.php';?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before blue-grey lighten-5"></div>
        <div class="col s12">
          <div class="container">
            <!-- app invoice View Page -->
<section class="invoice-edit-wrapper section">

<?php  $k = number_format($_GET['k']); 
     $sql = "SELECT * FROM product  WHERE uid=$k ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
  ?> 
<form method="post" action="" enctype="multipart/form-data" class="row">
    <!-- invoice view page -->
    <div class="col xl12 m12 s12">
      <div class="card">
        <div class="card-content px-36">
        <!--  -->
              <?php
   if (!empty($_POST)) {
      
            $name = $_POST['name'];
            $price = $_POST['price'];
            $discount = $_POST['discount'] ;
            $dd = $_POST['dd'];
            $availability = $_POST['availability'];
            $status = $_POST['status'];
            $colors = $_POST['colors'];
           
               $k = number_format($_GET['k']);
               //   "UPDATE `admin` SET `id` = '2', `lat` = '' WHERE `admin`.`id` = 1";
           $sql = "UPDATE `product` SET `name` = '{$name}' , `price` = '{$price}' , `discount` = '{$discount}' ,`colors` = '{$colors}' , `dd` = '{$dd}'  , `availability` = '{$availability}' , `status` = '{$status}'  WHERE `uid` = '{$k}'" ;
             if (mysqli_query($conn, $sql)) {
              echo '<div class="card-alert card cyan">
              <div class="card-content white-text">
                <p>Message :Product Edited Successfully </p>
              </div>
            </div>';
               } else {
                   echo '<div class="card-alert card cyan">
                   <div class="card-content white-text">
                     <p>Message :'.mysqli_error($conn).'</p>
                   </div>
                 </div>';
               }
         
           mysqli_close($conn);
       }
  
   ?>
          <!-- logo and title -->
          <div class="row mb-3">
            <div class="col m6 s12 invoice-logo display-flex pt-1 push-m6">
              <img id="blah" src="<?php echo $row['image'] ?>"  alt="logo" height="46" width="164" />
            </div>
            <div class="col m6 s12 pull-m6">
              <h5 class="indigo-text">Add Product</h5>
             <h6>Note * : make sure to upload image</h6>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col l6 s12">
              <h6>Product Name</h6>
             
              <div class="input-field">
              <input  value="<?php echo $row['name'] ?>" name="name" type="text" placeholder="Product Name">
              </div>
              <h6>price in Rupees</h6>
              <div class="input-field">
              <input name="price" value="<?php echo $row['price'] ?>" type="number" placeholder="price">
              </div>
              <h6>Discount in % </h6>
              <div class="input-field">
              <input name="discount" value="<?php echo $row['discount'] ?>" type="number" placeholder="Discount">
              </div>
  </div>
              <div class="col l6 s12">
              <h6>Delivery Duration in Days </h6>
              <div class="input-field">
              <input name="dd" type="number" value="<?php echo $row['dd'] ?>" placeholder="Delivery Duration in Days">
              </div>
              <h6>Colors </h6>
              <div class="input-field">
              <input name="colors" type="text" value="<?php echo $row['colors'] ?>" placeholder="colors must separated by ,">
              </div>
            
              <div class="input-field">
              <select name="availability" id="paymentOption">
             
            <option <?php if ($row['availability'] == 'Out of Stock') { echo 'selected ';} ?> value="Out of Stock">Out of Stock</option>
            <option <?php if ($row['availability'] == 'Available') { echo 'selected ';} ?> value="Available">Available</option>
            <option <?php if ($row['availability'] == 'Available Soon') { echo 'selected ';} ?> value="Available Soon<">Available Soon</option>
          </select>
              </div>
              <div class="input-field">
              <select name="status" id="paymentOption">
             
            <option <?php if ($row['status'] == 0) { echo 'selected ';} ?> value="0">Hidden</option>
            <option <?php if ($row['status'] == 1) { echo 'selected ';} ?> value="1">Live</option>
        
          </select>
              </div>
            </div>
          </div>
          <!-- invoice address and contact -->
    
       
       
     
    <center> <input type="submit" value="Update" class="btn invoice-apply-btn">
                            </center> 
        </div>
        
      </div>
    </div>
    
    <?php    
  }
}  ?>
</form>
</section><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->

  
    <!-- BEGIN: Footer-->
    <?php require '../components/footer.php';?>

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="../../../app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="../../../app-assets/vendors/form_repeater/jquery.repeater.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="../../../app-assets/js/plugins.min.js"></script>
    <script src="../../../app-assets/js/search.min.js"></script>
    <script src="../../../app-assets/js/custom/custom-script.min.js"></script>
    <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../../../app-assets/js/scripts/app-invoice.min.js"></script>
    <script>function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
$('#blah').click(function(){ $('#imgInp').trigger('click'); });
</script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>