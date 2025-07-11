<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Checkout - Booksvilla</title>
  <link rel="icon" href="fav.icon.png" type="image/png">

  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }
    h1 {
      text-align: center;
    }
    .checkout-summary {
      max-width: 500px;
      margin: 0 auto;
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 6px;
      background: #f9f9f9;
    }
    .checkout-item {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .grand-total {
      font-weight: bold;
      font-size: 18px;
      text-align: right;
      margin-top: 20px;
    }
    .place-order-btn {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      margin-top: 20px;
      width: 100%;
      font-size: 16px;
    }
  </style>
</head>
<body>

<h1>Checkout</h1>

<div class="checkout-summary" id="checkout-summary">
  <!-- Cart items and total will be loaded here -->
</div>

<script>
// Load cart from localStorage
const cart = JSON.parse(localStorage.getItem('cart')) || [];
const checkoutSummary = document.getElementById('checkout-summary');

if (cart.length === 0) {
  checkoutSummary.innerHTML = "<p>Your cart is empty. Please add items before checkout.</p>";
} else {
  let total = 0;
  cart.forEach(item => {
    const itemTotal = item.price * item.quantity;
    total += itemTotal;

    const itemDiv = document.createElement('div');
    itemDiv.classList.add('checkout-item');
    itemDiv.innerHTML = `
      <span>${item.title} (x${item.quantity})</span>
      <span>RS ${itemTotal}/-</span>
    `;
    checkoutSummary.appendChild(itemDiv);
  });

  const totalDiv = document.createElement('div');
  totalDiv.classList.add('grand-total');
  totalDiv.innerText = `Grand Total: RS ${total}/-`;
  checkoutSummary.appendChild(totalDiv);

  const placeOrderBtn = document.createElement('button');
  placeOrderBtn.classList.add('place-order-btn');
  placeOrderBtn.innerText = "Place Order";
  placeOrderBtn.addEventListener('click', () => {
    alert("Order Placed Successfully!");
    localStorage.removeItem('cart'); // Clear cart after order
    window.location.href = "index.html"; // Redirect to home or confirmation page
  });

  checkoutSummary.appendChild(placeOrderBtn);
}
</script>

</body>
</html>
