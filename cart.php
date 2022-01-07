<?php

session_start();
require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("ecomms", "products");
$dbtrim = new CreateDb("ecomms", "trim");
$dbbarn = new CreateDb("ecomms", "barn");
$dbbrush = new CreateDb("ecomms", "brush");
$dbcabinet = new CreateDb("ecomms", "cabinet");
$dbceiling = new CreateDb("ecomms", "ceiling");
$dbchalk = new CreateDb("ecomms", "chalk");
$dbfluorescent = new CreateDb("ecomms", "fluorescent");
$dbgarage = new CreateDb("ecomms", "garage");
$dbhobby = new CreateDb("ecomms", "hobby");
$dbmasonry = new CreateDb("ecomms", "masonry");
$dbmetallic = new CreateDb("ecomms", "metallic");
$dbmixer = new CreateDb("ecomms", "mixer");
$dbpaints = new CreateDb("ecomms", "paints");
$dbpbrush = new CreateDb("ecomms", "pbrush");
$dbporch = new CreateDb("ecomms", "porch");
$dbprimers = new CreateDb("ecomms", "primers");
$dbprollers = new CreateDb("ecomms", "proller");
$dbvarnish = new CreateDb("ecomms", "varnish");
$dbwpaint = new CreateDb("ecomms", "wpaint");
$dbwstain = new CreateDb("ecomms", "wstain");


if(isset($_POST['remove'])){
    if($_GET['action'] == 'remove'){
        foreach ($_SESSION['cart'] as $key => $value){
            if($value["productid"] == $_GET['productid']){
                unset($_SESSION['cart'] [$key]);
                echo "<script>alert('Product has been removed')</script>";
                echo "<script>window.location = 'cart.php'</script>";
            }
        }
    }
}


if(!isset($_SESSION['login'])){
    header('Location: index.php');
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
            <li><a href="index.php">Log out</a></li>
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
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbtrim->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbbrush->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbbarn->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbcabinet->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbceiling->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbchalk->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbfluorescent->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbgarage->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbhobby->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbmasonry->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbmetallic->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbmixer->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbpaints->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbpbrush->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbporch->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbprimers->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbprollers->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbvarnish->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbwpaint->getData();
                    while($row = mysqli_fetch_assoc($result)){
                        foreach($product_id as $id){
                            if($row['productid'] == $id){
                                cartElement($row['product_image'], $row['product_name'], $row['product_price'], $row['productid']);
                                $total = $total + (int)$row['product_price'];
                            }
                        }
                    }
                }
                if(isset($_SESSION['cart'])){
                    $product_id = array_column($_SESSION['cart'], 'productid');
                    $result = $dbwstain->getData();
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
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <h6><?php
                            echo "₱";
                            echo $total; ?></h6>
                        <h6 class="text-success"> Free delivery</h6>
                        <hr>
                        <h6> <?php
                            echo "₱";
                            echo $total ; ?></h6>
                        <hr>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-success mx-2" href="checkout.php" name="checkout" >Checkout</a>
                        <br><br>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>