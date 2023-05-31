<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <?php include './partials/requirements.php' ?>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap');


    :root {
      /* --font-maia:'Maia', sans-serif; */
      --font-poppins: 'Poppins', sans-serif;
    }

    body {
      background-image: url("./assets/images/background.jpg");
      background-size: cover;
      background-position: center;
      font-family: var(--font-poppins);
    }

    .reset-box {
      position: relative;
      width: 480px;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3) !important;
      border-radius: 30px;
      font-size: 12px;
      margin: 0 auto;
      top: 6rem;

    }

    .image-box {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .image-box .logo {
      display: block;
      margin-bottom: 25px;
      width: 230px;
      max-width: 100%;
    }

    .password-boxes {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      margin-top: 2rem;
      width: 100%;
      padding: 0 4rem;
      padding-bottom: 0 !important;
    }

    .password-boxes input[type=password], .password-boxes input[type=text] {
      width: 100%;
      margin-bottom: 3.5rem;
      padding: 14px;
      font-size: 16px;
      border-radius: 50px;
      border: 1px solid #045a4f;
    }

    .password-container {
      position: relative;
    }

    .password-input {
      width: 350px;
      margin-bottom: 35px;
      padding: 18px;
      font-size: 16px;
      border-radius: 50px;
      border: 1px solid #ccc;
      margin-left: -15px;
    }

    .password-input:focus {
      outline: none;
    }

    .password-input:focus+input[type="text"] {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-left: -15px;
      z-index: -1;
    }

    .save-button,
    .signin-button .save-button {
      width: 100%;
      padding: 15px;
      font-size: 14px;
      border-radius: 35px;
      border: none;
      cursor: pointer;
      color: white;
      background-color: #045a4f;
      margin-top: 1rem;

    }

    .save-button:hover,
    .signin-button:hover {
      background-color: #0d8066;
    }

    h2 {
      display: flex;
      align-items: center;
      font-size: 30px;
      font-weight: 500;
    }

    .error {
      color: red;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .password-container {
      position: relative;
      width: 100%;
    }


    .password-label {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      left: 10px;
      color: gray;
      font-size: 14px;
      margin-top: 24px;

    }

    .password-container2 input {
      margin-bottom: 0 !important;
    }

    .button-box {
      width: 100%;
      padding: 0 2rem;
      margin-bottom: 3rem;
    }

    .password-container {
      position: relative;

    }

    .eyelogo1, .eyelogo2 {
      position: absolute;
      top: 1.2rem;
      width: 1.4rem !important;
      cursor: pointer;
      right: 1.2rem;
    }
  </style>
  <!-- <script>
    function checkPasswordMatch() {
      var password1 = document.getElementById("password1").value;
      var password2 = document.getElementById("password2").value;
      var error = document.getElementById("password-error");
      if (password1 != password2) {
        error.innerHTML = "Passwords do not match";
      } else {
        error.innerHTML = "";
      }
    }
  </script> -->
</head>

<body>
  <?php include './partials/header2.php' ?>
  <div class="reset-box">
    <div class="image-box">
      <img class="logo" src="./assets/images/logo1.jpg" alt="Reset Password Image">
    </div>
    <h2>Reset Password</h2>
    <div class="password-boxes">
      <div class="password-container">
        <input type="password" id="new-password" placeholder="New Password">
        <img src="./assets/icons/eye1.png" class="eyelogo1">
        <label for="new-password" class="password-label">(Enter a 8 or more characters long password)</label>
      </div>
      <div class="password-container password-container2">
        <input type="password" id="confirm-password" placeholder="Re-enter the new password">
        <img src="./assets/icons/eye1.png" class="eyelogo2">
        <input type="text" id="confirm-password-text" style="display:none;">
      </div>
      <p id="password-error" class="error"></p>
    </div>
    <div class="button-box">
      <button class="save-button" onclick="checkPasswordMatch()">SAVE AND SIGN IN</button>
    </div>
    <p id="set-password-error" class="error" style="display:none;">Passwords do not match</p>
  </div>


  <!-- <script src="./js/auth.js"></script> -->
  <script>
    let token = "";

    function checkPasswordMatch() {
      var password1 = document.getElementById("new-password").value;
      var password2 = document.getElementById("confirm-password").value;
      var error = document.getElementById("password-error");
      if (password1 != password2) {
        error.innerHTML = "Passwords do not match";
      } else {
        error.innerHTML = "";
        document.getElementById("set-password-error").style.display = "none";
        // continue with password reset
        token = JSON.parse(localStorage.getItem('access_token'));
        if (token != "");
        axios.post('http://fca.systemiial.com/api/reset-password', {
          password: password1,
          token
        }).then(response => {
          localStorage.removeItem('access_token');
          window.location.replace('index.php');
        })
      }
    }

    document.getElementById("confirm-password").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        checkPasswordMatch();
      }
    });

    var passwordField1 = document.getElementById("new-password");
    var showPasswordBtn1 = document.querySelector(".eyelogo1");
    showPasswordBtn1.addEventListener("click", function() {
      //console.log("work");
      if (passwordField1.type === "password") {
        passwordField1.type = "text";
      } else {
        passwordField1.type = "password";
      }
    });

    var passwordField2 = document.getElementById("confirm-password");
    var showPasswordBtn2 = document.querySelector(".eyelogo2");
    showPasswordBtn2.addEventListener("click", function() {
      //console.log("work");
      if (passwordField2.type === "password") {
        passwordField2.type = "text";
      } else {
        passwordField2.type = "password";
      }
    });
  </script>
  <?php include './partials/footer2.php' ?>
</body>