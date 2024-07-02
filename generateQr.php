<?php
// Include the PHPQRCode library
include 'phpqrcode/qrlib.php';

// The URL or data you want to encode in the QR code
$data = __dir__."/menu.php";

// Define the path where you want to save the QR code image
$filePath = 'qrcode.png';

// Generate the QR code and save it as an image file
QRcode::png($data, $filePath, QR_ECLEVEL_H, 10);

// Output the QR code as an inline image
header('Content-Type: image/png');
QRcode::png($data);

?>
