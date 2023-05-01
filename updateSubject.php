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
</body>

</html>

<style>
    body{
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