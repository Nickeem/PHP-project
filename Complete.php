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

  //sql code changes order_ready from No to Yes
  $sql= mysqli_query($conn, "UPDATE orders SET order_ready = 'Yes' WHERE OrderNum = '$order'; ");
  if  (!$sql){
    $_SESSION['CAlert'] = "<script> alert('Failed to Complete Order')</script>";
    header("Location: Completeorder.php");
  }
  else{
  header("Location: Completeorder.php");
  $_SESSION['CAlert'] = "<script> alert('Successfully Completed Order')</script>";
}
