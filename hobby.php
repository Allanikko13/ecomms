<?php

    session_start();
	require_once('./php/CreateDb.php');
	require_once('./php/component.php');

	$database = new CreateDb("ecomms", "hobby");

	if(isset($_POST['add'])){
        //print_r($_POST['productid']);
        if(isset($_SESSION['cart'])){
            $item_array_id = array_column($_SESSION['cart'], "productid");

            if(in_array($_POST['productid'] , $item_array_id)){
                echo"<script>alert('Product is already in the cart.')</script>";
                echo"<script>window.location='index.php'</script>";
            }else{
                $count = count($_SESSION['cart']);
                $item_array = array('productid' => $_POST['productid']);
                $_SESSION['cart'][$count] = $item_array;
            }

        }else{
            $item_array = array('productid' => $_POST['productid']);
            $_SESSION['cart'][0] = $item_array;
            print_r($_SESSION['cart']);
        }
    }

?>

<html>
<head>
<title>E-Commerce Website</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body> 
<div class="top-nav-bar">
<div class="search-box">
	<i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
	<i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
<a href="home.php"><img src="images/favicon.ico" class="logo"></a>
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div>
<div class="menu-bar">
<ul>
<li><a href="#"><i class="fa fa-shopping-basket"></i>Cart</a></li>
<li><a href="register.php">Sign up</a></li>
<li><a href="login.php">Log in</a></li>
</ul>
</div>
</div>

<section class="header">
<div class="side-menu" id="side-menu">
<ul>
<li>On Sale<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="paints.php">Paints</li></a>
	<li><a href="primers.php">Primers</li></a>
	<li><a href="brush.php">Paint Brush</li></a>
	</ul>
	</li>
	<li>Interior Paint<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="wpaint.php">Wall Paint</li></a>
	<li><a href="cabinet.php">Cabinet Paint</li></a>
	<li><a href="ceiling.php">Ceiling paint</li></a>
	</ul>
	</li>
	<li>Exterior Paint<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="barn.php">Barn and Fence Paint</li></a>
	<li><a href="trim.php">Trim paint</li></a>
	</ul>
	</li>
	<li>Spray Paint<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="metallic.php">Metallic</li></a>
	<li><a href="hobby.php">Hobby</li></a>
	<li><a href="fluorescent.php">Fluorescent</li></a>
	</ul>
	</li>
	<li>Stains and Finishes<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="varnish.php">Varnish</li></a>
	<li><a href="wood.php">Wood Stains</li></a>
	<li><a href="masonry.php">Masonry and Concrete</li></a>
	</ul>
	</li>
	<li>Specialty Paints<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="chalk.php">Chalk Paint</li></a>
	<li><a href="porch.php">Porch and Floor Paint</li></a>
	<li><a href="garage.php">Concrete and Garage Floor Paint</li></a>
	</ul>
	</li>
	<li>Primers<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="primers.php">Primers</li></a>
	</ul>
	</li>
	<li>Paint Tools<i class="fa fa-angle-right"></i>
	<ul>
	<li><a href="pbrush.php">Paint Brush</li></a>
	<li><a href="proller.php">Paint Roller Covers and Frames</li></a>
	<li><a href="mixer.php">Paint Mixer</li></a>
	</ul>
	</li>
</ul>
</div>

</section>

<!---------Onsaleproducts------>
<section class="on-sale">
<div class="container">
	<div class="title-box">
	</div>
	<div class="row">
		<?php
			$result = $database->getData();
			while($row = mysqli_fetch_assoc($result))
			{
				component($row['product_name'], $row['product_price'], $row['product_image'], $row['productid']);
			}
		?>
	<!--<div class="col-md-3">
	<div class="product-top">
		<img src="images/p1.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Benjamin Moore Regal Eggshell Base 1</h3>
	<h5>₱3,500.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p2.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star-half-o"></i>
		<i class="fa fa-star-o"></i>
	<h3>Clark+Kensington Flat (Non-Glare)</h3>
	<h5>₱1,600.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p3.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	<h3>Rust-Oleum Painters Touch Semi-Gloss</h3>
	<h5>₱600.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p6.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Insl-x Flat Ceiling White Color Changing Paint </h3>
	<h5>₱1,500.00</h5>
	</div>
	</div>
	
	</div>
