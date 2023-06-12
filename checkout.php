<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .color-blue{
            color: #2563eb;
        }
        .baskets {
            display: flex;
            flex-direction: column;
            gap: 10px;
            border: 2px solid rgba(255, 255, 255, .3);
            border-radius: 5px;
            padding: 5px;
        }
    </style>
</head>
<body class="flex flex-row justify-around bg-black text-white p-2.5 gap-10">
    <?php 
    if (isset($_POST['firstname'])) {
        $firstname = $_POST['firstname'];

    } 
    // echo $firstname;
    if (isset($_POST['lastname'])) {
        $lastname = trim($_POST['lastname']);
    }
    if (isset($_POST['email'])) {
        // $email = $_POST['email'];
        // ($email.trim() !== "") ? 
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        // if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        //     echo "This is not a valid email adress";
        //     }
    }
    if (isset($_POST['street'])) {
        $street = trim($_POST['street']);
    }
    if (isset($_POST['number'])) {
        $number = $_POST['number'];
    }
    if (isset($_POST['city'])) {
        $city = trim($_POST['city']);
    }
    if (isset($_POST['zip_code'])) {
        $zip_code = trim($_POST['zip_code']);
    }
    if (isset($_POST['country'])) {
        $country = trim($_POST['country']);
    }
    if (isset($_POST['submit'])) {
        $submit = trim($_POST['submit']);
    }

    // if (strlen($_POST['submit']) > 0) {
    //     echo "submit pressed";
    // }

    // $dataUser = array (
    //     [firstname] => $firstname,
    //     [lastname] => $lastname,

    // )

    // print_r($dataUser);
    // function verify_input(){
    // echo "Thank you for your order!";
    // }

// $element;
// function verify_input ($element) {
//     if (!empty($element)) {
//         if (!preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ ",$element)) {
//             echo "its a ok";
//         } else {
//             echo "Only letters and white space allowed";
//         }
//     } else {
//         echo "EMPTY";
//     }
// }
// verify_input("benjamin@hotmail.fr");

    ?>
        
    <form action="" method="post" class="flex flex-col px-2.5 pt-0 pb-2.5 gap-2 w-1/3 border-2 border-solid border-white/50 rounded-md bg-cover"
  style="background-image: url('./assets/img/shoe_one.png'); height: auto">
    <div><h2 class="font-semibold text-2xl"><span class="text-blue-600">Your</span> infos</h2></div>
        <label for="firstname">Fisrtname</label>
        <input class="rounded-md" type="text" name="firstname" id="firstname_input">
        <span>
            <?php  if (empty($firstname)){
            echo "There is no firstname";
            } ?>
        </span>
        <label for="lastname">Lastname</label>
        <input class="rounded-md" type="text" name="lastname" id="lastname_input">
        <span>
            <?php     if (empty($lastname)){
            echo "There is no lastname";
            } ?>
        </span>    
        <label for="">Email</label>
        <input class="rounded-md" type="email" name="email" id="email_input">
        <span>
            <?php if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            echo "This is not a valid email adress";
            } ?>
        </span>
        <div><p></p></div>
        <label for="street">Street</label>
        <input class="rounded-md" type="text" name="street" id="street_input">
        <span>
            <?php     if (empty($street)){
             echo "There is no street";
             } ?>
        </span>
        <label for="number">Number</label>
        <input class="rounded-md" type="number" name="number" id="number_input">
        <span>
            <?php     if (empty($number)){
            echo "There is no number";
              } ?>
        </span>
        <label for="city">City</label>
        <input class="rounded-md" type="text" name="city" id="city_input">
        <span>
            <?php     if (empty($city)){
            echo "There is no city";
            } ?>
        </span>
        <label for="zip_code">Zip code</label>
        <input class="rounded-md" type="number" name="zip_code" id="zipcode_input">
        <span>
            <?php     if (empty($zip_code)){
            echo "There is no zip code";
            } ?>
        </span>
        <label for="country">Country</label>
        <input class="rounded-md" type="text" name="country" id="country_input">
        <span>
            <?php     if (empty($country)){
            echo "There is no country";
            } ?>
        </span>
        <button class="rounded-md bg-blue-600 align-middle w-1/2 text-lg" type="submit" name="submit">Go For It !</button>
    </form>

    <!-- Ceci est un test, tu t'appelles <?php echo $firstname . " " . gettype($firstname) . " ". $lastname . " ton mail est " . $email . " ".$street. " " . $number . " " . $city. " " . $zip_code . " " . $country?> -->

    <aside class="flex flex-col w-2/3 content-center gap-2.5">
        <h2 class="font-semibold text-2xl"><span class="text-blue-600">Your</span> store</h2>
        <?php
            // $shoppings = array(
            //     'basket1' => array(
            //     'id' => 1,
            //     'picture' => 'picture1',
            //     'title' => 'nikeAir1',
            //     'price' => 234,
            //     'quantity' => 1
            //     ),
            //     'basket2' => array(
            //     'id' => 2,
            //     'picture' => 'picture2',
            //     'title' => 'nikeAir2',
            //     'price' => 234,
            //     'quantity' => 2,
            //     ),
            // );

            $jsonFile = "./assets/json/cart.json";
            $json = file_get_contents("./assets/json/cart.json");  
            $data = json_decode($json, true); 

            foreach($data as $index => $item){
                if(!$data){
                    return;
                } else {
                    echo "
                    <div class='baskets'>
                    <img src='".$item['image_url']."'alt='Picture of the product selected'>
                    <span>".$item['product']."</span>
                    <span>".$item['price']." €</span>
                    <span>Quantity : ".$item['quantity']."</span>
                    </div>
                ";
                }
            }
        ?>
    </aside>   
</body>
</html>