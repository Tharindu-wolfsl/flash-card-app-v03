<!DOCTYPE html>
<html>

<head>
  <title>Login Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    @import url('https://fonts.cdnfonts.com/css/gotham');

    body {
      background-image: url("./assets/images/background.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
      margin: 0;
      padding: 0;
    }

    .login-box {
      width: 90%;
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 25px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      position: relative;
      top: 100px;
    }

    .login-box img {
      display: block;
      margin: 0 auto;
      width: 200px;
      margin-top: 20px;
    }

    .login-box h1 {
      text-align: center;
      font-size: 28px;
      margin-bottom: 20px;
      font-family: 'Gotham medium', sans-serif;


    }

    .login-box h1 span {
      border-bottom: 2px solid black;
    }

    .login-box label,
    .login-box input[type="text"],
    .login-box input[type="password"],
    .login-box input[type="submit"] {
      width: 100%;
      max-width: 305px;
    }

    .login-box label {
      display: block;
      margin-bottom: 5px;
    }

    .login-box input[type="text"],
    .login-box input[type="password"] {
      padding: 15px;
      margin-bottom: 20px;
      border-radius: 25px;
      margin-left: 28px;
      border: 2px solid #045a4f !important;
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
      max-width: 370px;
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
      float: right;

      cursor: pointer;

      margin-bottom: 15px;
      margin-right: 30px;

    }

    .forgot-password a {
      color: #808080;
      text-decoration: none;
    }
  </style>
  <?php include './partials/requirements.php' ?>

</head>

<body>
  <?php include './partials/forgotPasswordPopup.php' ?>
  <div class="login-box">
    <img src="./assets/images/logo1.jpg">
    <h1>Welcome Back,<br><span>login</span> to continue!</h1>
    <form>
      <input id="username" type="text" name="username" placeholder="Enter Username">
      <span class="username-errors text-danger"></span>
      <div class="password-container">
        <input id="password" type="password" name="password" placeholder="Enter Password">
        <span class="password-errors text-danger"></span>
        <span class="unauth-errors text-danger"></span>
        <span class="show-password" onclick="showPassword()">view</span>
        <span class="forgot-password" onclick="forgotPassword()"><a href="#">Forgot password?</a></span>
      </div>
      <center><input id="form-submit" type="button" name="submit" value="SIGN IN"></center>
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
    //onclick forgot password

    async function forgotPassword() {
      let username = "";
      username = document.getElementById("username").value;
      await axios.get('http://fca.systemiial.com/api/forgot-password', {
        params: {
          email: username
        }
      }).then(response => {
        console.log(response.data);
        $('#exampleModalCenter').modal('show');

      })
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
</body>