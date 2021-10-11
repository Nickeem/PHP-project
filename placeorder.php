<!-- Code done by: Nickeem and Shemar -->
<?php
session_start();
$servername = "localhost";
$name = "root";
$passwOrd = "";
$dbname = "resturant_cookery";

// Create connection
$conn = mysqli_connect($servername, $name, $passwOrd, $dbname);
//putting form data in variables
  $CustID= $_POST['CustID'];
  $Tnum = $_POST['Tnum'];
  $Fchoice = $_POST['Fselected'];
  $Bchoice = $_POST['Bselected'];
  $Fchoice2 = $_POST['Fselected2'];
  $Bchoice2 = $_POST['Bselected2'];
  $Fchoice3 = $_POST['Fselected3'];
  $Bchoice3 = $_POST['Bselected3'];
  $Fchoice4 = $_POST['Fselected4'];
  $Bchoice4 = $_POST['Bselected4'];
  $Fchoice5 = $_POST['Fselected5'];
  $Bchoice5 = $_POST['Bselected5'];
  $Fchoice6 = $_POST['Fselected6'];
  $Bchoice6 = $_POST['Bselected6'];
  $userID = $_SESSION['UserID'];
/*
  for ($i=1; $i <=6 ; $i++) {
    $count =2;
    $name = "Fselected".$count;
    $menuitem = $menuitem.", ".$_POST[$name];
    $count += 1;
  }
*/
  //using variables to create table fields
  $ordernum = $CustID.date('Y').date('m').date('d');
  $order_ready = "No";
  $date = date('Y/m/d');

  $menuitem = $Fchoice.", ".$Fchoice2.", ".$Fchoice3.", ".$Fchoice4.", ".$Fchoice5.", ".$Fchoice6;
  $Bitem = $Bchoice.", ".$Bchoice2.", ".$Bchoice3.", ".$Bchoice4.", ".$Bchoice5.", ".$Bchoice6;
  date_default_timezone_set("America/New_York");
  $time = date("h:i:sa");

 $sql = mysqli_query($conn, "INSERT INTO orders(OrderNum, Date, Time, order_ready, Menu_Items,Beverage_Items, Table_Number, userID )
  VALUES                                       ('$ordernum', '$date', '$time', '$order_ready', '$menuitem', '$Bitem', '$Tnum', '$userID');");

  if  (!$sql){
    $_SESSION['IOAlert'] = "<script> alert('Failed to Place Order')</script>";
    header("Location: order.php");
  }
  else{
      $_SESSION['IOAlert'] = "<script> alert('Successfully Placed Order')</script>";
  header("Location: order.php");

}

 ?>
