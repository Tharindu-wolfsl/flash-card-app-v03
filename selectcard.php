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
    <?php include './partials/headersection.php' ?>
    <div class="container">
        <div class="card-section my-2">
            <h3  class="card-sec-title text-center mb-3">
                SELECT <span>A CARD</span> TO PLAY
            </h3>
            <div class="cards-set row mx-aut gy-3">
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
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-12 mx-auto d-flex ">
                <div class="subject-card col  mx-auto"><span class="card-header">CHEMISTRY</span>
                    <div class="card-content d-flex">
                        <button class="btn play">Play Deck</button>
                        <span class="subject-vl"></span>
                        <button class="btn view">View Sub Deck</button>
                    </div></div>    
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
</body>
</html>
<script>


</script>


<style>
    .card-sec-title{
        position: relative;
        font-weight: 700;
    }
    .card-sec-title span{
        border-bottom: 8px solid #045A4F;
    }
    
    .card-content{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        padding-left: 50px;
    }
    .card-content .btn{
        height: 100%;
        color: white;
        margin: 0 12px;
    }
    .card-content .subject-vl{
        width: 1px;
        height: 70%;
        color: white;
        background-color: white;

    }

    .subject-card{
        position: relative;
        min-height: 200px;
        background-color: #045A4F;
        color: white;
        border-radius: 50px 20px 0px 50px;
        box-sizing: border-box;
        margin: 10px;
    }

    .subject-card::before{
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
    .subject-card .card-header{
        position: absolute;
        transform: rotate(-90deg);
        background-color: transparent;
        font-size: 22px;
        font-weight: 700;
        padding: 0;
        top: 40%;
        left: -4%;
    }
    body{
        background: url('./assets/images/background.jpg');
        background-position:center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }
</style>