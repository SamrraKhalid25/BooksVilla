<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Account | BooksVilla</title>
  <link rel="icon" href="fav.icon.png" type="image/png" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400..700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
 

 * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
 }
 html {
  scroll-behavior: smooth;
}

body {
  font-family: 'Poppins', sans-serif;
  font-weight: 700;
  background: var(--background-color);
  color: var(--primary-color);
}


nav {
  display: flex;
  justify-content: center; 
  align-items: center; 
  position: relative; 
  flex-wrap: nowrap;
  padding: 10px 20px;
  position: sticky;
  top: 0;
  z-index: 1000;
  backdrop-filter: blur(10px);
  background: transparent;
}


.nav-links {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: flex;
  flex-wrap: nowrap;
  flex-direction: row;
  justify-content: space-around; 
  align-items: center; 
  gap: 15px; 
}

.nav-links a {
  text-decoration: none;
  color: var(--primary-color);
  font-size: 18px;
  font-weight: bold;
  padding: 10px 15px;
  transition: color 0.3s ease;
  white-space: nowrap; 
  margin: 0 10px; 
}

.nav-links a:hover {
  color: var(--button-hover);
}

.divider {
  width: 2px;
  height: 20px;
  background-color: var(--secondary-color);
}


.right-controls {
  margin-left: auto; 
  display: flex;
  align-items: center;
  gap: 15px;
}


.toggle-btn {
  background-color: var(--secondary-color);
  color: var(--primary-color);
  padding: 10px 14px;
  border: none;
  border-radius: 25px;
  cursor: pointer;
  font-weight: bold;
  display: flex;
  align-items: center;
  transition: all 0.3s ease;
}

.toggle-btn:hover {
  background-color: var(--button-hover);
  transform: scale(1.05);
  box-shadow: 0 0 10px var(--primary-color);
}

.social-icons {
  display: flex;
  gap: 10px;
}

.social-icons a {
  color: var(--primary-color);
  font-size: 24px;
  transition: color 0.3s ease;
  margin-right: 4px; 
}

.social-icons a:hover {
  color: var(--button-hover);
}
.icons {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-left: 15px;
}

.icons i {
  color: var(--primary-color);
  font-size: 20px;
  margin: 0 10px;
  cursor: pointer;
  position: relative;
}
.icons i:hover {
  color: var(--button-hover);
}
.search-container {
  display: flex;
  align-items: center;
  border-radius: 20px;
  overflow: hidden;
  background-color: transparent;
  margin: 0px; 
   padding: 5px 0px;
  width: 50%;
  justify-content: center;
  border: black 3px solid;
}

.search-input {
  border: none;
  outline: none;
  padding: 10px;
  font-size: 14px;
  width: 100%; 
  background: transparent;
  color: var(--primary-color);
}

.search-btn {
  background: var(--secondary-color);
  border: none;
  padding: 10px;
  border-radius: 50%;
  cursor: pointer;
  color:var(--primary-color);
  margin-left: 10px; 
}
.search-btn:hover {
  background-color: var(--button-hover);
  color: var(--primary-color);
}

.header-container {
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0; 
  padding: 0; 
  
}
.cart-badge {
   position: absolute; 
   top: -8px; 
   right: -10px;
    background: red; 
    color: white; 
    font-size: 12px; 
    padding: 2px 6px; 
    border-radius: 50%;
}
/* cart styling  */
.cartTab {
  display: flex;
  flex-direction: column;
  position: fixed;
  top: 0;
  right: 0;
  width: 400px;
  height: 100vh;
  background-color: #1c201b;
  color: #eee;
 transition: right 0.3s ease;
  box-shadow: -2px 0 10px rgba(0,0,0,0.3);
  padding: 10px;
  box-sizing: border-box;
  z-index: 999;
  inset: 90px -400px 0 auto;
}

body.showCart .cartTab {
  inset: 55px 0 0 auto;
}

.cartTab h2 {
  padding: 20px;
  margin-bottom: 10px;
  font-weight: 300;
}

.listCart {
  max-height: 500px;
  overflow-y: auto;
  padding: 10px;
}
.listCart::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}

.cartTab .listCart .item {
  display: grid;
  grid-template-columns: 70px 100px 40px 1fr;
  gap: 10px;
  text-align: center;
  align-items: center;
}

.cartTab .listCart .item img {
  width: 60px;
  height: 80px;
  object-fit: cover;
  margin-right: -20px;
}

.listCart .quantity span {
  display: inline-block;
  width: 20px;
  height: 20px;
  background-color: #eee;
  color: #555;
  border-radius: 50%;
  cursor: pointer;
}

