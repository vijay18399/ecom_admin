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
               
           $sql = "UPDATE `orders` SET `completed` = 'YES'  WHERE `o_id` = '{$k}'" ;
             if (mysqli_query($conn, $sql)) {
                header("location: order-list.php");
               } else {
                header("location: order-list.php");
               }
         
           mysqli_close($conn);
   
  
   ?>