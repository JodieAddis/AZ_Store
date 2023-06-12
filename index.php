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
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
<!-- <link rel="stylesheet" href="./assets/sass/style.css"> -->
    <title>AZ_Store</title>
</head>


<header class="border-b-2 border-b-solid border-b-white">
    <nav class="bg-[#111827] flex flex-row justify-around items-center h-20 border-b-lightgrey">
    <h1 class="text-white text-xl ">AZ[store]</h1>
    <a href="empty" class="text-white">Home</a>
    <a href="empty" class="text-white">About</a>
    <a href="empty" class="text-white">Products</a>
    <a href="empty" class="text-white">Contact</a>
    <a href="empty" class="text-white">Login</a>
    <img id="shopping_cart_logo" src="./assets/img/shopping-cart.svg" alt="shopping-cart" class="text-white">
    <form action ="shopping-cart.php">
        <button type="submit" class="bg-white border-black">Go to Cart</button>
</form>
    <?php


    ?>
    </nav>
</header>
<body class="bg-gradient-to-b from-[#111827] to-black">



<!-- store section -->
<section class="store">
<div>
    <h1 class="slogan_1 text-white text-5xl">Shoe the right <b class="text-[#2563eb]" >one</b>.</h1>
    <button id="Move_to_store" class="text-white p-4 m-3 bg-gradient-to-l from-[#203e91] to-[#397def]">See our store</button>
</div>
<div>
<img  id="big_shoe_1"src="./assets/img/shoe_one.png" alt="shoe_one" >
<p id="nike" class="text-white">NIKE</p>
</div>
</section>

<!-- products section -->
<section class="products">
<h2 id ="products"class ="text-white text-5xl"><b class="text-[#2563eb]">Our</b> last products</h2>
<?php
$i=0;
            foreach ($items as $item) {
                echo '<div class="products_shoes " id=' . $item["id"] . '>
                    <img class="text-white" src=' . $item['image_url'] . '> 
                    <h3 class="text-white text-emphasized">' . $item['product'] . '</h3> 
                    <p class="text-white">' . $item['price'] . '</p>
                    <form method="post" action="">
                        <button name="button' . $i . '" class="add_to_cart text-white bg-gradient-to-l from-[#203e91] to-[#397def] p-2 " type="submit">add to cart</button>
                    </form>
                </div>';
                $i++;
            }

?>
</section>


<!-- citations section -->
<section class="citation">
    <img src="./assets/img/shoe_two.png" alt="shoe_two" >
    <h1 id="slogan_2" class="text-white text-5xl">We provide you the <b class="text-[#2563eb]">best</b> quality.</h1>
    <p class="text-white text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci voluptas minima illo repudiandae aspernatur veniam praesentium eius harum distinctio earum iste repellat deserunt, quae, explicabo rerum sequi. Suscipit, odit blanditiis?</p>
</section>



<!-- commentaires section -->
<section class="commentaires mt-10">
<div id="emily" class="flex flex-col justify-center items-center">
    <img src="./assets/img/image-emily.jpg" class="rounded-full" alt="emily">
    <h3 class="text-white">Emily from XYZ</h3>
    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
</div>
<div id="Thomas" class="flex flex-col justify-center items-center">
    <img src="./assets/img/image-thomas.jpg" class="rounded-full" alt="emily">
    <h3 class="text-white">Thomas from corporate</h3>
    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
</div>
<div id="jennie" class="flex flex-col justify-center items-center">
    <img src="./assets/img/image-jennie.jpg" class="rounded-full" alt="emily">
    <h3 class="text-white">Jennie from Nike</h3>
    <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque, eum exercitationem quas iste doloremque vitae mollitia sint quibusdam placeat deserunt? Ex recusandae provident optio cupiditate tempora vel totam delectus eius!</p>
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