</div>
</section>-->

<!------------New Products!-------->
<!--<section class="new-products">
<div class="container">
	<div class="row">
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p7.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Benjamin Moore Muresco Flat White Ceiling Paint</h3>
	<h5>₱8,900.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p8.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star-half-o"></i>
		<i class="fa fa-star-o"></i>
	<h3>CBenjamin Moore Waterborne Ceiling Paint</h3>
	<h5>₱2,300.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p11.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	<h3>Royal Satin High Hiding White Paint</h3>
	<h5>₱1,600.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p10.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Clark+Kensington Neutral Base Premium Paint</h3>
	<h5>₱2,000.00</h5>
	</div>
	</div>

	<div class="container">
	<div class="row">
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p9.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Benjamin Moore Ben Eggshell Base 2</h3>
	<h5>₱2,500.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p12.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star-half-o"></i>
		<i class="fa fa-star-o"></i>
	<h3>Zinsser Perma-White Satin White Water-Based</h3>
	<h5>₱1,600.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p13.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
	<h3>Benjamin Moore Aura Eggshell Base</h3>
	<h5>₱3,900.00</h5>
	</div>
	</div>
	
	<div class="col-md-3">
	<div class="product-top">
		<img src="images/p14.jpg">
		<div class="overlay-right">
		<button type="button" class="btn btn-secondary" title="Quick Shop">
			<i class="fa fa-eye"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to Wishlist">
			<i class="fa fa-heart-o"></i>
		</button>
		<button type="button" class="btn btn-secondary" title="Add to cart">
			<i class="fa fa-shopping-cart"></i>
		</button>
		</div>
	</div>
	<div class="product-bottom text-center">
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i>
		<i class="fa fa-star"></i> 
		<i class="fa fa-star"></i>
		<i class="fa fa-star-half-o"></i>
	<h3>Rust-Oleum Specialty Satin Bar-B-Que Black High Heat</h3>
	<h5>₱600.00</h5>
	</div>
	</div>
	
	
	</div>
</div>-->
		</div>

	</div>


</section>
<!--------------WEBSITE FEATURES---->
<section class="website-features">
<div class="container">
<div class="row">
<div class="col-md-3 feature-box">
<img src="images/C.png">
<div class="feature-text">
<p><b>100% Original items </b>are available at company</p>
</div>
</div>
<div class="col-md-3 feature-box">
<img src="images/R.png">
<div class="feature-text">
<p><b>Return within 30 days </b>of recieving your order.</p>
</div>
</div>
<div class="col-md-3 feature-box">
<img src="images/F.png">
<div class="feature-text">
<p><b>Get free delivery every </b>order on more than price.</p>
</div>
</div>
<div class="col-md-3 feature-box">
<img src="images/P.png">
<div class="feature-text">
<p><b>Pay online through multiple </b>payment options</p>
</div>
</div>
</div>
</div>
</section>

<!---------FOOTER----------->
<section class="footer">
<div class="container tex-center">
<div class="row">
<div class="col-md-3">
<h1>Useful Links</h1>
<p>Privacy Policy</p>
<p>Terms of Use</p>
<p>Return Policy</p>
</div>
<div class="col-md-3">
<h1>Company</h1>
<p>About Us</p>
<p>Contact Us</p>
<p>Career</p>
</div>
<div class="col-md-3">
<h1>Follow us</h1>
<p><i class="fa fa-facebook-official"></i>Facebook</p>
<p><i class="fa fa-twitter"></i>Twitter</p>
<p><i class="fa fa-instagram"></i>Instagram</p>
</div>
</div>
<hr>
<p class="copyright">For Educational Purposes Only</p>
</div>
</section>



	<script>
		function openmenu()
			{
				document.getElementById("side-menu").style.display="block";
				document.getElementById("menu-btn").style.display="none";
				document.getElementById("close-btn").style.display="block";
			}
		function closemenu()
			{
				document.getElementById("side-menu").style.display="none";
				document.getElementById("menu-btn").style.display="block";
				document.getElementById("close-btn").style.display="none";
			}

</script>
</body>
</html>