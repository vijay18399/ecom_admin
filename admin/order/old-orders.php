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
  <!-- Options and filter dropdown button-->
  <div class="invoice-filter-action mr-3">
    <a href="/vendor-list.php" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
      <i class="material-icons">picture_as_pdf</i>
      <span class="hide-on-small-only">Export to PDF</span>
    </a>
  </div>
  <!-- create invoice button-->
  <div class="invoice-create-btn">
    <a href="vendor-add.php" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
      <i class="material-icons">add</i>
      <span class="hide-on-small-only">Add Product</span>
    </a>
  </div>

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
          <th>User ID</th>
          <th>User Name</th>
          <th>Phone Number</th>
          <th>Order address</th>
          <th>Amount</th>
          <th>See Order Details</th>
        </tr>
      </thead>

      <tbody>
      <?php
  
$sql = "SELECT * FROM `orders` WHERE `completed` = 'YES' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {  
   
        echo '<tr>
          <td></td>
          <td></td>
          <td>
            <a href="app-invoice-view.html">' . $row["o_id"] . '</a>
          </td>
          <td>
          <a href="app-invoice-view.html">' . $row["u_id"] . '</a>
        </td>
          <td><span class="invoice-amount">' . $row["name"] . '</span></td>
          <td><small> ' . $row["phone"] . '  </small></td>
          <td><span class="invoice-customer">' . $row["order_address"] . '  </span></td>
          <td>
            <span class="bullet green"></span>
            <small>Rs ' . $row["amount"] . '/-</small>
            <span class="chip lighten-5 green green-text">' . $row["status"] . '</span>
            </td>
   
          <td>
            <div class="invoice-action">
              <a href="order-view.php?k='.$row["c_id"].'" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
            </div>
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
  
</section><!-- START RIGHT SIDEBAR NAV -->

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