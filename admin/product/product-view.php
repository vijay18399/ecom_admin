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
      <!-- END: Custom CSS-->
      <style>  #blah{
         height : 100px;
         }
      </style>
   </head>
   <!-- END: Head-->
   <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-dark-menu" data-col="2-columns">
      <!-- BEGIN: Header-->
      <header class="page-topbar" id="header">
         <?php require '../components/header.php';?>
      </header>
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
                  <section class="invoice-view-wrapper section">
                     <?php  $k = number_format($_GET['k']); 
                        $sql = "SELECT * FROM product WHERE uid=$k ";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        
                        ?>
                     <div class="row">
                        <!-- invoice view page -->
                        <div class="col xl12 m12 s12">
                           <div class="card">
                              <div class="card-content invoice-print-area">
                                 <!-- header section -->
                                 <!-- logo and title -->
                                 <div class="row mt-3 invoice-logo-title">
                                    <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
                                       <img id="blah" src="<?php echo $row['image'] ?>" alt="logo" height="46" width="164">
                                    </div>
                                    <div class="col m6 s12 pull-m6">
                                       <h6 class="indigo-text"><?php echo $row['name'] ?></h6>
                                       <span>price :  ₹<?php echo $row['price'] ?></span><br>
                                       <span>Discount : <?php echo $row['discount'] ?> %</span><br>
                                       <span>colors : <?php echo $row['colors'] ?> </span>
                                    </div>
                                 </div>
                                 <hr>
                                 <div class="row invoice-info">
                                    <div class="col m4 s12">
                                       <h6 class="invoice-from">Delivery Duration</h6>
                                       <div class="invoice-address">
                                          <span><?php echo $row['dd'] ?> Days</span>
                                       </div>
                                    </div>
                                    <div class="col m4 s12">
                                       <h6 class="invoice-to">Status</h6>
                                       <div class="invoice-address"> 
                                          <?php    if($row["status"] == 0){
                                             echo '<span class="chip lighten-5 blue blue-text">Hidden</span>';
                                             } else {
                                             echo '<span class="chip lighten-5 green green-text">live</span>';
                                             } ?>
                                       </div>
                                    </div>
                              
                                 <div class="col m4 s12">
                                    <h6 class="invoice-from">Owner</h6>
                                    <div class="invoice-address">
                                       <?php
                                          echo '<span class="chip lighten-5 blue blue-text">'.$row["ref"].'</span>';
                                          ?>
                                    </div>
                                 </div>
                             
                              </div>
                           </div>
                        </div>
                        <!-- invoice action  -->
                     </div>
                     <?php    
                        }
                        }  ?>
                  </section>
                  <!-- START RIGHT SIDEBAR NAV -->
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
      <!-- END PAGE VENDOR JS-->
      <!-- BEGIN THEME  JS-->
      <script src="../../../app-assets/js/plugins.min.js"></script>
      <script src="../../../app-assets/js/search.min.js"></script>
      <script src="../../../app-assets/js/custom/custom-script.min.js"></script>
      <script src="../../../app-assets/js/scripts/customizer.min.js"></script>
      <!-- END THEME  JS-->
      <!-- BEGIN PAGE LEVEL JS-->
      <script src="../../../app-assets/js/scripts/app-invoice.min.js"></script>
      <!-- END PAGE LEVEL JS-->
   </body>
</html>