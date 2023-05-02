<!DOCTYPE html>
<html>

<head>
    <title>Sign Up Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            background-image: url("./assets/images/background.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            margin: 0;
            padding: 0;
            font-family: var(--font-poppins) !important;
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
            border: 2px solid #000 !important;
            border-radius: 30px !important;
            padding: 15px !important;
            margin-bottom: 20px;
            outline: none;
        }

        .signup-box input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 25px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .signup-box .sign-up {
            text-align: center;
            margin-top: 20px;
        }

        .signup-box .sign-up a {
            color: #555;
            text-decoration: none;
        }

        .signup-box .sign-up a:hover {
            text-decoration: underline;
        }



        .form-logo {
            background: url('./assets/images/logo1.jpg');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 100px;
            width: 100%;
        }

        .inline-checkbox label {
            margin-bottom: 0 !important;
        }

        .rounded-pill {
            border: 1px solid rgb(20, 79, 76);
            padding: 1rem;
        }


        #form-submit {
            display: block;
            background-color: rgb(20, 79, 76);
            color: white;
            font-weight: 600;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }


        @media screen and (max-width: 640px) {
            .signup-box {
                width: 100%;
                max-width: 100%;
                border-radius: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="./style.css">
    <?php include './partials/requirements.php' ?>
</head>

<body>
    <?php include './partials/header.php' ?>
    <?php include './partials/navbar.php' ?>
    <div class="signup-box p-5">
        <img class="mb-5" src="./assets/images/logo-update-subject.png">
        <form method="post" action="process_form.php" class="my-4">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <span style="color:red;" class="name-error"></span>

            <!-- Rest of the code -->
        </form>

        <center><label>Select your Subject</label></center>

        <div class="checkbox-group d-flex justify-content-around py-3">
            <div class="inline-checkbox chem-error d-flex align-items-center">
                <input class="subjects me-2" type="checkbox" name="chemistry" id="chemistry" value="1">
                <label for="chemistry">Chemistry</label>
            </div>
            <div class="inline-checkbox maths-error d-flex align-items-center">
                <input class="subjects me-2" type="checkbox" name="maths" id="maths" value="2">
                <label for="maths">Maths</label>
            </div>
            <div class="inline-checkbox phy-errorx d-flex align-items-center">
                <input class="subjects me-2" type="checkbox" name="physics" id="physics" value="3">
                <label for="physics">Physics</label>
            </div>
            <div class="inline-checkbox bio-error d-flex align-items-center">
                <input class="subjects me-2" type="checkbox" name="biology" id="biology" value="4">
                <label for="biology">Biology</label>
            </div>
        </div>
      <button class="my-4 btn submit rounded-pill w-50 py-2" id="form-submit" type="button" name="submit">Update</button>
    </div>
    <script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="./js/auth.js"></script>
    <script>
        window.onload = async function() {
            let profileData = [];
            let selectedSubjects = [];
            const access_token = JSON.parse(localStorage.getItem("access_token"));

            await axios.get('http://fca.systemiial.com/api/view-profile', {
                params: {
                    token: access_token
                }
            }).then(response => {
                profileData = response.data.data;
                if (profileData) {
                    document.getElementById("name").value = profileData.name;
                }
            })
            // const access_token = JSON.parse(localStorage.getItem("access_token"));
            // console.log("1dsdsdd");
            console.log("ProfileData", profileData);
            if (profileData) {
                if (profileData.subjects) {
                    profileData.subjects.forEach(data => {
                        selectedSubjects.push(data.id);
                    })
                    console.log("selectedSubjects", selectedSubjects);
                    selectedSubjects.forEach(checked_id => {
                        if (checked_id == 1) {
                            $('#chemistry').attr('checked', true);
                        }
                        if (checked_id == 2) {
                            $('#maths').attr('checked', true);
                        }
                        if (checked_id == 3) {
                            $('#physics').attr('checked', true);
                        }
                        if (checked_id == 4) {
                            $('#biology').attr('checked', true);
                        }
                    })
                }
            }
        }
    </script>
    <script>
        $(document).ready(function() {

            const access_token = JSON.parse(localStorage.getItem("access_token"));

            $('#form-submit').click(function() {
                console.log('dsadsdsa');
                let name = '';
                let subjects = [];
                let selectedSubjectIds = "";
                let errors = [];
                name = document.getElementById("name").value;
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

                selectedSubjectIds = selectedSubjectIds.slice(0, -1);
                console.log(name, 'name');
                console.log(selectedSubjectIds, 'subjects');
                axios.post('http://fca.systemiial.com/api/update-profile', {
                    name: name,
                    pref_ids: selectedSubjectIds,
                    token: access_token
                }).then(response => {
                    console.log(response.data, "data");
                    $('.name-error').text(``);
                    window.location.replace('profile.php');
                    // alert("response", response);
                }).catch(e => {
                    if (e.response.data) {
                        errors = JSON.parse(e.response.data);
                        if (errors['name'] && errors['name'][0]) {
                            $('.name-error').text(`${errors['name'][0]}`);
                        }
                    } else {
                        console.log(e.response.message);

                    }
                })
            })
        })
    </script>
    <?php include './partials/footer.php' ?>
</body>

</html>