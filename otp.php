<!DOCTYPE html>
<html>

<head>
  <title>OTP Verification</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <style>
    /* @import url('https://fonts.cdnfonts.com/css/gotham'); */

    body .container {
      height: 500px;
      width: 500px;
      margin: auto;
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border: 1px solid #ccc;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 40px;
    }

    .image131 img {
      max-width: 280px;
      margin-top: -35px;
      margin-bottom: 50px;
    }

    .text {
      margin-top: -30px;
      margin-right: 20px;
      font-size: 18px;
      text-align: center;
      margin-bottom: 15px;
      font-size: 24px;
    
    }

    .cancel {
      color: #045a4f;
      text-decoration: none;
      font-weight: 400;
      margin-left: 160px;
      font-size: 18px;
      cursor: pointer;
    
    }

    .otp-input {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .otp-input input[type="text"] {
      width: 70px;
      height: 30px;
      margin: 0 10px;
      font-size: 24px;
      text-align: center;
      border: none;
      border-bottom: 2px solid #ccc;
      outline: none;
    }

    .submit {
      display: block;
      margin-top: 60px;
      max-width: 100%;
      height: 50px;
      border: none;
      border-radius: 25px;
      background-color: #045a4f;
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
      width: 415px;
      margin-bottom: 30px;
    }

    @media screen and (max-width: 768px) {
      .container {
        height: auto;
        width: 90%;
      }
    }

    .para {
      margin-right: 160px;
      margin-top: -15px;
      color: #808080;
      margin-bottom: -30px;
    }


    .para1 {
      margin-right: 160px;
      margin-left: -90px;
      color: #808080;


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

    .resend-otp {
      color: #808080;
    
    }
  </style>
</head>

<body style="background-image: url('./assets/images/background.jpg'); background-size: cover; background-repeat: no-repeat; margin: 0; padding: 0;">
  <div class="container">
    <div class="image131">
      <img src="./assets/images/logo1.jpg" alt="Image">
    </div>
    <div class="text">
      OTP Verification
      <span class="cancel">Cancel</span>
    </div>
    <div class="para">
      <p>We just sent a 4-digit code to your email</p>

    </div>
    <div class="para1">
      <p><b>example@example.com</b></p>
    </div>

    <div class="otp-input">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
      <input type="text" maxlength="1">
    </div>
    <button class="submit">CONTINUE</button>
    <div class="resend-otp">
      <span> Didn't recived the code? <b><a href="#" style="color: #045a4f; text-decoration: none;">Resend Code</a></b>.</span>
    </div>


    <script>
      const cancelButton = document.querySelector('.cancel');
      cancelButton.addEventListener('click', function() {

        alert('OTP sending has been canceled.');
      });
    </script>
</body>