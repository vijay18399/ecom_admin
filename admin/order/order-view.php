<?php
   include '../config.php';
   
   ?>
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
                  <!-- invoice list -->
                  <section class="invoice-list-wrapper section">
                     <!-- create invoice button-->
            
                     <!-- create invoice button-->
            
                     <div class="responsive-table">
                        <table class="table invoice-data-table white border-radius-4 pt-1">
                           <thead>
                              <tr>
                              <!-- data table responsive icons -->
          <th></th>
          <!-- data table checkbox -->
          <th></th>
          <th>
            <span>Order ID</span>
          </th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Product ID</th>
       
                           
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $k = $_GET['k']; 
                                                         $sql = "SELECT * FROM cart WHERE order_id='{$k}' ";
                                 $result = $conn->query($sql);
                                 if ($result->num_rows > 0) {
                                     while ($row = $result->fetch_assoc()) {  
                                    
                                         echo '<tr>
                                           <td></td>
                                           <td></td>
                                           <td>'.$k.'</td>
                                           <td><span class="invoice-amount">' . $row["quantity"] . '</span></td>
                                           <td><small> ' . $row["price"] . '  </small></td>
                                           <td>
                                             <span class="bullet green"></span>
                                             <a href="/admin/product/product-view.php?k='.$row["p_id"].'">' . $row["p_id"] . '</a>
                                             
                                             </td>
                                        
                                         </tr>';
                                            }
                                 } else {
                                     echo "<tr> 0 results  </tr>";
                                 }
                                 $conn->close();
                                 ?>
                           </tbody>
                        </table>
                     </div>
                  </section>
                  <!-- START RIGHT SIDEBAR NAV -->
                  <!-- END RIGHT SIDEBAR NAV -->
               </div>
               <div class="content-overlay"></div>
            </div>
         </div>
      </div>
      <!-- END: Page Main-->
      <!-- BEGIN: Footer-->
      <?php require '../components/footer.php';?>
      <!-- END: Footer-->
      <!-- BEGIN VENDOR JS-->
      <script src="../../../app-assets/js/vendors.min.js"></script>
      <!-- BEGIN VENDOR JS-->
      <!-- BEGIN PAGE VENDOR JS-->
      <script src="../../../app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
      <script src="../../../app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
      <script src="../../../app-assets/vendors/data-tables/js/datatables.checkboxes.min.js"></script>
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