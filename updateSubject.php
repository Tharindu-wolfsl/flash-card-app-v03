<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashCard</title>
    <link rel="stylesheet" href="./style.css">
    <?php include './partials/requirements.php' ?>
</head>

<body>
    <?php include './partials/header.php' ?>
    <?php include './partials/navbar.php' ?>
    <div class="updated-sub-bg"></div>
    <div class="container">
        <?php include './partials/updateSubjectCard.php' ?>
    </div>
    <?php include './partials/footer.php' ?>
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
                        console.log("register",data);
                        if(data.registered=="1"){
                            selectedSubjects.push(data.id);
                        }
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
                    console.log("subjects",subject);
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

<style>
    body {
        position: relative;
        font-family: var(--font-poppins);
    }

    .updated-sub-bg {
        position: absolute;
        background: url('./assets/images/up-sub-bg.png');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        font-family: var(--font-poppins);
    }

    @media (max-width: 991.98px) {
        body {
            background-position: center;
            background-size: cover;
        }
    }
</style>