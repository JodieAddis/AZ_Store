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
// $products = array(
//     "name" => "NIKE Air", 
//     "price" => "234€", 
//     "image" => "./assets/img/shoe_one.png"
// ); 

// $cart = array(
//     $product_1 = array (
//         "name" => "NIKE Air", 
//         "price" => "234€", 
//         "image" => "./assets/img/shoe_one.png",
//         "description" => "Voici une basket",
//         "id" => 1, 
//     ), 
//     $product_2 = array(
//         "name" => "NIKE Air", 
//         "price" => "254€", 
//         "image" => "./assets/img/shoe_two.png",
//         "description" => "Voici une basket",
//         "id" => 2,
//     ),
//     $product_3 = array(
//         "name" => "NIKE Air", 
//         "price" => "365€", 
//         "image" => "./assets/img/shoe_two.png",
//         "description" => "Voici une basket",
//         "id" => 3,
//     )
// ); 


$json = file_get_contents("./cart.json"); 
// echo $json; 
$data = json_decode($json, true); 
print_r($data);//Totalité de l'objet
foreach($data as $array =>)



// $id = 0; 
// foreach ($data as $key => $value){
    // print_r($dataProduct); 
    // echo '
    // <div>
    //     <div>
    //         <img src="'.$dataProduct['image_url'].'" alt="Picture of the product selected">
    //         <p>'.$dataProduct['product'].'</p>
    //     </div>
    //     <p>'.$dataProduct['price'].'</p>
    //     <form methode="post">
    //         <button type="submit" value="Remove" name="button'.$id.'">Remove</button>
    //     </form>
    // </div>
    // ';
    // if(isset($_POST["button.$id"]) == $product_info['id']){
    //     echo 'test'; 
    //     unset($cart[1]); 
    // }
    // $id ++;
// }

// foreach($array as $key => $item) {
//     if ($item['id'] === $value) {
//         unset($array[$key]);
//     }
// }


//function json_encode(); création d'un fichier json
// fonction json_decode() : récupérer les infos dans le fichier

?>