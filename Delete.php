<!-- Code done by: Nickeem and Shemar -->
<?php
  session_start();
  $servername = "localhost";
  $name = "root";
  $passwOrd = "";
  $dbname = "resturant_cookery";

  // Create connection
  $conn = mysqli_connect($servername, $name, $passwOrd, $dbname);
  // Check connection


  $order = $_POST['Order'];


  $sql= mysqli_query($conn, "DELETE FROM orders WHERE OrderNum = '$order'; "); // deletes row in orders table
  if  (!$sql){
    //sets session variable containing a javascript alert box
    $_SESSION['DAlert'] = "<script> alert('Failed to delete order')</script>";
    header("Location: DeleteOrder.php");
  }
  else{
  header("Location: DeleteOrder.php");
  $_SESSION['DAlert'] = "<script> alert('Successfully deleted order')</script>";
}