.listCart .quantity span:nth-child(2) {
  background-color: transparent;
  color: #eee;
}

.listCart .item:nth-child(even) {
  background-color: #eee1;
}

#grand-total {
  font-weight: bold;
  margin: 10px 0;
  text-align: center;
  padding: 5px;
  background-color: #222;
}

.cartTab .btn {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 5px;
  padding: 20px 20px;
}

.cartTab .btn button {
  background-color: var(--secondary-color);
  border: none;
  font-family: poppins, sans-serif;
  font-weight: 500;
  cursor: pointer;
  padding: 10px 10px;
}

.cartTab .btn .close {
  background-color: #eee;
  color: black;
}

/* cart styling ends */

/* pop up alert */
.cart-alert {
  position: fixed;
  top: 60px;
  right: 650px;
  background: #4CAF50;
  color: white;
  padding: 10px 20px;
  border-radius: 4px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  z-index: 1001;
  opacity: 0;
  transform: translateY(-20px);
  transition: all 0.3s ease;
}

.cart-alert.show {
  opacity: 1;
  transform: translateY(0);
}
/* ends */
/* wishlist tab styling */
/* Wishlist Tab Hidden by Default */
.wishlistTab {
  position: fixed;
  top: 0;
  right: 0; /* Hidden off-screen */
  width: 400px;
  height: 100vh;
  background: #1c201b;
  color: #eee;
  box-shadow: -2px 0 10px rgba(0,0,0,0.3);
  transition: right 0.3s ease;
  z-index: 999;
  padding: 10px;
  box-sizing: border-box;
  inset: 90px -400px 0 auto;
  overflow-y: auto;
}

/* Wishlist Tab Visible when Active */
.wishlistTab.active {
  inset: 55px 0 0 auto;
}

.wishlistTab h2 {
  padding: 20px;
  margin-bottom: 10px;
  font-weight: 300;
}

/* Wishlist Item Style */
.listWishlist {
  max-height: 500px;
  overflow-y: auto;
  padding: auto;

}
.listWishlist::-webkit-scrollbar {
  display: none; /* Chrome, Safari, Opera */
}
.wishlist-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 10px;
  border-radius: 8px;
  margin-bottom: 15px;
  border-bottom: 1px solid #ddd;
  padding-bottom: 10px;
   text-align: center;
  align-items: center;
}

.wishlist-item img {
  width: 60px;
  height: 80px;
  object-fit: cover;
  border-radius: 5px;
 margin-right: -10px;

}

.wishlist-item h4 {
  margin: 0;
  font-size: 16px;
}

.wishlist-item p {
  margin: 2px 0;
  font-size: 14px;
  align-items: center;
  justify-content: center;
}

.wishlist-item button {
  background-color: var(--secondary-color);
  color: white;
  border: none;
  padding: 6px 8px;
  font-size: 14px;
  cursor: pointer;
  border-radius: 4px;
  margin: 2px;
  transition: background-color 0.3s ease;
  
}

.wishlist-item button.remove-wishlist {
  background-color: #eee;
  color: black;}
.listWishlist .move-to-cart {
  background-color: var(--secondary-color);
}

.listWishlist button:hover {
  filter: brightness(1.1);
}
.wishlistFooter {
  padding: 15px;
  text-align: center;
  border-top: 1px solid #333;
}

