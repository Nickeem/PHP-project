<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- Code done by: Nickeem and Shemar -->
<?php
session_start();
if (!isset($_SESSION['UserID'])) {
	header("Location: indexLogin.php");
}
if ($_SESSION['access'] == 'Wait' ){
  $_SESSION['deniedW'] = "<script>alert('Access Denied')</script>";
  header("Location: order.php");
}
if (isset($_SESSION['deniedK'])) {
	echo $_SESSION['deniedK'];
	unset($_SESSION['deniedK']);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>View All Orders</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="css/styles.css" rel="stylesheet">
<!-- Login main.css -->
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet">
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo">
			<h1><a href="index.html"><span>C</span><img src="images/oo.png" alt=""><img src="images/oo.png" alt="">kery</a></h1>
		</div>
    <br>
    <div style="float:right">
      <form action="Logout.php">
      <button type="submit" class="btn btn-danger btn-rounded">Log out</button>
    </form>
    </div>
		<div class="nav-icon">
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a   href="blog.html">Blog</a></li>
            <li><a  href="DisplayOrders.php">Display Orders</a></li>
						<li><a class="active" href="Viewall.php">View All Orders</a></li>
						<li><a href="Completeorder.php"> Complete Orders</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->


</div>
<!--content-->
<div class="content">
	<div class="events">
		<div class="container">
			<div class="events-top">
				<div class="col-md-4 events-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>View All Orders</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<h3 > Welcome<?php  echo " ".$_SESSION['User']; ?></h3>
				</div>
				<div class="col-md-8 events-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
		 				<div class="linkz">
		 					<form class="" action="Completeorder.php" >
		 					<button type="submit" class="btn btn-block btn-lg btn-primary">Complete Orders</button>
		 					</form>
		 					<br>
		 					<form  action="DisplayOrders.php" >
		 					<button type="submit" class="btn btn-block btn-lg btn-primary">Display Orders</button>
		 					</form>
		 				</div>				</div>				</div>
				<div class="clearfix"> </div>
			</div>
			<br><br>



			<div class="bs-example" data-example-id="contextual-table" style="border: 1px solid #eee">
			<?php
			$servername = "localhost";
			$name = "root";
			$passwOrd = "";
			$dbname = "resturant_cookery";
			$date = date('Y/m/d');

			// Create connection
			$conn = mysqli_connect($servername, $name, $passwOrd, $dbname);

			$result = mysqli_query($conn, "SELECT * FROM orders ORDER BY Time DESC");
			$count = 1;
			//Print the table contents
			if ($result->num_rows > 0)
			{
			// output data of each row
			echo "<table class='table'>";
			echo "      <thead>
							<tr>
								<th>#</th>
								<th>OrderNum</th>
								<th>Date</th>
								<th>Time </th>
								<th>Order Ready </th>
								<th>Menu Items </th>
								<th>Beverage Items </th>
								<th>UserID </th>
							</tr>
						</thead>
						<tbody>";
			while($row = $result->fetch_assoc())
			{

				echo "<tr class='active'>
				<th scope='row'>".$count."</th>".
				"<td>". $row["OrderNum"]. "</td>
				 <td>" . $row["Date"] ."</td>
					<td>" . $row["Time"] ."</td>
					<td>" . $row["order_ready"] ."</td>
					<td>" . $row["Menu_Items"] ."</td>
				 <td>" . $row["Beverage_Items"] ."</td><td>". $row["userID"] ."</td>
				 </tr>";
				 $count++;

			}

			echo "</tbody></table>";
}

			 ?>
		 </div>








		</div>
	</div>
</div>
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">Home</a></li>
						<li><a  href="menu.html">Menu</a></li>
						<li><a  href="blog.html">Blog</a></li>
						<li><a  href="events.html">Events</a></li>
						<li><a  href="contact.html">Contact</a></li>
					</ul>
						<span>There are many variations of passages</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Follow Us</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>

			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery . All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
		</div>

	</div>
	<!--//footer-->

</body>
</html>
