<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./style.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200&display=swap');


    :root {
      /* --font-maia:'Maia', sans-serif; */
      --font-poppins: 'Poppins', sans-serif;
    }

    body {
      background-image: url("./assets/images/background.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      margin: 0;
      padding: 0;
      font-family: var(--font-poppins) !important;
      font-size: 12px !important;
    }

    .login-box {
      width: 100%;
      max-width: 480px;
      margin: 0 auto;
      background-color: #fff;
      padding: 0px 40px;
      border-radius: 25px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      position: relative;
      margin-top: 5rem;
      padding-bottom: 0.5rem;
      padding-top: 1rem;

    }

    .login-box .logo {
      display: block;
      margin: 0 auto;
      width: 245px;
    }

    .login-box h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;



    }

    .login-box h1 span {
      border-bottom: 2px solid black;
    }

    .login-box label,
    .login-box input[type="text"],
    .login-box input[type="submit"] {
      width: 90%;
    }

    .login-box label {
      display: block;
      margin-bottom: 5px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      padding: 15px;
      border-radius: 25px;
      border: 1px solid #045a4f !important;
      outline: none;
    }

    .login-box input[type="submit"] {
      background-color: #045a4f;
      color: #fff;
      border: none;
      padding: 15px;
      border-radius: 25px;
      cursor: pointer;
      margin-bottom: 15px;
      width: 100%;
      max-width: 19rem;
    }

    .login-box .sign-in {
      text-align: center;
      margin-top: 20px;
    }

    .login-box .sign-in a {
      color: #045a4f;
      text-decoration: none;
    }

    .login-box .sign-in a:hover {
      text-decoration: underline;
    }

    .login-box .password-container {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      margin-bottom: 0;
    }

    .show-password {
      position: absolute;
      right: 45px;
      top: 10px;
      cursor: pointer;
      padding: 5px 10px;
      background-color: #045a4f;
      color: #fff;
      border-radius: 5px;


    }

    @media screen and (max-width: 640px) {
      .login-box {
        width: 100%;
        max-width: 100%;
        border-radius: 0;
      }
    }

    input:focus {
      outline: none;
    }

    .forgot-password {
      width: 100%;
      display: flex;
      justify-content: end;
      cursor: pointer;
      margin-top: 15px;
      margin-bottom: 15px;
      margin-right: 1rem;

    }

    .forgot-password a {
      color: #808080;
      text-decoration: none;
      margin-right: 2rem;
    }

    .lock {
      position: absolute;
      width: 14px !important;
      top: 14px;
      left: 53px;
    }

    #password {
      padding-left: 45px;
      width: 90%;
    }

    .email-container {
      position: relative;
      width: 100%;
      display: flex;
      justify-content: center;
      margin-top: 40px;
    }

    #form-submit {
      width: 100% !important;
      text-align: center;
      background-color: #045a4f;
      color: white;
      padding: 0.8rem;
    }

    .email-container,
    .password-container {
      margin: 2.3rem auto;
      padding: 0 1.2rem;
    }

    .errors {
      position: absolute;
      top: 3.8rem;
      left: 2rem;
    }
  </style>
  <?php include './partials/requirements.php' ?>
</head>

<body>
  <?php include './partials/header2.php' ?>
  <div class="login-box">
    <img class="logo" src="./assets/images/logo1.jpg">
    <h1>Welcome Back,<br><span>login</span> to continue!</h1>
    <form>
      <div class="email-container">
        <input id="username" type="text" name="username" placeholder="Enter Username">
        <div class="errors">
          <span class="username-errors text-danger d-block"></span>
        </div>
      </div>
      <div class="password-container">
        <input id="password" type="password" name="password" placeholder="Enter Password">
        <img src="./assets/icons/lock.png" class="lock">
        <span class="show-password" onclick="showPassword()">view</span>
        <div class="errors">
          <span class="password-errors text-danger d-block"></span>
          <span class="unauth-errors text-danger d-block"></span>
        </div>
      </div>

      <span class="forgot-password"><a href="forgotpassword.php">Forgot password?</a></span>
      <button class="my-2 btn submit rounded-pill w-50" id="form-submit" type="button" name="submit">SIGN IN</button>
      <div class="sign-in">
        Don't have an account? <a href="./signup.php">Sign up here</a>
      </div>
    </form>
  </div>
  <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="./js/main.js"></script>
  <script>
    function showPassword() {
      var passwordField = document.getElementById("password");
      var showPasswordBtn = document.querySelector(".show-password");

      if (passwordField.type === "password") {
        passwordField.type = "text";
        showPasswordBtn.textContent = "Hide";
      } else {
        passwordField.type = "password";
        showPasswordBtn.textContent = "view";
      }
    }
  </script>
  <script>
    const message = "";
    const errors = {
      password: [],
      email: [],
      status: []
    }

    $(document).ready(function() {


      $('#form-submit').click(function() {
        console.log('dsadsdsa');
        let username = '';
        let password = '';
        username = document.getElementById("username").value;
        password = document.getElementById("password").value;
        console.log(username, "user");
        console.log(password, 'pass');
        axios.get('http://fca.systemiial.com/api/login', {
          params: {
            email: username,
            password: password,
            status: 1
          }
        }).then(response => {
          console.log(response.data.access_token);
          if (response.data.user) {
            document.querySelector(".unauth-errors").textContent = "";
            document.querySelector(".username-errors").textContent = "";
            document.querySelector(".password-errors").textContent = "";
            localStorage.removeItem('access_token');
            localStorage.removeItem('user');
            localStorage.setItem('access_token', JSON.stringify(response.data.access_token));
            localStorage.setItem('user', JSON.stringify(response.data.user));
            window.location.replace("selectcard.php");
          } else {
            console.log(response.data);
          }

        }).catch(errors => {
          document.querySelector(".unauth-errors").textContent = "";
          document.querySelector(".username-errors").textContent = "";
          document.querySelector(".password-errors").textContent = "";
          console.log(errors.response.data);
          const error_list = errors.response.data;
          if (error_list) {
            if (error_list.error) {
              document.querySelector(".unauth-errors").textContent = "Invalid email or passowrd, please try again!";
            }
            if (error_list.email && error_list.email.length != 0) {
              document.querySelector(".username-errors").textContent = error_list.email[0];
            }
            if (error_list.password && error_list.password.length != 0) {
              console.log(error_list.password[0]);
              document.querySelector(".password-errors").textContent = error_list.password[0];
            }

          }
        })
      })


    })
  </script>
  <?php include './partials/footer2.php' ?>
</body>