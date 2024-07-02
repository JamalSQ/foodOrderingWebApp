<?php
require 'vendor/autoload.php';
require 'conn.php';

use Faker\Factory as Faker;

$faker = Faker::create();

// Number of records to insert
$numRecords = 10;

for ($i = 0; $i < $numRecords; $i++) {

    $description = $faker->sentence;
    $imgUrl = $faker->imageUrl(640, 480, 'food');
    $ingredients = implode(', ', $faker->words(5));
    $name = $faker->word;
    $price = $faker->randomFloat(2, 5, 20);

    $sql = "INSERT INTO mainmanu (discription, imgUrl, ingredients, name, price) 
            VALUES ('$description', '$imgUrl', '$ingredients', '$name', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }
}

$conn->close();
?>
