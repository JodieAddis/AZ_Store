<?php
$json_path = "./assets/json/cart.json";
$items = [
    [
        'id' => 1,
        'product' => 'Nike Air',
        'price' => 234,
        'image_url' => './assets/img/shoe_one.png',
        'quantity' => 1,
    ],
    [
        'id' => 2,
        'product' => 'Nike Air',
        'price' => 234,
        'image_url' => './assets/img/shoe_one.png',
        'quantity' => 1,
    ],
    [
        'id' => 3,
        'product' => 'Nike Air',
        'price' => 234,
        'image_url' => './assets/img/shoe_one.png',
        'quantity' => 1,
    ],
    [
        'id' => 4,
        'product' => 'Nike Air',
        'price' => 234,
        'image_url' => './assets/img/shoe_one.png',
        'quantity' => 1,
    ],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cart_data = json_decode(file_get_contents($json_path), true) ?? array(); 
    foreach ($items as $index => $item) {
        if (isset($_POST["button$index"])) {
            $found = false;
            foreach($cart_data as &$cart_item){
                if ($cart_item['id'] == $item['id']){
                    $cart_item['quantity']++;
                    $found= true;
                    break;
                }
            }
            if (!$found){
                $cart_data[]=$item;
            }
            }
        }
    file_put_contents($json_path, json_encode($cart_data));   
    }
?>
<!DOCTYPE html>
<html lang="en">
    <?php
   
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- <link rel="stylesheet" href="./assets/sass/style.css"> -->
    <title>AZ_Store</title>
</head>


<header>
    <nav>
    <h1>AZ[store]</h1>
    <a href="empty">Home</a>
    <a href="empty">About</a>
    <a href="empty">Products</a>
    <a href="empty">Contact</a>
    <a href="empty">Login</a>
    <img id="shopping_cart_logo" src="./assets/img/shopping-cart.svg" alt="shopping-cart">
    <?php


    ?>
    </nav>
</header>
<body>



<!-- store section -->
<section class="store">
<div>
    <h1 class="slogan_1">Shoe the right one.</h1>
    <button id="Move_to_store">See our store</button>
</div>
<div>
<img  id="big_shoe_1"src="./assets/img/shoe_one.png" alt="shoe_one">
<p id="nike">NIKE</p>
</div>
</section>

<!-- products section -->
<section class="products">
<h2 id ="products">Our last products</h2>
<?php
$i=0;
            foreach ($items as $item) {
                echo '<div class="products_shoes " id=' . $item["id"] . '>
                    <img src=' . $item['image_url'] . '> 
                    <h3>' . $item['product'] . '</h3> 
                    <p>' . $item['price'] . '</p>
                    <form method="post" action="">
                        <button name="button' . $i . '" class="add_to_cart" type="submit">add to cart</button>
                    </form>
                </div>';
                $i++;
            }

?>
</section>


<!-- citations section -->
<section class="citation">
    <img src="./assets/img/shoe_two.png" alt="shoe_two">
    <h1 id="slogan_2">We provide you the best quality.</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci voluptas minima illo repudiandae aspernatur veniam praesentium eius harum distinctio earum iste repellat deserunt, quae, explicabo rerum sequi. Suscipit, odit blanditiis?</p>
</section>



<!-- commentaires section -->
<section class="commentaires">
<div id="emily">
    <img src="./assets/img/image-emily.jpg" alt="emily">
    <h3>Emily from XYZ</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
</div>
<div id="Thomas">
    <img src="./assets/img/image-thomas.jpg" alt="emily">
    <h3>Thomas from corporate</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
</div>
<div id="jennie">
    <img src="./assets/img/image-jennie.jpg" alt="emily">
    <h3>Jennie from Nike</h3>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
</div>
</section>



<!-- footer contacts -->
</body>
<footer>
    <a href="empty">Home</a>
    <a href="empty">About</a>
    <a href="empty">Products</a>
    <a href="empty">Contact</a>
</footer>
</html>