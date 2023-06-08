<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authors" content="Jodie Addis">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./style.scss">
</head>
<body>
    <header>

    </header>
    <main class="cart">
        <section class="cart_header">
            <img src="./assets/img/basket.svg" class="cart_header_img">
            <h1 class="cart_header_title">My shopping cart</h1>
        </section>
        <section class="cart_resume">
            <div class="cart_resume_product">
                <div class= "cart_resume_product_display">
                    <p>Items</p>
                </div>
                <p class="cart_resume_product_price">Price</p>
                <p>Remove</p>
            </div>
            <!-- <div class="cart_resume_product">
                <div class= "cart_resume_product_display">
                    <img src="" alt="" class="cart_resume_product_display_img">
                    <p class="cart_resume_product__display_description"></p>
                </div>
                <p class="cart_resume_product_price"></p>
                <form action="" method="post">
                <input type="hidden" name="">
                <input type="submit" value="Delete" name="submit">
                </form>
            </div> -->
        </section>
        <section>
            <p>Total:</p>
        </section>
    </main>
</body>
</html>


<?php

$products = array(
    "name" => "NIKE Air", 
    "price" => "234€", 
    "image" => "./assets/img/shoe_one.png"
); 

$cart = array(
    $product_1 = array (
        "name" => "NIKE Air", 
        "price" => "234€", 
        "image" => "./assets/img/shoe_one.png"
    ), 
    $product_2 = array(
        "name" => "NIKE Air", 
        "price" => "254€", 
        "image" => "./assets/img/shoe_tow.png"
    )
); 
// print_r($cart); 
$cart_length = count($cart); 
// echo $cart_length; 
print_r($cart[1]); 

// for ($i=0 ; $i < $cart_length ; $i ++){
//     echo 
// }; 

?>