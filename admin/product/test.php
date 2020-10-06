<?php
   if (!empty($_POST)) {
       if (($_FILES['file']['name'] != "")) {
           $uploaddir = 'uploads/';

           $image = $uploaddir . basename($_FILES['file']['name']);
           if (move_uploaded_file($_FILES['file']['tmp_name'], $profile)) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $discount = $_POST['discount'] ;
            $dd = $_POST['dd'];
            $expiry = $_POST['expiry'];
            $availability = $_POST['availability'];

            $image = '/admin/product/'.$image;
            $sql = "INSERT INTO product 
            VALUES ('','{$name}','{$price}','{$discount}','{$dd}','{$expiry}','{$availability}','{$image}','show','admin')";
               echo $sql;
              if (mysqli_query($conn, $sql)) {
                   echo ' success'
                //header("Location:   product-list.php");
               } else {
                   echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>Error</strong>" . mysqli_error($conn) . "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
               }
           } else {
               echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>Error</strong>While Uploading<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
           }
           mysqli_close($conn);
       }
   }
   ?>

