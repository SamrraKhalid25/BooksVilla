<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $region = $_POST['region'];
    $topic = $_POST['topic'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_requests (email, region, topic, subject, message)
            VALUES ('$email', '$region', '$topic', '$subject', '$message')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Message submitted successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Booksvilla</title>
    <link rel="icon" href="fav.icon.png" type="image/png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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




.header-container {
   display: flex;
   justify-content: center;
   align-items: center;
   margin: 0; 
   padding: 0; 
   
}
#scrollToTop {
   position: fixed;
   bottom: 20px;
   right: 20px;
   width: 50px;
   height: 50px;
   background-color: var(--secondary-color);
   color: white;
   border: none;
   border-radius: 50%;
   font-size: 24px;
   cursor: pointer;
   display: none; /* Hidden by default */
   transition: opacity 0.3s, transform 0.3s;
}

#scrollToTop:hover {
   background-color: var(--button-hover);
   color: var(--primary-color);
   color: #0d0d2b;
   transform: scale(1.05);
   box-shadow: 0 0 15px var(--primary-color);
}

@media (max-width: 768px) {
  .nav-links {
    flex-direction: column;
    gap: 10px;
  }

  .search-container {
    width: 100%;
  }
}
@media (max-width: 480px) {
  .nav-links {
    flex-direction: column;
    gap: 5px;
  }
}

        
        body {
            background-color: #f9f9f7;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 40px 20px;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 50px;
        }
        
        /* Breadcrumb */
        .breadcrumb {
            color: var(--primary-color);
            font-size: 0.9rem;
            margin-bottom: 30px;
            grid-column: 1 / -1;
        }
        
        .breadcrumb a {
            color: var(--secondary-color);
            text-decoration: none;
        }
        
        /* FAQ Section */
        .faq-section {
            margin-bottom: 40px;
        }
        
        .faq-section h2 {
            font-size: 1.5rem;
            color: var(--secondary-color);
            text-shadow:
      -1px -1px 0 #000,
       1px -1px 0 #000,
      -1px  1px 0 #000,
       1px  1px 0 #000;   
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--secondary-color);
        }
        
        .faq-item {
            margin-bottom: 15px;
        }
        
        .faq-item a {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            display: block;
            padding: 8px 0;
        }
        
        .faq-item a:hover {
            text-decoration: underline;
        }
        .faq-question {
          color: var(--primary-color);
  background: none;
  border: none;
  font-size: 16px;
  width: 100%;
  text-align: left;
  padding: 15px 10px;
  cursor: pointer;
  font-weight: 500;
  transition: background 0.3s;
}

.faq-question:hover,
.faq-question.active {
  color: var(--button-hover);
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.4s ease;
  padding: 0 15px;
  font-size: 14px;
  color: var(--primary-color);
  background-color: transparent;
  border-left: 3px solid var(--secondary-color);
  margin-bottom: 10px;
}

.faq-answer.open {
  max-height: 200px; /* Adjust as needed */
  padding-top: 10px;
  padding-bottom: 10px;
    overflow: auto;
}
.faq-answer::-webkit-scrollbar {
  width: 0;
}

/* faq styling endss */
        
        /* Contact Section */
        .contact-section {
            background-color: var(--background-color);
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            margin-top: -70px;
        }
        
        .contact-section h2 {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-bottom: 25px;
        }
        
        .text-support {
            background-color: var(--background-color);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        
        .text-support p {
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .text-support strong {
            color: var(--primary-color);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color : var(--primary-color);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }
        
        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }
        
        .file-upload {
            border: 2px dashed #ddd;
            padding: 20px;
            text-align: center;
            border-radius: 5px;
            margin-bottom: 25px;
        }
        
        .file-upload p {
            color: #666;
            margin-bottom: 10px;
        }
        
        .submit-btn {
            background-color: #2a7d2e;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .submit-btn:hover {
            background-color: #236b27;
        }
        
        .confirmation {
            color: #666;
            font-style: italic;
            margin-top: 15px;
        }
        
        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
                gap: 30px;
            }
        }
    </style>
</head>

