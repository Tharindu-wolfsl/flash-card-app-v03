<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <?php include './partials/requirements.php' ?>
  <style>
     @import url('https://fonts.cdnfonts.com/css/gotham');
                
    body {
      background-image: url("./assets/images/background.jpg");
      background-size: cover;
      background-position: center;
    }

    .reset-box {
      width: 500px;
      height: 480px;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 20px;
      margin: auto;
      margin-top: 20vh;
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
      margin-bottom: 25px;
      width: 230px;
      margin-top: -30px;
      max-width: 100%;
    }

    .password-boxes input[type=password] {
      width: 350px;
      margin-bottom: 50px;
      padding: 18px;
      font-size: 16px;
      border-radius: 50px;
      border: 2px solid #045a4f;
      margin-left: -15px;
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

    .password-input:focus + input[type="text"] {
      display: block;
      position: absolute;
      top: 0;
      left: 0;
      margin-left: -15px;
      z-index: -1;
    }

    .save-button, .signin-button .save-button {
      width: 430px;
      padding: 15px;
      font-size: 18px;
      border-radius: 35px;
      border: none;
      cursor: pointer;
      color: white;
      background-color: #045a4f;
    }

    .save-button:hover, .signin-button:hover {
      background-color: #0d8066;
    }

    h2 {
      display: flex;
      align-items: center;
      margin-bottom: 50px;
      margin-top: -45px;
      font-size: 30px;
      font-family: 'Gotham medium', sans-serif;
      font-weight: 470;
    }

    .error {
      color: red;
      margin-top: 10px;
      margin-bottom: 10px;
    }

    .password-container {
      position: relative;
    }

   
    .password-container {
  position: relative;
}

.password-label {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 20px;
  color: gray;
  font-size: 18px;
margin-top: 24px;
margin-left: -15px;
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
  <div class="reset-box">
    <div class="image-box">
      <img src="./assets/images/logo1.jpg" alt="Reset Password Image">
    </div>
    <h2>Reset Password</h2>
    <div class="password-boxes">
  <div class="password-container">
    <input type="password" id="new-password" placeholder="New Password">
    <label for="new-password" class="password-label">(Enter a 8 or more characters long password)</label>
  </div>
  <div class="password-container">
    <input type="password" id="confirm-password" placeholder="Re-enter the new password">
    <input type="text" id="confirm-password-text" style="display:none;">
  </div>
  <p id="password-error" class="error"></p>
</div>

    <button class="save-button" onclick="checkPasswordMatch()">SAVE AND SIGN IN</button>
    <p id="set-password-error" class="error" style="display:none;">Passwords do not match</p>
  </div>
 

  <script src="./js/auth.js"></script>
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
        if(token != "");
        axios.post('http://fca.systemiial.com/api/reset-password',{
          password:password1,
          token
        }).then(response => {
            localStorage.removeItem('access_token');
            window.location.replace('login.php');
        })
      }
    }

    document.getElementById("confirm-password").addEventListener("keyup", function(event) {
      if (event.keyCode === 13) {
        event.preventDefault();
        checkPasswordMatch();
      }
    });
  </script>
</body>
