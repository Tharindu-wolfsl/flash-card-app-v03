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
    <?php include './partials/header2.php' ?>
    <div class="container otp-container">
        <div class="row align-items-center">
            <div class="card ms-auto col-lg-5 col-md-8 col-sm-12">
                <div class="card-body d-flex flex-column justify-content-center align-items-center ">
                    <span class="form-logo"></span>
                    <form class="w-100">
                        <div class="my-3 otp-title d-flex justify-content-between align-items-center">
                            <label for="exampleInputEmail1" class="form-label mb-2  b-text h3">OTP Verification</label>
                            <label for="exampleInputEmail1" class="form-label mb-2  b-text cancel">Cancel</label>
                        </div>
                        <div class="my-3 otp-content">
                            <label for="exampleInputEmail1" class="form-label mb-2  b-text">We’ve just send you 4 digits code to your email</label>
                            <label for="exampleInputEmail1" class="form-label mb-2  b-text">example@example.com</label>
                        </div>
                        <div class="my-3 otp-input-set form-inputs">
                            <div class="otp-input">
                                <input type="text" maxlength="1">
                                <input type="text" maxlength="1">
                                <input type="text" maxlength="1">
                                <input type="text" maxlength="1">
                            </div>
                        </div>
                        <button type="submit" class="btn submit rounded-pill w-100">continue</button>
                    </form>
                    <div class="my-3 otp-resend">
                        <label for="">Didn’t received the code?<a  href="#">Resend Code</a></label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include './partials/footer.php' ?>
    <script>
      const cancelButton = document.querySelector('.cancel');
      cancelButton.addEventListener('click', function() {

        alert('OTP sending has been canceled.');
      });
    </script>
</body>

</html>


<style>
    body {
        font-family: var(--font-poppins);
        background: url('./assets/images/background.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
    }

    .otp-container .card {
        margin: 100px auto;
    }

    .otp-title :nth-child(1) {
        font-weight: 700;

    }

    .otp-title :nth-child(2) {
        color: rgb(20, 79, 76);
        margin-bottom: 0 !important;
        font-weight: 600;
    }

    .otp-content :nth-child(1) {
        color: #8c8e9f;
    }

    .otp-content :nth-child(2) {
        color: #75788d;
    }

    .otp-input {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .otp-input input[type="text"] {
        width: 70px;
        height: 30px;
        margin: 0 10px;
        font-size: 24px;
        text-align: center;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
    }

    .otp-resend label{
        color: #8c8e9f;
    }
    .otp-resend label a{
        color: rgb(20, 79, 76);
        font-weight: 600;
        text-decoration: none !important;
        margin-left: 5px;      
    }

    .otp-input-set{
        padding: 30px 0;
    }

    .b-text {
        font-weight: 500;
    }

    .card {
        border-radius: 40px;
        padding-left: 50px;
        padding-right: 50px;
        box-shadow: 4px 5px 10px -5px;
    }

    .form-checks {
        padding: 0;
    }

    .form-check-label small {
        font-size: smaller;
        font-weight: 500;

    }

    .form-logo {
        background: url('../assets/images/logo1.jpg');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        height: 100px;
        width: 100%;
    }

    .rounded-pill {
        border: 1px solid rgb(20, 79, 76);
        padding: 0.8rem;
    }


    .submit {
        background-color: rgb(20, 79, 76);
        color: white;
        font-weight: 600;
        text-align: center;
    }

    @media (max-width: 575.98px) {
        .card {
            padding-left: 30px !important;
            padding-right: 30px !important;
        }

    }
</style>