.closeWishlist {
  background-color: var(--secondary-color); /* Use your theme color */
  color: white;
  border: none;
  padding: 10px 20px;
  font-family: poppins, sans-serif;
  font-weight: 500;
  cursor: pointer;
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

.closeWishlist:hover {
  background-color: var(--button-hover);
  transform: scale(1.05);
  box-shadow: 0 0 10px var(--primary-color);
}




/* dashboard styling */
    .account-page {
  display: flex;
  padding: 20px 40px;
}

.sidebar {
  width: 200px;
  padding-right: 40px;
  border-right: 1px solid #eee;
}

.sidebar p {
  font-weight: bold;
  margin-top: 20px;
  color: var(--secondary-color);
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar ul li {
  margin: 5px 0;
  cursor: pointer;
  color: var(--primary-color);
}

.account-details {
  flex-grow: 1;
  padding-left: 40px;
}

.account-details h2 {
  font-size: 24px;
}

.banner {
  background: var(--secondary-color);
  padding: 20px;
  margin: 20px 0;
  color: white;
  font-size: 28px;
  font-weight: bold;
  text-align: center;
}

.boxes {
  display: flex;
  gap: 20px;
}

.box {
  padding: 20px;
  width: 250px;
  border-radius: 10px;
  background: transparent;
}
  </style>

<body>
   <!-- navbar start -->
    <nav>
        <div class="nav-links">
            <a href="home.html">Home</a>
            <span class="divider"></span>
            <a href="collection.html">Our Collection</a>
            <span class="divider"></span>
            <a href="aboutus.html">About Us</a>
            <span class="divider"></span>
            <a href="contact.php">Contact Us</a>
            <span class="divider"></span>
            <a href="Bbestsellers.html">Best Sellers</a>
            <span class="divider"></span>
        </div>
        <div class="right-controls">
            <!-- Theme Toggle Button -->
            <button class="toggle-btn" onclick="toggleTheme()">
              <i class="fas fa-moon"></i>
            </button>
      
      
            <div class="social-icons">
                <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
          </nav>
          <!-- navbar end -->
   
   <!-- header start -->
    <div class="header-container">
        <img src="images/logo/logo new.png" alt="Logo" class="logo">
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search Here ...">
            <button class="search-btn"><i class="fas fa-search"></i></button>
        </div>
<!-- icons -->
        <div class="icons">
<i class="fas fa-heart" id="wishlist-toggle"></i>
  <a href="login.php">
  <i class="fas fa-user"></i></a>
  <i class="fas fa-shopping-cart icon-cart" >
    <span id="cart-count" class="cart-badge">0</span>
  </i>
</div>
</div>
<!-- icons end -->
  <!-- cart starts here -->
  <!-- Cart Alert -->
<div id="cart-alert" class="cart-alert"></div>
 <div class="cartTab">
  <h2>Shopping Cart</h2>
  
  <div class="listCart">
    <!-- Cart items will be injected here by JS -->
  </div>

 <div class="cartFooter">
    <div id="grand-total">Grand Total: RS 0/-</div>
    <div class="btn">
      <button class="close">CLOSE</button>
      <button class="checkOut">CHECKOUT</button>
    </div>
  </div>
</div>

 <!-- cart ends here -->
  <!-- wishist starts -->
   <!-- Wishlist Tab -->
    <div id="wishlist-alert" class="cart-alert"></div>
<div class="wishlistTab">
  <h2>Your Wishlist</h2>

  <div class="listWishlist">
    <!-- Wishlist items will appear here -->
  </div>

  <div class="wishlistFooter">
    <button class="closeWishlist">Close</button>
  </div>
</div>
    





  <main class="account-page">
    <aside class="sidebar">
      <p>DASHBOARD</p>
      <ul>
<li id="wishlist-toggle">Wishlist</li>
        <li>Account Details</li>
        <li>Sign Out</li>
      </ul>
    </aside>

    <section class="account-details">
      <h2>Welcome Samra</h2>
      <div class="banner">BooksVilla</div>
      <div class="boxes">
        <div class="box">
          <h3>ADDRESS BOOK</h3>
          <p>Manage Address</p>
        </div>
        <div class="box">
          <h3>ACCOUNT DETAILS</h3>
          <p><strong>Name:</strong> Samra Khalid</p>
          <p><strong>Email:</strong> samrrakhalid2005@gmail.com</p>
        </div>
      </div>
    </section>
  </main>
<div id="cart-alert" class="cart-alert">Product added to cart!</div>

<!-- Wishlist Alert -->
<div id="wishlist-alert" class="cart-alert">Product added to wishlist!</div>
   

<script>
  //  theme toggle functionality
      function toggleTheme() {
    document.body.classList.toggle("light-mode");
    const icon = document.querySelector(".toggle-btn i");
    const isLightMode = document.body.classList.contains("light-mode");

    // Save preference
    localStorage.setItem("theme", isLightMode ? "light" : "dark");

    // Update icon
    icon.classList.remove(isLightMode ? "fa-moon" : "fa-sun");
    icon.classList.add(isLightMode ? "fa-sun" : "fa-moon");
}
window.addEventListener("DOMContentLoaded", () => {
    const savedTheme = localStorage.getItem("theme");
    const icon = document.querySelector(".toggle-btn i");

    if (savedTheme === "light") {
        document.body.classList.add("light-mode");
        if (icon) {
            icon.classList.remove("fa-moon");
            icon.classList.add("fa-sun");
        }
    } else {
        if (icon) {
            icon.classList.remove("fa-sun");
            icon.classList.add("fa-moon");
        }
    }
});
// Cart functionality`~
  let iconCart = document.querySelector('.icon-cart');
  let closeCart = document.querySelector('.close');
  let body = document.querySelector('body');

  iconCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
  }); 
 closeCart.addEventListener('click', () => {
    body.classList.toggle('showCart')
  });
// cart functionality end

