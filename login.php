<?php
// ✅ DB connection
$conn = new mysqli("localhost", "root", "", "booksvilla"); // replace with your DB name
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$alert = "";

// ✅ Login check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    $sql = "SELECT * FROM signup WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        echo "<script>
                alert('Login Successful!');
                window.location.href = 'home.html';
              </script>";
        exit;
    } else {
        $alert = '<div class="alert alert-danger">Invalid email or password</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login | BooksVilla</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" href="fav.icon.png" type="image/png">

  <style>
    :root {
      --primary-color: #ffffff;
      --secondary-color: #FF3B30;
      --background-color: linear-gradient(to right, #000000, #2a312c, #000000);
      --button-hover: #E52020;
      --sub-background: #000000;
    }
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: var(--background-color);
    }
    .container {
      display: flex;
      width: 900px;
      height: 550px;
      background: transparent;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(228, 220, 220, 0.642);
    }
    .login-section {
      flex: 2;
      padding: 40px;
      display: flex;
      flex-direction: column;
    }
    h2 {
      font-size: 2rem;
      margin-bottom: 10px;
      color: var(--primary-color);
    }
    p {
      color: #ccc;
      margin-bottom: 20px;
    }
    .social-login {
      display: flex;
      gap: 15px;
      margin-bottom: 20px;
    }
    .social-btn {
      width: 45px;
      height: 45px;
      border: none;
      border-radius: 50%;
      color: #fff;
      font-size: 18px;
      cursor: pointer;
    }
    .fb { background: #3b5998; }
    .google { background: #dd4b39; }
    .linkedin { background: #0077b5; }
    .divider {
      text-align: center;
      margin: 20px 0;
      position: relative;
    }
    .divider span {
      background: #fff;
      padding: 0 10px;
      color: var(--sub-background);
      border-radius: 20px;
    }
    .divider::before, .divider::after {
      content: '';
      height: 1px;
      background: var(--secondary-color);
      position: absolute;
      top: 50%;
      width: 40%;
    }
    .divider::before { left: 0; }
    .divider::after { right: 0; }
    .login-form input {
      color: var(--primary-color);
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border-radius: 25px;
      border: 1px solid #ccc;
      outline: none;
      background: transparent;
    }
    .password-wrapper {
      position: relative;
    }
    .password-wrapper span {
      position: absolute;
      right: 15px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #888;
    }
    .sign-in {
      border: 2px solid var(--sub-background);
      color: var(--primary-color);
      background-color: var(--secondary-color);
      padding: 12px;
      width: 100%;
      border-radius: 25px;
      font-size: 16px;
      margin-top: 20px;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    .sign-in:hover {
      background-color: var(--button-hover);
      color: #0d0d2b;
      transform: scale(1.05);
      box-shadow: 0 0 15px var(--primary-color);
    }
    .signup-section {
      flex: 1;
      background: linear-gradient(135deg, #d4c3bd, #29575d);
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 40px;
      text-align: center;
    }
    .signup-section h2 {
      margin-bottom: 15px;
      font-size: 24px;
      color: var(--sub-background);
    }
    .signup-section p {
      margin-bottom: 30px;
      font-size: 16px;
      color: var(--sub-background);
    }
    .sign-up {
      color: var(--primary-color);
      background-color: var(--secondary-color);
      padding: 12px 25px;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      transition: background 0.3s ease;
      border: 2px solid var(--sub-background);
    }
    .sign-up:hover {
      background-color: var(--button-hover);
      color: var(--primary-color);
      transform: scale(1.05);
      box-shadow: 0 0 15px var(--primary-color);
    }
    .alert {
      margin: 10px 0;
      padding: 10px;
      border-radius: 10px;
      text-align: center;
    }
    .alert-danger {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-section">
      <h2>Login to Your Account</h2>
      <p>Login using social networks</p>
      <div class="social-login">
        <button class="social-btn fb"><i class="fab fa-facebook-f"></i></button>
        <button class="social-btn google"><i class="fab fa-google-plus-g"></i></button>
        <button class="social-btn linkedin"><i class="fab fa-linkedin-in"></i></button>
      </div>
      <div class="divider"><span>OR</span></div>

      <!-- ✅ SHOW ALERT -->
      <?php if (!empty($alert)) echo $alert; ?>

      <!-- ✅ LOGIN FORM -->
      <form class="login-form" method="POST">
        <input type="email" name="email" placeholder="Email" required />
        <div class="password-wrapper">
          <input type="password" name="password" id="password" placeholder="Password" required />
          <span id="togglePassword"><i class="far fa-eye"></i></span>
        </div>
        <button type="submit" class="sign-in">Sign In</button>
      </form>
    </div>

    <div class="signup-section">
      <h2>New Here?</h2>
      <p>Sign up and discover great opportunities!</p>
      <a href="signup.php"><button class="sign-up">Sign Up</button></a>
    </div>
  </div>

  <script>
    document.getElementById('togglePassword').addEventListener('click', function () {
      const password = document.getElementById('password');
      const icon = this.querySelector('i');
      if (password.type === 'password') {
        password.type = 'text';
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
      } else {
        password.type = 'password';
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
      }
    });
  </script>
</body>
</html>
