<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authors" content="Jodie Addis">
    <title>Shopping Cart</title>
    <link rel="/dist/output.css" href="./assets/css/style.css">
</head>
<body>
    <header>
    <p class="site_name">AZ[store]</p>
    <div class="site_navigation">
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Products</li>
            <li>Contact</li>
        </ul>
    </div>
    <div class="site_cart">
        <!-- <img src="./assets/img/shopping-cart.svg" alt="shopping icon"> -->
    </div>
    </header>
    <main class="cart">
        <section class="cart_header">
            <img src="./assets/img/basket.svg" class="cart_header_img">
            <h1 class="cart_header_title text-red-600">My shopping cart</h1>
        </section>
        <section class="cart_resume">
            <div class="cart_resume_product">
                <div class= "cart_resume_product_display">
                    <p>Items</p>
                </div>
                <p class="cart_resume_product_quantity">Quantity</p>
                <p class="cart_resume_product_price">Price</p>
                <p>Remove</p>
            </div>
            <div class="cart_resume_product">
            </div>
        </section>
        <section>
            <p>Total:</p>
            <form action="checkout.php" method="post">
                <input type="submit" value="Check Out !">
            </form>
        </section>
    </main>
</body>
</html>

<?php

$json = file_get_contents("./assets/json/cart.json"); 
// echo $json; 
$data = json_decode($json, true); 
// print_r($data);//Totalité de l'objet
// print_r($data[0]);//Sélectionne l'array dans l'objet


$id = 0;
foreach ($data as $array => $value){
    $product = $data[$array]; 
    echo '
    <div id="product_'.$id.'">
        <div>
            <img src="'.$product['image_url'].'" alt="Picture of the product selected">
            <p>'.$product['product'].'</p>
        </div>
        <p>'.$product['quantity'].'</p>
        <p>'.$product['price'].'</p>
        <form methode="post">
            <button type="submit" value="Remove" name="button"'.$id.'>Remove</button>
        </form>
    </div>
    '; 
    if(isset($_POST["button".$id])){
        json_decode($data[$array]);
        unset('product'.$id); 
        json_encode($data); 
    }

    $id ++;
}

?>