<?php
require 'vendor/autoload.php';

use Faker\Factory as Faker;

$faker = Faker::create();


require 'conn.php';

// Number of records to insert
$numRecords = 10;

for ($i = 0; $i < $numRecords; $i++) {

    $orderid = $faker->numberBetween(1,10);
    $mainmenuid = $faker->numberBetween(1,10);

    $sql = "INSERT INTO `totaliteminorder`(`order_id`, `main_menu_id`) 
            VALUES ('$orderid', '$mainmenuid')";
    

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }
}

$conn->close();
?>
