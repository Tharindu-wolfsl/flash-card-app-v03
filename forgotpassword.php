<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <style>
     @import url('https://fonts.cdnfonts.com/css/gotham');
    body {
      background-image: url('./assets/images/background.jpg');
      background-size: cover;
      background-position: center;
    }

    .reset-box {
      width: 450px;
      height: 480px;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      margin: auto; 
      margin-top: 15vh; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3) !important;
      border-radius: 30px;
    }

    .image-box {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 50px;
    }

    .image-box img {
      display: block;
      margin-bottom:25px;
      width: 230px;
      margin-top: 0px auto;
      max-width:100%;
    }

    .save-button, .signin-button .save-button {
      width: 430px;
      padding: 10px;
      font-size: 18px;
      border-radius: 3px;
      border: none;
      cursor: pointer;
      color: white;
      background-color:  #045a4f;
      padding: 15px;
      border-radius: 35px;
      margin-bottom: 52px;
    }

    .save-button:hover, .signin-button:hover {
      background-color:  #045a4f;
    }

    h2 {
      display: flex;
      align-items: center;
      margin-bottom: 150px;
      margin-top: -60px;
      font-size: 26px;
      font-family: 'Gotham medium', sans-serif;
    }

    .email-input {
      width: 370px;
      height: 40px;
      border-radius: 40px;
      border: 2px solid  #045a4f;
      padding: 15px;
      margin-bottom:40px;
    }

    .resend-code {
      margin-top: 20px;
    }

    .resend-code a {
      color: green;
      text-decoration: none;
    }

    .resend-code a:hover {
      text-decoration: underline;
    }

    .email-text {
      font-size: 18px;
      color: #B2BEB5;
      margin-top: -100px;
      font-weight:500;
      font-family: 'Gotham medium', sans-serif;
    }
    .resend-otp{
      font-family: 'Gotham medium', sans-serif;
      color: #808080;
    }
  </style>
      <?php include './partials/requirements.php' ?>
</head>
<body>
<?php include './partials/forgotPasswordPopup.php' ?>
  <div class="reset-box">
    <div class="image-box">
      <img src="./assets/images/logo1.jpg" alt="Forgot Password Image">
    </div>
    <h2>Forgot Password</h2>
    <center>
      <p class="email-text">Enter your email address to reset the<br>password</p>
    </center>
    <input type="email" name="email" placeholder=" Email" class="email-input" id="email-input">
    <div id="email-validation-message"></div>
    <button class="save-button" onclick="forgotPassword()">SEND</button>
    <div class="resend-otp">
      <span>Didn't received the code?<b> <a href="#" style="color: #045a4f; text-decoration: none;" onclick="forgotPassword">Resend Code</a></b>.</span>
    </div>
  </div>
  <script>
    function validateEmail() {
      const email = document.getElementById("email-input").value;
      const validationMessage = document.getElementById("email-validation-message");
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (email.trim() === "") {
        validationMessage.textContent = "Please enter an email address";
        validationMessage.style.color = "red";
      } else if (!emailRegex.test(email)) {
        validationMessage.textContent = "Please enter a valid email address";
        validationMessage.style.color = "red";
      } else {
        validationMessage.textContent = "";
      }
    }
      //onclick forgot password

      async function forgotPassword() {
      let username = "";
      username = document.getElementById("email-input").value;
      if(username == ""){
        validateEmail();
      }else{
        await axios.get('http://fca.systemiial.com/api/forgot-password', {
        params: {
          email: username
        }
      }).then(response => {
        console.log(response.data);
        $('#exampleModalCenter').modal('show');
      })
      }
    }
  </script>
</body>

     