<body>
   <nav>
      <div class="nav-links">
          <a href="home.html">Home</a>
          <span class="divider"></span>
          <a href="collection.html">Our Collection</a>
          <span class="divider"></span>
          <a href="aboutus.html">About Us</a>
          <span class="divider"></span>
          <a href="contact.html">Contact us</a>
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
 
  <div class="header-container">
      <img src="images/logo/logo new.png" alt="Logo" class="logo">
      <div class="search-container">
          <input type="text" class="search-input" placeholder="Search Here ...">
          <button class="search-btn"><i class="fas fa-search"></i></button>
      </div>

      <div class="icons">
<i class="fas fa-heart" id="wishlist-toggle"></i>
         
  <i class="fas fa-user"></i></a>
         
          <i class="fas fa-shopping-cart">
              <span class="cart-badge">0</span>
          </i>
      </div>
      
  </div>
  <button id="scrollToTop" onclick="scrollToTop()">⬆</button>
  <div class="container">
    <div class="breadcrumb">
        <a href="#">BooksVilla</a> &gt; Submit a request
    </div>
    
    <div class="faq-section">
  <h2>FAQs</h2>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">Where does BooksVilla deliver?</button>
    <div class="faq-answer">
      BooksVilla delivers across <strong>all cities in Pakistan</strong>, including major cities and remote areas. International shipping coming soon!
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">Can I edit my order after it's been placed?</button>
    <div class="faq-answer">
      Yes, if your order hasn’t shipped yet (within 12 hours), you can request changes by contacting our support team.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">Does BooksVilla charge a delivery fee?</button>
    <div class="faq-answer">
      Yes, we charge a standard delivery fee of <strong>Rs. 200</strong> for orders within Pakistan. Free shipping may apply during promotions.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">What should I do with the packaging?</button>
    <div class="faq-answer">
      We encourage you to reuse or recycle the packaging responsibly after receiving your order.
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question" onclick="toggleFAQ(this)">How do I report an issue with my order or delivery?</button>
    <div class="faq-answer">
      Please contact us via WhatsApp, email, or this contact form with your order number and issue. We'll get back within 24 hours.
    </div>
  </div>
</div>


    <div class="contact-section">
        <h2>Get in touch</h2>
        
        <div class="text-support">
            <p><strong>Prefer to text?</strong></p>
            <p>Text us anytime at (912) 123-456. We're here for you.</p>
        </div>
        

<form method="POST" action="contact.php">
    <div class="form-group">
        <label for="email">Your email address *</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
        <label for="region">Region *</label>
        <select id="region" name="region" required>
            <option value="">Select your region</option>
            <option value="Sindh">Sindh</option>
            <option value="Punjab">Punjab</option>
            <option value="baloch">Balochistan</option>
            <option value="kp">KPK</option>
        </select>
    </div>

    <div class="form-group">
        <label for="topic">Select a Topic *</label>
        <select id="topic" name="topic" required>
            <option value="">Select a topic</option>
            <option value="order">Order Issue</option>
            <option value="delivery">Delivery Question</option>
            <option value="account">Account Help</option>
            <option value="other">Other</option>
        </select>
    </div>

    <div class="form-group">
        <label for="subject">Subject *</label>
        <input type="text" id="subject" name="subject" required>
    </div>

    <div class="form-group">
        <label for="message">Tell us more about what we can help with. *</label>
        <textarea id="message" name="message" required></textarea>
    </div>

    <button type="submit" class="submit-btn">Submit</button>
</form>
<script>
       
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
        
        // Scroll to top smoothly
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
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
// FAQ functionality

  function toggleFAQ(clickedBtn) {
    const answer = clickedBtn.nextElementSibling;
    const isOpen = answer.classList.contains('open');

    // Close all
    document.querySelectorAll('.faq-question').forEach(btn => btn.classList.remove('active'));
    document.querySelectorAll('.faq-answer').forEach(ans => {
      ans.classList.remove('open');
      ans.style.maxHeight = null;
    });

    // Toggle current only if it wasn’t open
    if (!isOpen) {
      clickedBtn.classList.add('active');
      answer.classList.add('open');
      answer.style.maxHeight = answer.scrollHeight + 'px';
    }
  }

// FaQ functionality end
 </script>
</body>
</html>