window.addEventListener('DOMContentLoaded', function() {
  document.querySelectorAll('.add-cart-btn').forEach(button => {
    button.addEventListener('click', function(e) {
      const card = button.closest('.flip-card-inner').querySelector('.flip-card-front');
      const name = card.querySelector('h4, h5').textContent.trim();
      const priceText = card.querySelector('p:last-of-type').textContent.trim();
      const price = parseInt(priceText.replace(/[^0-9]/g, ''));
      addToCart(name, price);
    });
  });
  // Cart icon click always shows the popup and updates contents
  const cartIcon = document.querySelector('.cart-icon');
  if (cartIcon) {
    cartIcon.addEventListener('click', function() {
      updateCartPopup();
      showCartPopup();
    });
  }
});

// add to cart functionality
let cart = []; 
let cartCount = 0;

const cartCountEl = document.getElementById('cart-count');
const addToCartButtons = document.querySelectorAll('.add-cart-btn');
const listCart = document.querySelector('.listCart');
const cartTab = document.querySelector('.cartTab');
const closeCartBtn = document.querySelector('.close');
const cartIcon = document.querySelector('.icon-cart');
const grandTotalEl = document.getElementById('grand-total'); // Grand total element

// Load cart from localStorage
window.addEventListener('load', () => {
  const storedCart = localStorage.getItem('cart');
  if (storedCart) {
    cart = JSON.parse(storedCart);
    updateCartCount();
    renderCart();
  }
});

// Show Cart Popup
cartIcon.addEventListener('click', () => {
  cartTab.style.display = 'block';
});

// Close Cart Popup
closeCartBtn.addEventListener('click', () => {
  cartTab.style.display = 'none';
});

// Popup Alert
function showCartAlert(message) {
  const alertBox = document.getElementById('cart-alert');
  alertBox.innerText = message;
  alertBox.classList.add('show');

  setTimeout(() => {
    alertBox.classList.remove('show');
  }, 3000);
}

// Update cart count
function updateCartCount() {
  cartCount = cart.reduce((sum, item) => sum + item.quantity, 0);
  cartCountEl.innerText = cartCount;
}

// Render cart items
function renderCart() {
  listCart.innerHTML = '';
if (cart.length === 0) {
  listCart.innerHTML = `<p style="text-align:center; padding: 10px;">No items in your cart.</p>`;
  updateGrandTotal(); // Still update total to show 0
  return;
}

  cart.forEach((item, index) => {
    const cartItem = document.createElement('div');
    cartItem.classList.add('item');
    cartItem.innerHTML = `
      <div class="image">
        <img src="${item.imageSrc}" alt="">
      </div>
      <div class="name">${item.title}</div>
      <div class="totalPrice">RS ${item.price * item.quantity}/-</div>
      <div class="quantity">
        <span class="minus" data-index="${index}"><</span>
        <span>${item.quantity}</span>
        <span class="plus" data-index="${index}">></span>
      </div>
      <div class="remove" data-index="${index}" style="color:red;cursor:pointer;">Remove</div>
    `;
    listCart.appendChild(cartItem);
  });

  updateGrandTotal();
  attachCartEvents();
}

// Add item to cart
addToCartButtons.forEach(button => {
  button.addEventListener('click', () => {
    const card = button.closest('.flip-card');
    const title = card.dataset.title;
    const price = parseFloat(card.dataset.price);
    const imageSrc = card.dataset.image;

    const existingItem = cart.find(item => item.title === title);

    if (existingItem) {
      existingItem.quantity++;
    } else {
      cart.push({ title, price, imageSrc, quantity: 1 });
    }

    saveCart();
    updateCartCount();
    renderCart();
    showCartAlert(`${title} added to your cart!`);
  });
});

// Save to localStorage
function saveCart() {
  localStorage.setItem('cart', JSON.stringify(cart));
}

// Update Grand Total
function updateGrandTotal() {
  const grandTotal = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
  grandTotalEl.innerText = `Grand Total: RS ${grandTotal}/-`;
}

// Attach plus, minus, remove events
function attachCartEvents() {
  const plusButtons = document.querySelectorAll('.plus');
  const minusButtons = document.querySelectorAll('.minus');
  const removeButtons = document.querySelectorAll('.remove');

  plusButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const index = btn.dataset.index;
      cart[index].quantity++;
      saveCart();
      updateCartCount();
      renderCart();
    });
  });

  minusButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const index = btn.dataset.index;
      if (cart[index].quantity > 1) {
        cart[index].quantity--;
      } else {
        cart.splice(index, 1); 
      }
      saveCart();
      updateCartCount();
      renderCart();
    });
  });

  removeButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      const index = btn.dataset.index;
      cart.splice(index, 1);
      saveCart();
      updateCartCount();
      renderCart();
    });
  });
}
// cart functionality ends here
// Wishlist Elements
const wishlistTab = document.querySelector(".wishlistTab");
const wishlistToggle = document.getElementById("wishlist-toggle");
const closeWishlistBtn = document.querySelector(".closeWishlist");
const listWishlist = document.querySelector(".listWishlist");

