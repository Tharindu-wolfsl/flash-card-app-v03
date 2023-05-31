<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap');


    :root {
      /* --font-maia:'Maia', sans-serif; */
      --font-poppins: 'Poppins', sans-serif;
    }

    body {
      background-image: url('./assets/images/background.jpg');
      background-size: cover;
      background-position: center;
    }

    .reset-box {
      position: relative;
      width: 480px;
      background-color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
      margin: auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3) !important;
      border-radius: 30px;
      padding-top: 1rem;
      padding-bottom: 3rem;
      top: 6rem;
    }

    .image-box {
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 2rem;
    }

    .image-box .logo {
      display: block;
      width: 230px;
      margin-top: 0px auto;
    }

    .save-button,
    .signin-button .save-button {
      width: 430px;
      padding: 10px;
      font-size: 18px;
      border-radius: 3px;
      border: none;
      cursor: pointer;
      color: white;
      background-color: #045a4f;
      padding: 15px;
      border-radius: 35px;
      margin-bottom: 2rem;
    }

    .save-button:hover,
    .signin-button:hover {
      background-color: #045a4f;
    }

    h3 {
      margin-bottom: 2rem !important;

    }

    .email-input {
      width: 100%;
      border-radius: 40px;
      border: 1px solid #045a4f;
      padding: 1rem 2rem;
      margin-bottom: 40px;
    }

    ::placeholder {
      font-weight: 600;
      color: #8f9bb3;
      opacity: 0.5;
    }

    :-ms-input-placeholder {
      /* Internet Explorer 10-11 */
      font-weight: 600;
      color: #8f9bb3;
      opacity: 0.5;
    }

    ::-ms-input-placeholder {
      /* Microsoft Edge */
      font-weight: 600;
      color: #8f9bb3;
      opacity: 0.5;
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
      color: #8f9bb3;
      font-weight: 500;
      opacity: 0.5;
    }

    .resend-otp {
      color: #808080;
    }

    .email-container {
      width: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 2rem;
    }
  </style>
  <?php include './partials/requirements.php' ?>
</head>

<body>
  <?php include './partials/header2.php' ?>
  <?php include './partials/forgotPasswordPopup.php' ?>
  <div class="reset-box">
    <div class="image-box">
      <img class="logo" src="./assets/images/logo1.jpg" alt="Forgot Password Image">
    </div>
    <h3>Forgot Password</h3>
    <div class="reset-text w-100 text-center mb-3">
      <p class="email-text">Enter your email address to reset the<br>password</p>
    </div>
    <div class="email-container">
      <input type="email" name="email" placeholder="Email" class="email-input" id="email-input">
      <div id="email-validation-message"></div>
    </div>
    <button class="save-button" onclick="forgotPassword()">SEND</button>
    <div class="resend-otp">
      <span>Didn't received the code?<b> <a href="#" style="color: #045a4f; text-decoration: none;" onclick="forgotPassword()">Resend Email</a></b>.</span>
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
      if (username == "") {
        validateEmail();
      } else {
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
  <?php include './partials/footer2.php' ?>

</body>