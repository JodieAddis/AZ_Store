<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            /* display: flex;
            flex-direction: row; */
            /* justify-content: space-around; */
            /* background-color: black; */
            /* color: white; */
            /* padding: 10px; */
        }
        form{
            /* display: flex;
            flex-direction: column;
            border: 2px solid rgba(255, 255, 255, .3);
            border-radius: 5px;
            width: 200px;
            gap: 10px;
            padding: 0px 10px 10px; */
        }
        aside {
            display: flex;
            flex-direction: column;
            width: 300px;
            /* padding: 5px; */
            gap: 10px;
        }
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
        button{
            width: 50%;
            height: 20px;
            border-radius: 5px;
            /* margin: 10px 0px; */
        }
    </style>
</head>
<body class="flex flex-row justify-around bg-black text-white p-2.5">
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
        
    
    <form action="" method="post" class="flex flex-col px-2.5 pt-0 pb-2.5 gap-2.5 w-52 border-2 border-solid border-white/50">
    <div><h2><span class="color-blue">Your</span> infos</h2></div>
        <label for="firstname">Fisrtname</label>
        <input type="text" name="firstname" id="firstname_input">
        <span>
            <?php  if (empty($firstname)){
            echo "There is no firstname";
            } ?>
        </span>
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" id="lastname_input">
        <span>
            <?php     if (empty($lastname)){
            echo "There is no lastname";
            } ?>
        </span>    
        <label for="">Email</label>
        <input type="email" name="email" id="email_input">
        <span>
            <?php if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            echo "This is not a valid email adress";
            } ?>
        </span>
        <div><p></p></div>
        <label for="street">Street</label>
        <input type="text" name="street" id="street_input">
        <span>
            <?php     if (empty($street)){
             echo "There is no street";
             } ?>
        </span>
        <label for="number">Number</label>
        <input type="number" name="number" id="number_input">
        <span>
            <?php     if (empty($number)){
            echo "There is no number";
              } ?>
        </span>
        <label for="city">City</label>
        <input type="text" name="city" id="city_input">
        <span>
            <?php     if (empty($city)){
            echo "There is no city";
            } ?>
        </span>
        <label for="zip_code">Zip code</label>
        <input type="number" name="zip_code" id="zipcode_input">
        <span>
            <?php     if (empty($zip_code)){
            echo "There is no zip code";
            } ?>
        </span>
        <label for="country">Country</label>
        <input type="text" name="country" id="country_input">
        <span>
            <?php     if (empty($country)){
            echo "There is no country";
            } ?>
        </span>
        <button type="submit" name="submit">Submit information</button>
    </form>

    <!-- Ceci est un test, tu t'appelles <?php echo $firstname . " " . gettype($firstname) . " ". $lastname . " ton mail est " . $email . " ".$street. " " . $number . " " . $city. " " . $zip_code . " " . $country?> -->

    <aside>
        <h2><span class="color-blue">Your</span> store</h2>
        <?php
            $shoppings = array(
                'basket1' => array(
                'id' => 1,
                'picture' => 'picture1',
                'title' => 'nikeAir1',
                'price' => 234,
                'quantity' => 1
                ),
                'basket2' => array(
                'id' => 2,
                'picture' => 'picture2',
                'title' => 'nikeAir2',
                'price' => 234,
                'quantity' => 2,
                ),
            );
            // print_r ($shoppings);
            foreach($shoppings as $shopping){
                echo 
                "
                    <div class='baskets'>
                    <img src='".$shopping['picture']."'>
                    <span>".$shopping['title']."</span>
                    <span>".$shopping['price']." €</span>
                    <span>Quantity : ".$shopping['quantity']."</span>
                    </div>
                ";
            }
        
        ?>
        <!-- <button type="submit_cart">Validate <span class="color-blue">your</span> store</button> -->
    </aside>   
</body>
</html>