// Load wishlist from localStorage
let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

// Show/Hide Wishlist Tab
wishlistToggle.addEventListener("click", () => {
  wishlistTab.classList.toggle("active");
});

closeWishlistBtn.addEventListener("click", () => {
  wishlistTab.classList.remove("active");
});

// Add to Wishlist from Product Card
document.querySelectorAll(".wishlist-btn").forEach(button => {
  button.addEventListener("click", () => {
    const productCard = button.closest(".flip-card");

    const product = {
      title: productCard.dataset.title,
      price: parseFloat(productCard.dataset.price),
      imageSrc: productCard.dataset.image
    };

    if (!wishlist.find(item => item.title === product.title)) {
      wishlist.push(product);
      localStorage.setItem('wishlist', JSON.stringify(wishlist));
      renderWishlist();
      showWishlistAlert(`${product.title} added to your wishlist!`);
    } else {
      showWishlistAlert("Already in Wishlist");
    }
  });
});

// Render Wishlist Items
function renderWishlist() {
  listWishlist.innerHTML = "";
if (wishlist.length === 0) {
  listWishlist.innerHTML = `<p style="text-align:center; padding: 10px;">No items in your wishlist.</p>`;
  return;
}

  wishlist.forEach((product, index) => {
    const item = document.createElement("div");
    item.classList.add("wishlist-item");

    item.innerHTML = `
      <img src="${product.imageSrc}" width="50">
      <div>
        <h4>${product.title}</h4>
        <p>Rs ${product.price}/-</p>
        <button class="remove-wishlist" data-index="${index}">Remove</button>
        <button class="move-to-cart" data-index="${index}">Add to Cart</button>
      </div>
    `;

    listWishlist.appendChild(item);
  });

  // Remove from Wishlist
  document.querySelectorAll(".remove-wishlist").forEach(btn => {
    btn.addEventListener("click", () => {
      const index = btn.dataset.index;
      wishlist.splice(index, 1);
      localStorage.setItem('wishlist', JSON.stringify(wishlist));
      renderWishlist();
    });
  });

  // Move to Cart from Wishlist
  document.querySelectorAll(".move-to-cart").forEach(btn => {
    btn.addEventListener("click", () => {
      const index = btn.dataset.index;
      const product = wishlist[index];
      wishlist.splice(index, 1);
      localStorage.setItem('wishlist', JSON.stringify(wishlist));
      renderWishlist();

      // Check if item exists in cart
      const existingItem = cart.find(item => item.title === product.title);
      if (existingItem) {
        existingItem.quantity++;
      } else {
        cart.push({ title: product.title, price: product.price, imageSrc: product.imageSrc, quantity: 1 });
      }

      saveCart();
      updateCartCount();
      renderCart();
      showCartAlert(`${product.title} added to your cart!`);
    });
  });
}

// Render wishlist on page load
window.addEventListener('DOMContentLoaded', renderWishlist);

// Checkout functionality
const checkoutBtn = document.querySelector('.checkOut');

checkoutBtn.addEventListener('click', () => {
  if (cart.length === 0) {
    showCartAlert("Your cart is empty!");
    return;
  }

  fetch('set_cart.php', {
    method: 'POST',
    headers: {'Content-Type': 'application/json'},
    body: JSON.stringify(cart)
  })
  .then(res => res.json())
  .then(data => {
    if (data.success) {
      window.location.href = 'checkout.php';
    } else {
      showCartAlert("Failed to send cart data. Try again.");
    }
  })
  .catch(err => {
    console.error(err);
    showCartAlert("Error connecting to server.");
  });
});

// Show Cart Alert
function showCartAlert(message) {
  const alertBox = document.getElementById('cart-alert');
  alertBox.innerText = message;
  alertBox.classList.add('show');

  setTimeout(() => {
    alertBox.classList.remove('show');
  }, 3000);
}

// Show Wishlist Alert
function showWishlistAlert(message) {
  const alertBox = document.getElementById('wishlist-alert');
  alertBox.innerText = message;
  alertBox.classList.add('show');

  setTimeout(() => {
    alertBox.classList.remove('show');
  }, 3000);
}






</script>
</body>
</html>
