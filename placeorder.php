<?php
session_start();
include "conn.php";

// Check if cart is set and not empty
if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    if (isset($_POST['name']) && isset($_POST['tableno'])) {

    // Fetch the latest order ID from the `order` table
    $query = "SELECT id FROM `order` ORDER BY id DESC LIMIT 1";
    $fetchid = mysqli_query($conn, $query);
    $arr = mysqli_fetch_assoc($fetchid);
    $id = $arr['id'] + 1; // Increment to get a new unique ID for the next order

    $count=0;
       
    if(isset($_POST['totalprice'])){
        $totalprice= $_POST['totalprice'];
       }
       $name = $_POST['name'];
       $tableNo = $_POST['tableno'];


    foreach ($_SESSION['cart'] as $item) {

        if($count==0){
            $count++;

        $mainmenuid = $item['id'];
        // $name = $item['name'];
        $discription = $item['discription'];
        $imgUrl = $item['imgUrl'];
        $ingredients = $item['ingredients'];
        $price = $item['price'];
        $quantity = $item['quantity'];

        // Format orderDate
        $date = new DateTime(); // Create a new DateTime object with current date and time
        $dateFormatted = $date->format('Y-m-d H:i:s'); // Format the date as 'Y-m-d H:i:s'

        // Generate a random table number
        // $tableNo = rand(1, 10);

        // Insert into `order` table
        $sql = "INSERT INTO `order`(`id`, `customerName`, `ImgUrl`, `orderDate`, `status`, `tableNo`, `price`) 
                VALUES ('$id', '$name', '$imgUrl', '$dateFormatted', 'Pending', '$tableNo', '$totalprice')";
        $res = mysqli_query($conn, $sql);
        }



        // Extract item details from session cart
        $mainmenuid = $item['id'];
        $quantity1 = $item['quantity'];

        

        for($i=0; $i<$quantity1; $i++){
        // Insert into `totaliteminorder` table
        $sql1 = "INSERT INTO `totaliteminorder`(`order_id`, `main_menu_id`) 
                 VALUES ('$id', '$mainmenuid')";
                //  echo var_dump($mainmenuid);
        $res1 = mysqli_query($conn, $sql1);
        }    
    }
     // Check if both inserts were successful
     if ($res1) {
        echo "Data added successfully<br>";
        
    } else {
        echo "Error: " . mysqli_error($conn) . "<br>";
    }

    unset($_SESSION['cart']);
}else{
    echo "name and Table no is required";
}
}
?>
