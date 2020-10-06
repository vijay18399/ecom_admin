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
  <form method="post" action="" enctype="multipart/form-data" class="row">
    <!-- invoice view page -->
    <div class="col xl12 m12 s12">
      <div class="card">
        <div class="card-content px-36">
        <?php
   if (!empty($_POST)) {
       if (($_FILES['file']['name'] != "")) {
           $uploaddir = 'uploads/';

           $image = $uploaddir . basename($_FILES['file']['name']);
           if (move_uploaded_file($_FILES['file']['tmp_name'], $image)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $discount = $_POST['discount'] ;
            $colors = $_POST['colors'];
            $dd = $_POST['dd'];
            $availability = $_POST['availability'];
            $image = '/admin/product/'.$image;
            $sql = "INSERT INTO product 
            VALUES ('','{$name}','{$price}','{$discount}','{$image}','{$colors}','{$dd}','{$availability}',1,'admin')";
               if (mysqli_query($conn, $sql)) {
              
                echo '<div class="card-alert card cyan">
                <div class="card-content white-text">
                  <p>  Message : Product added Successfully </p>
                </div>
              </div>';
           
               } else {
   echo '<div class="card-alert card cyan">
   <div class="card-content white-text">
   <p>'. $sql.'<p>
     <p>Error  :'. mysqli_error($conn) .'</p>
   </div>
 </div>';
               }
           } else {
            echo '<div class="card-alert card cyan">
            <div class="card-content white-text">
              <p>Error  :While Uploading</p>
            </div>
          </div>';
           }
           mysqli_close($conn);
       }
   }
   ?>
       
          <!-- logo and title -->
          <div class="row mb-3">
            <div class="col m6 s12 invoice-logo display-flex pt-1 push-m6">
              <img id="blah" src="https://image.flaticon.com/icons/svg/2836/2836488.svg" alt="logo" height="46" width="164" />
            </div>
            <div class="col m6 s12 pull-m6">
              <h5 class="indigo-text">Add Product</h5>
             <h6>Note * : make sure to upload image</h6>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col l6 s12">
              <h6>Product Info</h6>
             
              <div class="input-field">
              <input name="name" type="text" placeholder="Product Name">
              </div>
              <div class="input-field">
              <input name="price" type="number" placeholder="price">
              </div>
              <div class="input-field">
              <input name="discount" type="number" placeholder="Discount">
              </div>
  </div>
              <div class="col l6 s12">
              <div style="display : none " class="input-field">
                <input id="imgInp" type="file" name="file" placeholder="Image">
              </div>
              <br>
              <div class="input-field">
              <input name="dd" type="number" placeholder="Delivery Duration in Days">
              </div>
              <div class="input-field">
              <input name="colors" type="text" placeholder="colors must separated with ,">
              </div>
              <div class="input-field">
              <select name="availability" id="paymentOption">
              <option selected disabled value="Product Availability">Product Availability</option>
            <option value="Out of Stock">Out of Stock</option>
            <option value="Available">Available</option>
            <option value="Available Soon<">Available Soon</option>
          </select>
              </div>
            </div>
          </div>
          <!-- invoice address and contact -->
    
       
       
     
    <center> <input type="submit" value="Add" class="btn invoice-apply-btn">
                            </center> 
        </div>
        
      </div>
    </div>
    
  
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