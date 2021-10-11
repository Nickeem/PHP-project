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
  if (!$conn)
  {
    //if failed to connect
    header("Location: indexLogin.php");
  }

  if ((isset($_POST['Username'])) && (isset($_POST['Password']))) {


  $username = $_POST['Username'];
  $password = $_POST['Password'];

  $login_user = mysqli_query($conn, "SELECT * FROM staff_login WHERE UserID = '$username'   AND Password = '$password'; ");
  $result_rows = mysqli_num_rows($login_user);

  if ($result_rows == 1) {
    $row = $login_user->fetch_assoc();
    if ($row['Staff_Type'] == 'Wait Staff') {

    $_SESSION['UserID'] = $username;
    $_SESSION['User'] = $row['FirstName'];
    $_SESSION['access'] = 'Wait';
    header("Location: order.php");

  }elseif ($row['Staff_Type'] == 'Kitchen Staff') {

    $_SESSION['UserID'] = $username;
    $_SESSION['User'] = "Kitchen Staff";
    $_SESSION['access'] = 'Kitchen';
    header("Location: DisplayOrders.php");
  }
  }
  else {

    $_SESSION['msg'] = "Login failed!";
    header('Location: indexLogin.php');
    exit();
  }
}
else{
  header('Location:indexLogin.php');
}


 ?>


<?php /*
 $result = mysqli_query($conn, "SELECT * FROM persons");
 //Print the table contents
 if ($result->num_rows > 0)
 {
 // output data of each row
 echo "<table>";
 while($row = $result->fetch_assoc())
 {
   echo "<tr>". "<td>". $row["PersonID"]. "</td> <td>" . $row["FirstName"] ."</td> <td>". $row["LastName"] . "</td> </tr>";


 }
 echo "</table>";
 }
 else
 {
 echo "0 results";
}
*/?>
