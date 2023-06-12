<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="authors" content="Jodie Addis">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="./dist/output.css">
</head>
<body class="bg-bg-blue-gray">
    <header class="bg-gray-900 text-white flex justify-between pl-6 pr-6 pt-6 pb-6 border-b-solid border-b-white border-b-2">
    <p class="site_name">AZ[store]</p>
    <div class="site_navigation">
        <ul class="flex flex-row">
            <li class="mr-6 ml-6 cursor-pointer">Home</li>
            <li class="mr-6 ml-6 cursor-pointer">About</li>
            <li class="mr-6 ml-6 cursor-pointer">Products</li>
            <li class="mr-6 ml-6 cursor-pointer">Contact</li>
        </ul>
    </div>
    <div class="site_cart">
        <img src="./assets/img/shopping-cart.svg" alt="shopping icon" class="w-8 invert">
    </div>
    </header>
    <main>
        <section class="flex justify-center py-8">
            <img src="./assets/img/basket.svg" class="cart_header_img mr-2 w-6 invert">
            <h1 class="ml-2 text-2xl text-white">My shopping cart</h1>
        </section>
        <section class="bg-gray-900 text-white w-5/6 pb-8">
            <div class="flex justify-between">
                <div>
                    <p>Items</p>
                </div>
                <p>Quantity</p>
                <p>Price</p>
                <p>Remove</p>
            </div>
        </section>
        <section class="">
            <div class="text-white">
                    <?php
                    $jsonFile = "./assets/json/cart.json";
                    $json = file_get_contents("./assets/json/cart.json"); 
                    // echo $json; 
                    $data = json_decode($json, true); 
                    // print_r($data);//Totalité de l'objet
                    // print_r($data[0]);//Sélectionne l'array dans l'objet
                    foreach ($data as $index => $item){
                        if(!$data){
                            return;
                        } else {
                        echo '
                        <div id="product_'.$index.'" class="flex justify-between w-5/6 m-10">
                            <div>
                                <img src="'.$item['image_url'].'" alt="Picture of the product selected" class="w-32">
                                <p class="margin mt-8">'.$item['product'].'</p>
                            </div>
                            <p>'.$item['quantity'].'</p>
                            <p>'.$item['price'].'</p>
                            <form method="post">
                            <input type="hidden" value='.$index.' name="button">
                                <button type="submit" value="Remove">Remove</button>
                            </form>
                        </div>
                        '; 
                        }
                    }
                    if (isset($_POST['button'])){
                        $item_value = $_POST['button'];
                            if (isset($data[$item_value])){
                                unset($data[$item_value]);
                            }
                                file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
                            }
                            ?>
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
// $jsonFile = "./assets/json/cart.json";
// $json = file_get_contents("./assets/json/cart.json"); 
// // echo $json; 
// $data = json_decode($json, true); 
// // print_r($data);//Totalité de l'objet
// // print_r($data[0]);//Sélectionne l'array dans l'objet


// foreach ($data as $index => $item){
//     if(!$data){
//         return;
//     } else {
//     echo '
//     <div id="product_'.$index.'">
//         <div>
//             <img src="'.$item['image_url'].'" alt="Picture of the product selected" class="w-32">
//             <p>'.$item['product'].'</p>
//         </div>
//         <p>'.$item['quantity'].'</p>
//         <p>'.$item['price'].'</p>
//         <form method="post">
//         <input type="hidden" value='.$index.' name="button">
//             <button type="submit" value="Remove">Remove</button>
//         </form>
//     </div>
//     '; 
//     }
// }

// if (isset($_POST['button'])){
//     $item_value = $_POST['button'];
//         if (isset($data[$item_value])){
//             unset($data[$item_value]);
//         }
//             file_put_contents($jsonFile, json_encode($data, JSON_PRETTY_PRINT));
//         }
?>