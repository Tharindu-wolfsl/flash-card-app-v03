<!DOCTYPE html>
<html>

<head>
  <title>Responsive Web Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: darkgreen;
      height: 30px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding-left: 10px;
    }

    /* Define the styles for the phone and email icons */
    .icon {
      display: inline-block;
      background-repeat: no-repeat;
      background-size: contain;
      vertical-align: middle;
      margin-right: 5px;
    }

    /* Define the styles for the phone icon */
    .phone {
      background-image: url("phone-icon.png");
      width: 16px;
      height: 16px;
    }

    /* Define the styles for the message icon */
    .message {
      background-image: url("message-icon.png");
      width: 16px;
      height: 16px;
    }

    /* Define the styles for the mobile phone icon */
    .mobile-phone {
      background-image: url("mobile-phone-icon.png");
      width: 16px;
      height: 16px;
    }

    /* Define the styles for the phone and email numbers */
    .contact-info {
      display: inline-block;
      color: white;
      margin-left: 5px;
      font-size: 16px;
      font-weight: bold;
      vertical-align: middle;
    }

    body {
      margin: 0;
      padding: 0;
    }

    .header {
      background-color: darkgreen;
      height: 30px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      padding-left: 10px;
    }


    .icon {
      display: inline-block;
      background-repeat: no-repeat;
      background-size: contain;
      vertical-align: middle;
      margin-right: 5px;
    }


    .phone {
      background-image: url("phone-icon.png");
      width: 16px;
      height: 16px;
    }


    .message {
      background-image: url("message-icon.png");
      width: 16px;
      height: 16px;
    }


    .mobile-phone {
      background-image: url("mobile-phone-icon.png");
      width: 16px;
      height: 16px;
    }


    .contact-info {
      display: inline-block;
      color: white;
      margin-left: 5px;
      font-size: 16px;
      font-weight: bold;
      vertical-align: middle;
    }


    .nav {
      background-color: lightgreen;
      height: 100px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-left: 10px;
      padding-right: 10px;
    }


    .profile-image {
      background-image: url("profile-icon.png");
      width: 30px;
      height: 30px;
      background-size: contain;
      margin-right: 10px;
    }


    .profile-text:hover {
      text-decoration: none !important;
    }


    .logo {
      display: flex;
      align-items: center;
      flex-grow: 1;
      margin-left: 80px;
    }

    .right-nav {
      display: flex;
      align-items: center;
    }

    .profile-text,
    .logout-text {
      font-size: 28px;
      color: black;
      cursor: pointer;
      margin-right: 80px;
      margin-left: 15px;

    }

    a.profile-text,
    a.logout-text {
      text-decoration: none;
      color: white;
    }

    .line {
      height: 60px;
      border-left: 2px solid black;
      margin-left: 15px;
      border-left-color: white;

    }

    /* Define the styles for the profile text */
    .profile {
      font-size: 32px;
      text-align: center;
      margin-top: 30px;
      color: black;
      text-decoration: underline;
      text-decoration-color: darkgreen;
      text-decoration-thickness: 5px;
    }

    /* Add new styles for "My Profile" text */
    .profile-text {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin-right: 0;
      font-size: 24px;
      color: black;
      cursor: pointer;
      position: relative;
    }

    .profile-underline {
      position: absolute;
      bottom: -10px;
      left: 50%;
      transform: translateX(-50%);
      width: 150px;
      height: 5px;
      background-color: darkgreen;
      border-radius: 10px;
    }

    body {
      background-image: url("background.jpg");
      background-size: cover;
      background-position: center;
      height: 300px;
    }

    .personal-details {
      background-color: green;
      width: 500px;
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: space-around;
      padding: 20px;
      border-radius: 30px;
      margin-left: 130px;
      margin-top: 120px;
    }

    .profile-picture {
      background-image: url("profile-picture.jpg");
      background-size: cover;
      width: 80px;
      height: 80px;
      border-radius: 50%;
      border: 3px solid white;
      position: relative;
    }

    .online-indicator {
      position: absolute;
      bottom: 0;
      right: 0;
      width: 20px;
      height: 20px;
      background-color: lightgreen;
      border-radius: 50%;
      border: 2px solid white;
    }

    .name {
      font-size: 24px;
      color: white;
      margin-left: 20px;
    }

    .email {
      font-size: 18px;
      color: white;
      margin-left: 20px;
    }

    .line2 {
      height: 100px;
      width: 50%;
      margin: 0 auto;

    }
  </style>
</head>

<body>

  <body>
    <div class="header">
      <span class="icon mobile-phone"></span>
      <span class="contact-info">555-1234</span>
      <span class="icon message"></span>
      <span class="contact-info">example@example.com</span>
    </div>
    <div class="nav">
      <div class="logo">
        <img src="logo1.jpg" alt="Logo">
      </div>
      <div class="right-nav">
        <div class="profile-image"></div>
        <div class="center-nav">
          <a href="#" class="profile-text">My Profile</a>
          <div class="profile-underline"></div>
        </div>
        <div class="line"></div>
        <a href="#" class="logout-text">Logout</a>
      </div>
    </div>
    <div class="profile">
      <h3>My Profile</h3>
      <div class="profile-underline"></div>
    </div>
    <div class="personal-details">
      <div class="profile-picture">
        <div class="online-indicator"></div>
      </div>
      <div class="details">
        <div class="name">Your Name</div>
        <div id="name" class="email"></div>
        <div class="name">email address</div>
        <div id="email" class="email"></div>
        <div id="subjects" class="name"></div>
      </div>
    </div>
    <div class="line2"></div>

  </body>


  </style>
  </head>

  <body>
    <div class="header">
      <span class="icon mobile-phone"></span>
      <span class="contact-info">555-1234</span>
      <span class="icon message"></span>
      <span class="contact-info">example@example.com</span>
    </div>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script>
      $(document).ready(function() {
        $(window).on('load', function() {
          let user = {
            name: '',
            email: '',
            subjects: []
          };
          const token = JSON.parse(localStorage.getItem('access_token'));
          axios.get('http://fca.systemiial.com/api/view-profile', {
            params: {
              token: token
            }
          }).then(res => {
            console.log(res.data);
            let data = res.data;
            user.name = data.data.name;
            user.email = data.data.email;
            user.subjects = data.data.subjects;
            console.log(" user.subjects", user.subjects);
            $('.details #name').append(user.name);
            $('.details #email').append(user.email);

            user.subjects.forEach(subject=>{
              let template = `<span style="display:block;">${subject.name}</span>`
              $('.details #subjects').append(template);

            })
            // $('#name').contents =  user.name;
          })
          
          console.log("window loaded");
        });
      })
    </script>
  </body>

</html>