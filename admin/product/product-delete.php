        <!--  -->
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admin";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
           
               $k = $_GET['k'];
        
           $sql =  "DELETE FROM `product` WHERE `product`.`uid` = '{$k}'";
             if (mysqli_query($conn, $sql)) {
                header("location: product-list.php");
               } else {
                header("location: product-list.php");
               }
         
           mysqli_close($conn);
   
  
   ?>