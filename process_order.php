<?php
session_start();
require 'db_connect.php';

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: checkout.php");
    exit();
}

$cart = $_SESSION['cart'];
$customer_name = mysqli_real_escape_string($conn, $_POST['customer_name']);
$phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
$address = mysqli_real_escape_string($conn, $_POST['address']);

$insertSuccess = true;

foreach ($cart as $item) {
    $product_name = mysqli_real_escape_string($conn, $item['title']);
    $price = $item['price'];
    $quantity = $item['quantity'];

    $sql = "INSERT INTO orders (customer_name, phone_number, address, product_name, price, quantity) 
            VALUES ('$customer_name', '$phone_number', '$address', '$product_name', '$price', '$quantity')";

    if (!mysqli_query($conn, $sql)) {
        $insertSuccess = false;
        break;
    }
}

if ($insertSuccess) {
    unset($_SESSION['cart']);
    $message = "Order placed successfully!";
} else {
    $message = "Error placing order. Please try again.";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Status - Booksvilla</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; background: #f4f4f4; padding: 50px; }
        .message { background: white; padding: 30px; display: inline-block; border-radius: 8px; }
        a { margin-top: 20px; display: inline-block; color: #007bff; text-decoration: none; font-size: 18px; }
    </style>
</head>
<body>
    <div class="message">
        <h1><?php echo $message; ?></h1>
        <a href="collection.html">Continue Shopping</a>
    </div>
</body>
</html>
