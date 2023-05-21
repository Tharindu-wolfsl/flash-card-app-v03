<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlashCard</title>
    <link rel="stylesheet" href="./style.css">
    <?php include './partials/requirements.php' ?>
    <script src="./js/auth.js"></script>

</head>

<body>
    <?php include './partials/header.php' ?>
    <?php include './partials/navbar.php' ?>
    <?php include './partials/headersection.php' ?>
    <div class="container">
        <div class="card-section my-5">
            <h3 class="card-sec-title text-center mb-3">
                SELECT <span>A CARD</span> TO PLAY
            </h3>
            <div class="cards-set row mx-auto gy-3 gx-4">
                <!-- <div class=" col-lg-4 col-md-6 col-sm-12 mx-auto d-flex ">
                <div class="subject-card col  mx-auto"><span class="card-header">CHEMISTRY</span>
                    <div class="card-content d-flex">
                        <button class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button class="btn view">View Sub Deck</button>
                    </div></div>    
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mx-auto d-flex ">
                <div class="subject-card col  mx-auto"><span class="card-header">CHEMISTRY</span>
                    <div class="card-content d-flex">
                        <button class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button class="btn view">View Sub Deck</button>
                    </div></div>    
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mx-auto d-flex ">
                <div class="subject-card col  mx-auto"><span class="card-header">CHEMISTRY</span>
                    <div class="card-content d-flex">
                        <button class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button class="btn view">View Sub Deck</button>
                    </div></div>    
                </div> -->
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
    <script>
        window.onload = async () => {
            const access_token = JSON.parse(localStorage.getItem('access_token'));
            await axios.get('http://fca.systemiial.com/api/view-profile', {
                params: {
                    token: access_token
                }
            }).then(response => {
                let subjects = [];
                let template = ``;
                let card_section = document.querySelector('.cards-set');

                subjects = response.data.data.subjects;
                subjects.forEach(subject => {
                    template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header">${subject.name}</span>
                    <div class="card-content d-flex">
                        <button  class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button onClick="getModuleBySubject(${subject.id})" class="btn view">View Sub Deck</button>
                    </div></div>    
                </div>`;
                    $('.cards-set').append(template);
                })
            })

        }
        async function getModuleBySubject(sub_id) {
            const access_token = JSON.parse(localStorage.getItem('access_token'));
            console.log("sub id", sub_id);
            let modules = [];
            await axios.get(`http://fca.systemiial.com/api/get-modules-by-subject`, {
                params: {
                    token: access_token,
                    id: sub_id
                }
            }).then(response => {
                if (response.data.data) {
                    let modules = [];
                    let template = ``;
                    let card_section = document.querySelector('.cards-set');

                    modules = response.data.data;
                    $('.s-card').remove();
                    modules.forEach(module => {
                        template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header">${module.name}</span>
                    <div class="card-content d-flex">
                        <button  class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button class="btn view" onClick="getTopicsByModule(${module.id})">View Sub Deck</button>
                    </div></div>    
                </div>`;
                        $('.cards-set').append(template);
                    })
                }

            })
        }

        async function getTopicsByModule(module_id) {
            const access_token = JSON.parse(localStorage.getItem('access_token'));
            await axios.get(`http://fca.systemiial.com/api/get-topics-by-module`, {
                params: {
                    token: access_token,
                    id: module_id
                }
            }).then(response => {
                if (response.data.data) {
                    let topics = [];
                    let template = ``;
                    let card_section = document.querySelector('.cards-set');

                    modules = response.data.data;
                    $('.s-card').remove();
                    modules.forEach(module => {
                        template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header">${module.name}</span>
                    <div class="card-content d-flex">
                        <button onClick="getTopicsByModule(${module.id})" class="btn play">Play Deck</button>
                    </div></div>    
                </div>`;
                        $('.cards-set').append(template);
                    })
                }
            })
        }
    </script>
</body>

</html>
<style>
    .cards-set {
        margin-top: 1rem;
    }

    .card-sec-title {
        position: relative;
        font-weight: 700;
    }

    .card-sec-title span {
        border-bottom: 8px solid #045A4F;

    }

    .card-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding-left: 5rem;
    }

    .card-content .btn {
        color: white;
        margin: 0 12px;
    }

    .card-content .subject-vl {
        width: 1px;
        height: 70%;
        color: white;
        background-color: white;

    }

    .subject-card {
        position: relative;
        max-height: 200px;
        background-color: #045A4F;
        color: white;
        border-radius: 50px 40px 0px 50px;
        box-sizing: border-box;
        min-height: 13rem;
    }

    .subject-card::before {
        position: absolute;
        left: 0;
        content: "";
        width: 70px;
        padding-left: 0;
        height: 100%;
        border-radius: 50px 0px 0px 50px;
        background-color: black;
        border-right: 2px solid white;

    }

    .subject-card .card-header {
        position: absolute;
        transform: rotate(-90deg);
        background-color: transparent;
        font-size: 22px;
        font-weight: 700;
        padding: 0;
        top: 40%;
        left: -1%;
        max-height: 3rem;
        word-break: break-all;
    }

    .cards-set :first-child .subject-card .card-header {
        left: -4%;
    }

    body {
        background: url('./assets/images/background.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }

    .play,
    .view {
        font-size: 18px;
    }
</style>