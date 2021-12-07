<?php
session_start();
require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("ecomms", "primers");

if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach ($_SESSION['pricart'] as $key => $value){
            if($value["productid"] == $_GET['productid']){
                unset($_SESSION['cart'] [$key]);
                echo "<script>alert('Product has been removed')</script>";
                echo "<script>window.location = 'pricart.php'</script>";
            }
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale= , maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
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
            <li><a href="cart.php"><i class="fa fa-shopping-basket"></i>Cart</a></li>
            <li><a href="#">Sign up</a></li>
            <li><a href="#">Log in</a></li>
        </ul>
    </div>
</div>
<div class="container-fluid">
    <div class="row px-5">
        <div class="col md7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
               <?php
               $total = 0;
              if(isset($_SESSION['cart'])){
                  $product_id = array_column($_SESSION['cart'], 'productid');
                  $result = $db->getData();
                  while($row = mysqli_fetch_assoc($result)){
                      foreach($product_id as $id){
                          if($row['productid'] == $id){
                              cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                              $total = $total + (int)$row['product_price'];
                          }
                      }
                  }
              }else{
                  echo "<h5>Cart is Empty</h5>";
                  }
               ?>
            </div>
        </div>
        <div class="col md4 offset-md-1 border rounded mt-5 bg-white h-25">
            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                        if(isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<h6>Price ($count items)</h6>";
                        }else{
                            echo "<h6>Price (0 items)</h6>";
                        }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount</h6>
                    </div>
                    <div class="col-md-6">
                        <h6><?php
                            echo "₱";
                            echo $total; ?></h6>
                        <h6 class="text-success"> ₱50.00</h6>
                        <hr>
                        <h6> <?php
                            echo "₱";
                            echo $total ; ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
