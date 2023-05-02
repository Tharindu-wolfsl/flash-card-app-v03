<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Do something with the form data here, like storing it in a database
    echo "Thank you for signing up!";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include './partials/requirements.php' ?>
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
            font-family: var(--font-poppins);
        }

        .signup-box {
            width: 100%;
            max-width: 510px;
            margin: -25px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 25px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            position: relative;
            top: 100px;
        }

        .signup-box img {
            display: block;
            margin: 0 auto;
            width: 200px;

            margin-top: 20px;
        }

        .signup-box h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
        }

        .signup-box label,
        .signup-box input[type="text"],
        .signup-box input[type="email"],
        .signup-box input[type="password"],
        .signup-box input[type="submit"] {
            width: 100%;
            max-width: 470px;


        }

        .signup-box label {
            display: block;
            margin-bottom: 5px;
        }

        .signup-box input[type="text"],
        .signup-box input[type="email"],
        .signup-box input[type="password"] {
            border: 2px solid #045a4f !important;
            border-radius: 30px !important;
            padding: 15px !important;
            margin-bottom: 20px;
            outline: none;
        }

        .signup-box button {
            background-color: #045a4f;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 25px;
            cursor: pointer;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .signup-box .sign-up {
            text-align: center;
            margin-top: -15px;
        }

        .signup-box .sign-up a {
            color: #555;
            text-decoration: none;
        }

        .signup-box .sign-up a:hover {
            text-decoration: underline;
            color: #045a4f;
        }

        .signup-box .checkboxes {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .checkbox-group {
            display: flex;
            gap: 15px;
            padding-bottom: 20px;
            margin-left: 45px;
        }

        .inline-checkbox {
            display: flex;
            gap: 5px;
            align-items: center;
        }

        .inline-checkbox>label {
            padding-top: 4px;
        }

        .signup-box .checkbox {
            display: flex;
            align-items: center;
        }

        .signup-box .checkbox input[type="checkbox"] {
            margin-right: 5px;
            margin-left: 20px;
            margin-top: -1px;
        }

        @media screen and (max-width: 640px) {
            .signup-box {
                width: 100%;
                max-width: 100%;
                border-radius: 0;
            }
        }

        .forgot-password {
            float: left;


            margin-bottom: 15px;
            margin-right: 30px;
            margin-top: -18px;
            margin-left: 28px;
            color: #B2BEB5 !important;




        }

        .selects {
            text-align: center;
            margin-top: 18px;
            margin-bottom: 20px;

        }

        .privacy {
            font-size: 12px;
            margin-bottom: 0 !important;
            width: fit-content;
            width: unset !important;

        }

        .passwordfield {
            position: relative;

        }

        .eyelogo {
            position: absolute;
            top: 1.9rem;
            width: 1.6rem !important;
            right: 1rem;
            cursor: pointer;
        }

        .form-check-input {
            border: 2px solid rgb(20, 79, 76);
            border-radius: 0 !important;
            margin-top: 0;
            padding: 0.5rem;
        }
    </style>
</head>

<body>
<?php include './partials/header2.php' ?>
    <div class="signup-box">
        <img src="./assets/images/logo1.jpg">

        <form method="post" action="process_form.php">
            <label class="" for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <span style="color:red;" class="name-error"></span>

            <label class="" for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <span style="color:red;" class="email-error"></span>

            <div class="passwordfield">
                <label class="" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password">
                <img src="./assets/icons/eye1.png" class="eyelogo">
                <span style="color:red;" class="password-error"></span>
            </div>
            <!-- <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password"> -->


            <!-- Rest of the code -->
        </form>

        <center><label class="selects mb-3">Select your Subject</label></center>

        <div class="checkbox-group d-flex justify-content-between mx-auto align-items-center">
            <div class="inline-checkbox chem-error d-flex align-items-center ">
                <input class="subjects form-check-input me-2" type="checkbox" name="chemistry" id="chemistry" value="1">
                <label for="chemistry">Chemistry</label>
            </div>
            <div class="inline-checkbox maths-error d-flex align-items-center">
                <input class="subjects form-check-input me-2" type="checkbox" name="maths" id="maths" value="2">
                <label for="maths">Maths</label>
            </div>
            <div class="inline-checkbox phy-errorx d-flex align-items-center">
                <input class="subjects form-check-input me-2" type="checkbox" name="physics" id="physics" value="3">
                <label for="physics">Physics</label>
            </div>
            <div class="inline-checkbox bio-error d-flex align-items-center text-center">
                <input class="subjects form-check-input me-2" type="checkbox" name="biology" id="biology" value="4">
                <label for="biology">Biology</label>
            </div>
        </div>
        <div class="checkbox d-flex justify-content-center align-items-center">
            <input class="form-check-input" type="checkbox" name="privacy_policy" id="privacy_policy" required>
            <label class="privacy" for="privacy_policy">I HAVE READ, UNDERSTOOD AND ACCEPTED THE PRIVACY POLICY</label>
        </div>
       <button class="my-4 btn submit rounded-pill w-100 py-2" id="form-submit" type="button" name="submit">SIGN UP</button>
        <div class="sign-up">
            Already have an account? <a href="index.php">Sign in</a>
        </div>
        </form>
    </div>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#form-submit').click(function() {
                console.log('dsadsdsa');
                let name = '';
                let email = '';
                let password = '';
                let subjects = [];
                let selectedSubjectIds = "";
                let errors = [];
                name = document.getElementById("name").value;
                email = document.getElementById("email").value;
                password = document.getElementById("password").value;
                subjects = document.querySelectorAll('input[type="checkbox"]:checked');

                subjects.forEach(subject => {
                    if (subject.name == 'chemistry') {
                        selectedSubjectIds = selectedSubjectIds + "1,"
                    } else if (subject.name == 'maths') {
                        selectedSubjectIds = selectedSubjectIds + "2,"
                    } else if (subject.name == 'physics') {
                        selectedSubjectIds = selectedSubjectIds + "3,"
                    } else if (subject.name == 'biology') {
                        selectedSubjectIds = selectedSubjectIds + "4,"
                    }
                })
                // selectedSubjectIds = selectedSubjectIds.slice(0, -1);
                console.log(email, "user");
                console.log(password, 'pass');
                console.log(name, 'name');
                console.log(selectedSubjectIds, 'subjects');
                axios.post('http://fca.systemiial.com/api/register', {
                    name: name,
                    email: email,
                    password: password,
                    password_confirmation: password,
                    pref_ids: selectedSubjectIds
                }).then(response => {
                    console.log(response.data, "data");
                    $('.name-error').text(``);
                    $('.email-error').text(``);
                    $('.password-error').text(``);
                    window.location.replace("index.php");
                    // alert("response", response);
                }).catch(e => {
                    if (e.response.data) {
                        errors = JSON.parse(e.response.data);
                        if (errors['name'] && errors['name'][0]) {
                            $('.name-error').text(`${errors['name'][0]}`);
                        }
                        if (errors['email'] && errors['email'][0]) {
                            $('.email-error').text(`${errors['email'][0]}`);
                        }
                        if (errors['password'] && errors['password'][0]) {
                            $('.password-error').text(`${errors['password'][0]}`);
                        }
                        console.log(errors);
                    } else {
                        console.log(e.response.message);

                    }
                })
            })
        })
    </script>
    <script>
        var passwordField = document.getElementById("password");
        var showPasswordBtn = document.querySelector(".eyelogo");
        showPasswordBtn.addEventListener("click", function() {
            //console.log("work");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });
    </script>
</body>

</html>