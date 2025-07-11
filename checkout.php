<?php
session_start();
$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
$total = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Booksvilla</title>
  <link rel="icon" href="fav.icon.png" type="image/png">

 <style>
  :root {
   --primary-color: #ffffff;
   --secondary-color: #FF3B30;
   --background-color: linear-gradient(to right, #000000, #2a312c, #000000);
   --button-hover: #E52020;
   --sub-background: #000000;
 }
 
 .light-mode {
   --primary-color: #000000;
   --secondary-color: #8cc0d4;
   --background-color: linear-gradient(to right, #aca7a7, #faeded, #aca7a7);
   --button-hover: #8d8f96;
   --sub-background: #9e9a9a;
 }
    body {
  font-family: Arial, sans-serif;
  background: ;
  padding: 20px;
}
.container {
  max-width: 800px;
  margin: auto;
  background: white;
  padding: 20px;
  border-radius: 8px;
}
h1 {
  text-align: center;
}
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}
table, th, td {
  border: 1px solid #ddd;
}
th, td {
  text-align: center;
  padding: 10px;
}
.total {
  text-align: right;
  margin-top: 20px;
}
.customer-form {
    margin-top: 30px;
    background: #f9f9f9;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.customer-form h3 {
    margin-bottom: 15px;
    color: #333;
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #555;
}

.customer-form input,
.customer-form textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 15px;
    transition: border-color 0.3s;
}

.customer-form input:focus,
.customer-form textarea:focus {
    outline: none;
    border-color: black;
}

.customer-form textarea {
    min-height: 80px;
    resize: vertical;
}

.place-order {
    width: 100%;
    padding: 12px;
    background: black;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

.place-order:hover {
    background:  #8d8f96;
}
.browse-more-btn {
    display: inline-block;
    padding: 10px 20px;
    background: black;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-weight: bold;
    transition: background 0.3s;
}

.browse-more-btn:hover {
    background: #8d8f96;
}

 </style>
</head>
<body>

<?php
// restrictipn to logged-in users only
// session_start();
// if (!isset($_SESSION['user_logged_in']) || $_SESSION['user_logged_in'] !== true) {
//     header("Location: login.php");
//     exit();

// ?>

<div class="container">
  <h1>Checkout</h1>

  <?php if (empty($cart)) : ?>
    <p>Your cart is empty. <a href="index.html">Continue Shopping</a></p>
  <?php else : ?>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($cart as $item) : 
        $subtotal = $item['price'] * $item['quantity'];
        $total += $subtotal;
      ?>
        <tr>
          <td><?php echo htmlspecialchars($item['title']); ?></td>
          <td>Rs <?php echo number_format($item['price']); ?></td>
          <td><?php echo $item['quantity']; ?></td>
          <td>Rs <?php echo number_format($subtotal); ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

    <div class="total">
      <h2>Grand Total: Rs <?php echo number_format($total); ?>/-</h2>
    </div>
<div style="text-align: center; margin-top: 20px;">
    <a href="collection.html" class="browse-more-btn">Add More Products</a>
</div>
   <form action="process_order.php" method="POST" class="customer-form">
    <h3>Customer Details</h3>
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="customer_name" placeholder="Your Name" required>
    </div>

    <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="text" id="phone" name="phone_number" placeholder="03xx-xxxxxxx" required>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea id="address" name="address" placeholder="Complete Delivery Address" required></textarea>
    </div>

    <button type="submit" class="place-order">Place Order</button>
</form>


  <?php endif; ?>
</div>


</body>
</html>
