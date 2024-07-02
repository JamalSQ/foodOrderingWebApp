<?php
session_start();
include "conn.php";

// Set the response content type to JSON
header('Content-Type: application/json');

// Get the request payload and decode the JSON data
$requestPayload = file_get_contents('php://input');
$data = json_decode($requestPayload, true);

// Validate and get the item ID from the data
if (!isset($data['id'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid item ID']);
    exit;
}

$itemId = $data['id'];

// Fetch item details from the database
$qry = "SELECT * FROM mainmanu WHERE id=$itemId";
$res = mysqli_query($conn, $qry);
$item = mysqli_fetch_assoc($res);

// Check if the item exists
if (!$item) {
    echo json_encode(['success' => false, 'message' => 'Item not found']);
    exit;
}

// Initialize cart if not already done
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Add item to cart
if (!isset($_SESSION['cart'][$itemId])) {
    $_SESSION['cart'][$itemId] = $item;
    $_SESSION['cart'][$itemId]['quantity'] = 1;
} else {
    $_SESSION['cart'][$itemId]['quantity'] += 1;
}
// Return success response
echo json_encode(['success' => true, 'message' => 'Item added to cart']);
?>
