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
        <div class="card-section my-4 pb-5">
            <h3 class="card-sec-title text-center mb-4">
                SELECT <span>A DECK</span> TO STUDY
            </h3>
            <div class="cards-set row mx-auto gy-3 gx-4">
                <!-- <div class="empty-modules d-flex justify-content-center">
                    <span>Modules not found!</span>
                    <img src="./assets/icons/ban-solid.svg" alt="">
                </div> -->
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
    <script>
        let errorTemplate = `<div class="empty-modules d-flex justify-content-center">
        <img src="./assets/icons/triangle-exclamation-solid.svg" alt="">
                    <span>Modules not found!</span>      
                </div>`;
        window.onload = async () => {
            const access_token = JSON.parse(localStorage.getItem('access_token'));
            await axios.get('http://fca.systemiial.com/api/view-profile', {
                params: {
                    token: access_token
                }
            }).then(response => {
                let subjects = [];
                let template = ``;
                let unreg_subs= [];
                let card_section = document.querySelector('.cards-set');
                subjects = response.data.data.subjects;
                registered = subjects.filter(subject => subject.registered == '1');
                console.log("REGISTERED", registered);
                if (registered.length == 0) {
                    $('.cards-set').append(errorTemplate);
                } else {
                    registered.forEach(subject => {
                            template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header  rotate">${subject.name}</span>
                    <div class="card-content d-flex">
                        <a href="./quection.php?id=${subject.id}&type=subject" class="btn view play">Play Deck</a>
                        <span class="subject-vl"></span>
                        <button onClick="getModuleBySubject(${subject.id})" class="btn view">View Sub Deck</button>
                    </div></div>    
                </div>`;
                            $('.cards-set').append(template);

                    })
                }
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
                    if (modules.length == 0) {
                        $('.cards-set').append(errorTemplate);
                    } else {
                        modules.forEach(module => {
                            template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header  rotate">${module.name}</span>
                    <div class="card-content d-flex">
                    <a href="./quection.php?id=${module.id}&type=module" class="btn view play">Play Deck</a>
                        <span class="subject-vl"></span>
                        <button class="btn view" onClick="getTopicsByModule(${module.id})">View Sub Deck</button>
                    </div></div>    
                </div>`;
                            $('.cards-set').append(template);
                        })
                    }

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
                    if (modules.length == 0) {
                        $('.cards-set').append(errorTemplate);
                    } else {
                        modules.forEach(module => {
                            template = `<div class="s-card col-lg-4 col-md-6 col-sm-12 d-flex ">
                <div class="subject-card col mx-auto"><span class="card-header rotate">${module.name}</span>
                    <div class="card-content d-flex">
                    <a href="./quection.php?id=${module.id}&type=topic" class="btn view play">Play Deck</a>
                    </div></div>    
                </div>`;
                            $('.cards-set').append(template);
                        })
                    }
                }
            })
        }
    </script>
</body>

</html>
<style>
    .cards-set {
        margin-top: 1rem;
        padding-inline: 6.5rem;
    }

    .card-sec-title {
        position: relative;
        font-weight: 700;
        font-size: 20px;
    }

    .card-sec-title span {
        border-bottom: 8px solid #045A4F;

    }

    .card-content {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding-left: 3rem;
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
        min-height: 10rem;
    }

    .subject-card::before {
        position: absolute;
        left: 0;
        content: "";
        width: 50px;
        padding-left: 0;
        height: 100%;
        border-radius: 50px 0px 0px 50px;
        background-color: black;
        border-right: 2px solid white;

    }

    .subject-card .card-header {
        position: absolute;
        width: 8rem;
        top: 50%;
        background-color: transparent;
        font-size: 18px;
        font-weight: 700;
        padding: 0;
        word-break: break-all;
        border: none;
        text-align: center;
        left: 0;
    }

    .subject-card .rotate {
        -moz-transform: translateX(-30%) translateY(-50%) rotate(-90deg);
        -webkit-transform: translateX(-30%) translateY(-50%) rotate(-90deg);
        transform: translateX(-30%) translateY(-50%) rotate(-90deg);
    }

    /* .cards-set :first-child .subject-card .card-header {
        left: -4%;
    } */

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
        font-size: 12px;
    }

    .empty-modules {
        flex-direction: column;
        align-items: center;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .empty-modules span {
        font-size: 24px;
        font-weight: 700;
        opacity: 30%;
        color: blue;
    }

    .empty-modules img {
        width: 2rem;
        opacity: 30%;
        color: blue;
    }
</style>