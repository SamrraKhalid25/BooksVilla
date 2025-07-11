<?php
include("db_connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up | BooksVilla</title>
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
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
  margin: 0;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background: var(--background-color);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow-y: auto;
}

    .form-container {
        align-items: center;
      background: var(--background);
      padding: 2rem;
      border-radius: 20px;
      box-shadow: 0 5px 20px rgba(228, 220, 220, 0.642);
      width: 100%;
      max-width: 450px;
    }
  .page-wrapper {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
  width: 100%;
  overflow-y: auto;
  padding: 1rem;
}
h2 {
      text-align: center;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
    }

    p.subtitle {
      text-align: center;
      margin-bottom: 2rem;
      color: var(--primary-color);
    }

    .form-group {
      margin-bottom: 1.25rem;
      position: relative;
    }

    label {
      display: block;
      font-size: 0.95rem;
      color: var(--primary-color);
      margin-bottom: 0.3rem;
    }

    label .required {
      color: red;
      margin-left: 3px;
    }

    input {
      width: 100%;
      padding: 0.75rem;
      border: none;
      border-bottom: 1px solid #ccc;
      font-size: 1rem;
      background: transparent;
      outline: none;
      color: var(--primary-color);
    }

    input:focus {
      border-bottom-color: var(--secondary-color);
    }

    .eye-icon {
      position: absolute;
      right: 10px;
      top: 38px;
      cursor: pointer;
      font-size: 1rem;
      color: #888;
    }

    .submit-btn {
      width: 100%;
      padding: 0.9rem;
      background: var(--secondary-color);
      color: var(--primary-color);
      border: none;
      border-radius: 50px;
      font-size: 1rem;
      font-weight: bold;
      cursor: pointer;
      margin-top: 1.5rem;
    }

    .submit-btn:hover {
       background-color: var(--button-hover);
   color: var(--primary-color);
   color: #0d0d2b;
   transform: scale(1.05);
   box-shadow: 0 0 15px var(--primary-color);
    }

    .disclaimer {
      text-align: center;
      font-size: 0.85rem;
      color: var(--primary-color);
      margin: 1rem 0;
    }

    .separator {
      display: flex;
      align-items: center;
      margin: 1.5rem 0 1rem;
    }

    .separator::before,
    .separator::after {
      content: "";
      flex: 1;
      height: 1px;
      background: var(--primary-color);
    }

    .separator span {
      margin: 0 1rem;
      font-size: 0.9rem;
      font-weight: bold;
      color: var(--primary-color);
    }

    .social-login {
      display: flex;
      justify-content: center;
      gap: 1.5rem;
      margin-bottom: 1rem;
    }

    .social-login a img {
      width: 32px;
      height: 32px;
      cursor: pointer;
    }

    .login-link {
      color: var(--primary-color);
      text-align: center;
      font-size: 0.9rem;
      margin-top: 0.5rem;
    }

    .login-link a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 600;
      border-bottom: 1px solid #000;
    }

    .login-link a:hover {
      color: #007bff;
      border-color: #007bff;
    }
  </style>
</head>
<body>
      <div class="page-wrapper">
  <div class="form-container">
    <h2>WELCOME</h2>
    <p class="subtitle">Create your account</p>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="firstName">First Name <span class="required">*</span></label>
        <input type="text" id="firstName" name="firstName" required />
      </div>

      <div class="form-group">
        <label for="lastName">Last Name <span class="required">*</span></label>
        <input type="text" id="lastName" name="lastName" required />
      </div>

      <div class="form-group">
        <label for="email">Email <span class="required">*</span></label>
        <input type="email" id="email" name="email" required />
      </div>

      <div class="form-group">
        <label for="confirmEmail">Confirm Email <span class="required">*</span></label>
        <input type="email" id="confirmEmail" name="confirmEmail" required />
      </div>

      <div class="form-group">
        <label for="password">Password <span class="required">*</span></label>
        <input type="password" id="password" name="password" required />
        <span class="eye-icon">👁️</span>
      </div>

      <div class="form-group">
        <label for="confirmPassword">Confirm Password <span class="required">*</span></label>
        <input type="password" id="confirmPassword" name="confirmPassword" required />
        <span class="eye-icon">👁️</span>
      </div>

      <button type="submit" class="submit-btn" name="submit">SIGN UP</button>

      <p class="disclaimer">
        By clicking "Sign Up" you agree to the BooksVilla terms and conditions. To see how we may use your information, take a look at our privacy policy.
      </p>

      <div class="separator"><span>OR LOGIN WITH</span></div>

      <div class="social-login">
        <a href="#"><img src="images/logo/google-removebg-preview.png" alt="Google login"></a>
        <a href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Facebook_Logo_%282019%29.png" alt="Facebook login"></a>
      </div>

      <div class="login-link">
        Already have an account? <a href="#">Sign In</a>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $confirmEmail = $_POST['confirmEmail'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $sql = "insert into signup (firstname , lastname , email , confirmemail , password , confirmpassword) values ('$firstName','$lastName', '$email', '$confirmEmail', '$password', '$confirmPassword')";
    $result = $conn->query($sql);


    if($result == true){
        echo"<script>
        alert('User Has Been Registered Sucessfully');
        window.location.href='login.php';
        </script>";
    }
  }
?>
