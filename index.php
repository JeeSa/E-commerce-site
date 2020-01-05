<?php
include 'connect.php';
$cart=$con->query("select * from add_to_cart");
$cart_row=$cart->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/color.css">
	<!-- custom css -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container-fluid" id="main">
<div  class="container-fluid" id="main-header">
	<!--top header starts-->
	<div  class="row margin5">
		<div class="col-sm-4">
			<p>Welcome to Dynamic Fashion <a href="login.php">Sign in</a> or <a href="register.php">Register</a></p>
		</div>
		<!--top header start-->
		<div class="col-sm-3 col-sm-offset-5">

				<ul class="top-nav">
					<li><a href="https://www.facebook.com/"><i class="fa fa-facebook-official fa-lg"></i></a></li>
					<li><a href="https://twitter.com/"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="https://plus.google.com/u/0/"><i class="fa fa-google-plus fa-lg"></i></a></li>
					<li><a href="https://www.linkedin.com/"><i class="fa fa-linkedin fa-lg"></i></a></li>
				</ul>
		</div>

	</div>
	<hr>
	<!--top header ends-->
	<div class="row top_two">
		<div class="col-sm-4">
			<ul class="top-nav">
				<li> <i class="fa fa-phone "></i>01686381037</li>
				<div>
				<li ><i class="fa fa-envelope"></i> mominabhi37@gmail.com</li>
				</div>
			</ul>
		</div>
		<div class="col-sm-2 col-sm-offset-1">
			<span class="logo">Dynamic Fashion</span>
		</div>
		<div class="col-sm-3 col-sm-offset-2">
			<ul class="top-nav">

				<li> <a href="add_to_cart.php"><i class="fa fa-shopping-cart fa-lg"></i> <?php echo $cart_row ?></a></li>
				<li><a href="admin_login.php"><i class="fa fa-user fa-lg"></i> My Account </a></li>
			</ul>
		</div>
	</div>
	<hr>
	<!--last header-->
	<div class="row">


		<nav class="navbar navbar-default">
			<div class="container-fluid" >
				<ul class="nav navbar-nav">

					<li class="active"><a href="#">Home</a></li>
					<li ><a href="categories.php?name=men">MEN STORE</a></li>
					<li ><a href="categories.php?name=women">WoMEN STORE</a></li>
					<li	><a href="categories.php?name=accessories">ACCESSORIES</a></li>
					<li><a href="categories.php?name=shoe">SHOES</a></li>
					<li><a href="categories.php?name=bag">HANDBAGS</a></li>
					<li><a href="contact.php">CONTACTS</a></li>
					<li style="margin-top: 10px;"><div class="dropdown" >
    <span class="btn btn-default dropdown-toggle"  data-toggle="dropdown">More Categories
    <span class="caret"></span></span>
							<?php
								$sql_drop = "SELECT categories from categories WHERE  id >= 6";
								$result_drop = $con->query($sql_drop);


							?>
							<ul class="dropdown-menu">
								<?php
									while($row_drop = $result_drop->fetch_assoc()){

								?>
								<li><a href="categories.php?name=<?php echo $row_drop['categories']; ?>"><?php echo $row_drop['categories']; ?></a></li>

								<?php } ?>
							</ul>
						</div></li>
				</ul>
				<form class="navbar-form navbar-right">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<i class="glyphicon glyphicon-search"></i>
							</button>
						</div>
					</div>
				</form>
			</div>

		</nav>
	</div>

</div>
<!--	ends header-->
	<div id="body">
	<div style="background-color: whitesmoke; margin-bottom: 20px;">
		<?php
		include 'slider.php';
		?>
	</div>

		<?php

		$sql = "SELECT * FROM products WHERE 1";
		$result = $con->query($sql);

		?>

		<div class="container-fluid">
			<div class="row">

				<?php
				while($row = $result->fetch_assoc())
				{

					?>



					<div class="col-sm-3">
						<div class="panel panel-primary" >
							<div class="panel-heading">
								<?php    echo $row['product_name']; ?>
							</div>
							<div class="panel-body" style="height: 40%;">
<!--								<img src="img/--><?php //echo $row['img']; ?><!--" class="img-responsive">-->
								<img src="img/<?php echo $row['img']; ?>" class="img-responsive" style="height: 100%;width: 100%" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">
								<!-- Modal -->
								<div class="modal fade" id="myModal<?php echo $row['id'] ?>" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title"><?php echo $row['product_name']; ?></h4>
											</div>
											<div class="modal-body">
												<p>Be the first to review this product</p>
												<img src="img/<?php echo $row['img']; ?>" class="img-responsive" style="height: 40%;width: 80%" ">
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>
								<!--    Modal End-->


							</div>
							<div class="panel-footer">
								<ul class="top-nav">
									<li><a href="add_to_cart.php?id=<?php echo $row['id']?>" <i class="fa fa-shopping-basket"></i></a></li>
									<li><a href="#"><i class="fa fa-star"></i></a></li>
									<li>    &#x9f3 <?php echo $row['price']; ?> tk</li>
								</ul>
							</div>
						</div>
					</div>





					<?php
				}
				?>
			</div>
		</div>


	</div>


</div>







<!--Product footer company products-->
<div class="container footer-main">

	<div class="row footer-row">
		<div class="col-md-3 footer-child">
			<h3>FEATURED SALE</h3>
			<ul>
				<li><a href=""></a>Alexis Hudson</li>
				<li><a href=""></a>American Apparel</li>
				<li><a href=""></a>Ben Sherman</li>
				<li><a href=""></a>Big Buddha</li>
				<li><a href=""></a>chanel</li>

				<li><a href=""></a>Cristian Audigier</li>
				<li><a href=""></a>Coach</li>
				<li><a href=""></a>Cole</li>


			</ul>


		</div>
		<div class="col-md-3 footer-child">
			<h3>FEATURED SALE</h3>
			<ul>
				<li><a href=""></a>Alexis Hudson</li>
				<li><a href=""></a>American Apparel</li>
				<li><a href=""></a>Ben Sherman</li>
				<li><a href=""></a>Big Buddha</li>
				<li><a href=""></a>chanel</li>

				<li><a href=""></a>Cristian Audigier</li>
				<li><a href=""></a>Coach</li>
				<li><a href=""></a>Cole</li>


			</ul>

		</div>
		<div class="col-md-3 footer-child">
			<h3>FEATURED SALE</h3>
			<ul>
				<li><a href=""></a>Alexis Hudson</li>
				<li><a href=""></a>American Apparel</li>
				<li><a href=""></a>Ben Sherman</li>
				<li><a href=""></a>Big Buddha</li>
				<li><a href=""></a>chanel</li>

				<li><a href=""></a>Cristian Audigier</li>
				<li><a href=""></a>Coach</li>
				<li><a href=""></a>Cole</li>


			</ul>

		</div>

		<div class="col-md-3 footer-child">
			<h3>FEATURED SALE</h3>
			<ul>
				<li><a href=""></a>Alexis Hudson</li>
				<li><a href=""></a>American Apparel</li>
				<li><a href=""></a>Ben Sherman</li>
				<li><a href=""></a>Big Buddha</li>
				<li><a href=""></a>chanel</li>

				<li><a href=""></a>Cristian Audigier</li>
				<li><a href=""></a>Coach</li>
				<li><a href=""></a>Cole</li>


			</ul>


		</div>

	</div>
</div>
<div class="well well-sm text-center footer-margin"><p >Copyrights &copy Md.Mominuz Zaman Abhi</p></div>

<!-- javascript here -->

<!-- custom js  -->
</body>
</html>