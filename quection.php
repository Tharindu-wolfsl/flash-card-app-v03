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
    <div class="container">
        <div class="card  ms-auto col-lg-5 col-md-8 col-sm-12">
            <div class="card-body  d-flex flex-column align-items-center justify-content-center">
                <h5 class="card-title">QUESTION</h5>
                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est perferendis atque perspiciatis aut quod. Cupiditate, consequuntur non. Aut voluptas, sequi fugiat veritatis nulla deserunt eum ex? Magni laboriosam soluta cupiditate!</p>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
</body>

</html>

<style>

    .card{
        margin-top: 80px;
        min-height: 500px;
        border-radius: 40px 40px 40px 0px;
        background-color:  rgb(20, 79, 76);
        color: white;
        padding: 60px;
        }
        .card-title{
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            font-weight: 700;
        }
        .card-text{
            text-align: left;
            font-size: 20px;
            letter-spacing: 1px;
            font-weight: 100;
        }
    body {
        background: url('./assets/images/quection-card.png');
        background-position: left;
        background-size: contain;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        background-color: #E6DEDC;
    }
    @media (max-width: 991.98px) { 
        body{
        background-position: center;
        background-size: cover;
        }
        
     }
</style>