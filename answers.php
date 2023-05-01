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
    <div class="answer-bg">
    <div class="container">
        <div class="card  ms-auto col-lg-5 mt-5 col-md-8 col-sm-12 mb-3">
            <div class="card-body  d-flex flex-column align-items-center justify-content-center">
                <span class="card-title">ANSWER</span>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perferendis atque perspiciatis aut quod.</p>
                <div class="answers mt-4 col-sm-10 d-flex flex-column">
                    <button class="btn rounded-pill answer answer-perfect"><img src="./assets/icons/perfect.png" alt=""><span>PERFECT</span><span class="time ms-auto">1&nbsp;min</span></button>
                    <button class="btn rounded-pill answer answer-poor"><img src="./assets/icons/poor-new.png" alt=""><span>POOR</span><span class="time ms-auto">8&nbsp;min</span></button>
                    <button class="btn rounded-pill answer answer-good"><img src="./assets/icons/good-new.png" alt=""><span>GOOD</span><span class="time ms-auto">10&nbsp;min</span></button>
                    <button class="btn rounded-pill answer answer-repeat"><img src="./assets/icons/repeat-new.png" alt=""><span>REPEAT</span><span class="time ms-auto">4&nbsp;days</span></button>
                </div>
            </div>
        </div>
        <div class="mt-2 ms-auto col-lg-5 col-md-8 col-sm-12">
            <button class="btn btn-dark rounded-pill px-4 py-2 text-center w-100">Show Answer</button>
        </div>
    </div>
    </div>
    <?php include './partials/footer.php' ?>
</body>

</html>

<style>
    .answer-bg{
        background: url('./assets/images/ans-bg.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-color: white;
        background-position: left;
        margin-top: 0;

    }
    .show {
        line-height: 30px;
    }

    .answers .btn {
        color: white;
        width: 100%;
    }

    .answer {
        display: flex;
        align-items: center;
        width: 100%;
        padding-inline: 18px;
        line-height: 20px;
        margin-bottom: 8px;
    }

    .answer-perfect {
        background-color: #6BDC58;
    }

    .answer-poor {
        background-color: #FD6D6D;
    }

    .answer-good {
        background-color: #FAC565;
    }

    .answer-repeat {
        background-color: #2CE4E2;
    }

    .card {
        margin-top: 40px;
        min-height: 400px;
        border-radius: 50px 50px 50px 0px;
        background-color: rgb(20, 79, 76);
        color: white;
        padding: 30px 20px 10px 20px;
    }

    .card-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: 700;
        font-family:var(--font-poppins);
    }

    .card-text {
        text-align: left;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: 100;
    }

    body {
        background: url('./assets/images/background.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }

    @media (max-width: 991.98px) {
        body {
            background-position: center;
            background-size: cover;
        }
    }


    ul {
        text-decoration: none;
        padding: 0;
        margin: 0;
        border: none;
    }

    li {
        list-style: none;
        padding: 0;
        margin: 0;
        border: none;
    }

    .answers img{
        margin-right: 5px;
    }

    @media (max-width: 991.98px) {  
        .answer-bg{
        background-size: cover;
    }
    }

</style>