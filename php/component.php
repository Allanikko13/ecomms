<?php 

function component($productName, $productPrice, $productImage, $productId){
	$element = "
	
	<div class=\"col-md-3\">
	<div class=\"product-top\">
			<form action='index.php' method='post'>
		<img src=\"$productImage\" alt='$productId'>
		<div class=\"overlay-right\">
		<button type=\"button\" class=\"btn btn-secondary\" title=\"Quick Shop\">
			<i class=\"fa fa-eye\"></i>
		</button>
		<button type=\"button\" class=\"btn btn-secondary\" title=\"Add to Wishlist\">
			<i class=\"fa fa-heart-o\"></i>
		</button>
		<button type=\"submit\" class=\"btn btn-secondary\" name='add' title=\"Add to cart\">
			<i class=\"fa fa-shopping-cart\"></i>
		</button>
		<input type='hidden' name='productid' value='$productId'>
		</div>
	</div>
	<div class=\"product-bottom text-center\">
		<i class=\"fa fa-star\"></i>
		<i class=\"fa fa-star\"></i>
		<i class=\"fa fa-star\"></i> 
		<i class=\"fa fa-star\"></i>
		<i class=\"fa fa-star-half-o\"></i>
	<h3>$productName</h3>
	<h5>₱$productPrice</h5>
		</form>

	</div>
	</div>
	";
	echo $element; 
}







function cartElement($productImage, $productName, $productPrice, $productid){
    $element = "
     <form action=\"cart.php?action=remove&productid=$productid\" method=\"post\" class=\"cart-items\">
                <div class=\"border-rounder\"></div>
                <div class=\"row-bg-light\"></div>
                <div class=\"col-md-3\">
                    <img src=$productImage alt=\"image1\" class=\"img-fluid\">
                </div>
                <div class=\"col-md-6\">
                    <h5 class=\"pt-2\">$productName</h5>
                    <h5 class=\"pt-2\">₱$productPrice</h5>
                    <button type=\"submit\" class=\"btn btn-warning\">Save for later</button>
                    <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                </div>
                <div class=\"col-md-3\">
                    <button type=\"button\" class=\"btn bg-light border rounder-circle\"><i class=\"fas fa-minus\"></i></button>
                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                    <button type=\"button\" class=\"btn bg-light border rounder-circle\"><i class=\"fas fa-plus\"></i></button>
                </div>
                </form>
       
    
    
    ";

    echo $element;

}