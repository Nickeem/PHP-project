<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!-- Code done by: Nickeem and Shemar -->
<?php
//Verifying that user is logged in
session_start();
if (!isset($_SESSION['UserID'])) {
	header("Location: indexLogin.php");
	}
	//if user is kitchen staff try to login they are redirected to their default home page
		if ($_SESSION['access'] == 'Kitchen' ){
	  $_SESSION['deniedK'] = "<script>alert('Access Denied')</script>";
	  header("Location: DisplayOrders.php");
	}
	if (isset($_SESSION['deniedW'])) {
		echo $_SESSION['deniedW'];
		unset($_SESSION['deniedW']);
	}

	if (isset($_SESSION['IOAlert'])) {
		echo $_SESSION['IOAlert'];
		unset($_SESSION['IOAlert']);
}
$servername = "localhost";
$name = "root";
$passwOrd = "";
$dbname = "resturant_cookery";

$conn = mysqli_connect($servername, $name, $passwOrd, $dbname);

?>
<!DOCTYPE html>
<html>
<head>
<title>Place Orders</title>
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
						<li><a  href="DeleteOrder.php">Delete Orders</a></li>
						<li><a  href="ViewOrders.php">View Orders</a></li>
						<li><a class="active" href="order.php">Order</a></li>
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
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Orders</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<h3 > Welcome<?php  echo " ".$_SESSION['User']; ?></h3>
				</div>
				<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="linkz">
						<form class="" action="ViewOrders.php">
						<button type="submit" class="btn btn-block btn-lg btn-primary">View Orders</button>
						</form>
						<br>
						<form class="" action="DeleteOrder.php" >
						<button type="submit" class="btn btn-block btn-lg btn-primary">Delete Order</button>
						</form>

					</div>				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="contact-top">
				<!--
			<div class="col-md-5 contact-map">
			<h5>Google Map</h5>
			<div class="map animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>

			</div>
			<div class="address">
					      <h4>Address</h4>
					      <p> Richard McClintock</p>
						  <p>Letraset sheets </p>
						  <p>ph : +123 859 6050</p>
						  <p>Email : <a href="mailto:example@gmail.com">example@gmail.com</a></p>
					 </div>
			</div> -->
			<div class="col-md-7 contact-para animated wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="500ms" >
			<h5>Place Order</h5>

			<form method="Post" action="placeorder.php" >
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<p class="your-para">Customer ID</p>
							<input type="text" value="" maxlength="4" min name="CustID" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
						</div>
					<div class="col-md-6 contact-grid">
					<p class="your-para">Table Number</p>
						<input type="number"  value="" min="1" max="30" name="Tnum" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}" required>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
  <select name="Fselected" required>
    <option value="" >----Select Food----</option>

		<?php

		//Getting menu items from database
		$result = mysqli_query($conn, "SELECT Menu FROM Menu");
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
		}
?>
  </select>
</div>
					</div>
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
	<select name="Bselected" required>
		<option value="">----Select Beverage----</option>
		<?php
		$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
		}
		 ?>
	</select>
</div>
					</div>
					<div class="clearfix"> </div>
				</div>



				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
	<select name="Fselected2" >
		<option value="" >----Select Food----</option>
	<?php
	$result = mysqli_query($conn, "SELECT Menu FROM Menu");
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
	}
	 ?>
	</select>
</div>
					</div>
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
	<select name="Bselected2">
		<option value="">----Select Beverage----</option>
		<?php
		$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
		}
		 ?>
	</select>
</div>
					</div>
					<div class="clearfix"> </div>
				</div>



				<div class="grid-contact">
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
	<select name="Fselected3">
		<option value="" >----Select Food----</option>
		<?php
		$result = mysqli_query($conn, "SELECT Menu FROM Menu");
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
		}
		 ?>
	</select>
</div>
					</div>
					<div class="col-md-6 contact-grid">
						<br><br>
						<div class="box">
	<select name="Bselected3">
		<option value="">----Select Beverage----</option>
		<?php
		$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
		if ($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
		}
		 ?>
	</select>
</div>
					</div>
					<div class="clearfix"> </div>
				</div>

					<div class="grid-contact">
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Fselected4">
						<option value="" >----Select Food----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Menu FROM Menu");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Bselected4">
						<option value="">----Select Beverage----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="clearfix"> </div>
								</div>



								<div class="grid-contact">
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Fselected5">
						<option value="" >----Select Food----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Menu FROM Menu");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Bselected5">
						<option value="">----Select Beverage----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="clearfix"> </div>
								</div>



								<div class="grid-contact">
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Fselected6">
						<option value="" >----Select Food----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Menu FROM Menu");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Menu']."' >".$row['Menu']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="col-md-6 contact-grid">
										<br><br>
										<div class="box">
					<select name="Bselected6">
						<option value="">----Select Beverage----</option>
						<?php
						$result = mysqli_query($conn, "SELECT Beverage FROM beverages");
						if ($result->num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{ echo "<option value= '".$row['Beverage']."' >".$row['Beverage']."</option>";	}
						}
						 ?>
					</select>
				</div>
									</div>
									<div class="clearfix"> </div>
								</div>
								<!--
				<p class="your-para msg-para">MESSAGE</p>
				<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
		-->			<div class="send">
						<input type="submit" value="Place Order " name="Submit">
					</div>
			</form>
			</div>
			<br><br><br>



			<div class="clearfix"> </div>
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
