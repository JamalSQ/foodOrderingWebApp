<?php
require 'vendor/autoload.php';
use Faker\Factory as Faker;
$faker = Faker::create();

require 'conn.php';

// Number of records to insert
$numRecords = 10;

for ($i = 0; $i < $numRecords; $i++) {
    $customerName = $faker->name;
    $itemQuantities = $faker->numberBetween(1,5);
    $orderDate = $faker->dateTimeThisYear->format('Y-m-d H:i:s');
    $status = $faker->randomElement(['pending', 'completed', 'cancelled']);
    $tableNo = $faker->numberBetween(1,10);
    $price = $faker->randomFloat(2, 5, 100);

    $sql = "INSERT INTO `order`(`customerName`, `itemQuantities`, `orderDate`, `status`, `tableNo`, `price`) 
            VALUES ('$customerName', '$itemQuantities', '$orderDate', '$status', '$tableNo', '$price')";
    

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }
}

$conn->close();
?>
