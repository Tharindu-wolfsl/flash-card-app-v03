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
            <div class="card-body quection-card  d-flex flex-column align-items-center justify-content-center">
                <h5 class="card-title" id="card-title-id">QUESTION</h5>
                <p class="card-text" id="card-text-id"></p>
            </div>
        </div>
        <div class="mt-1 ms-auto col-lg-5 col-md-8 col-sm-12">
            <button class="btn btn-dark rounded-pill px-4 py-2 text-center w-100" onclick="showAnswer()">Show Answer</button>
        </div>
    </div>
    <?php include './partials/test-modal.php' ?>
    <?php include './partials/footer.php' ?>
    <script src="./js/auth.js"></script>

    <script>
        let q_id = null;
        let type = '';
        window.onload = () => {

            const access_token = JSON.parse(localStorage.getItem('access_token'));
            let queryString = window.location.search;
            let urlParams = new URLSearchParams(queryString);
            q_id = urlParams.get('id');
            type = urlParams.get('type');

            axios.get('http://fca.systemiial.com/api/get-card', {
                params: {
                    token: access_token,
                    type: type,
                    id: q_id
                }
            }).then(response => {
                if (response.data.data) {
                    // document.getElementById("card-text-id").innerText = removeHtmlTags(response.data.data.description ? response.data.data.description : response.data.data[0].description);
                    if (response.data.data.name) {
                        document.getElementById("card-text-id").innerText = removeHtmlTags(response.data.data.name ? response.data.data.name : response.data.data[0].name);
                    } else if (response.data.data.image) {
                        $('.quection-card').append(`<img src=${response.data.data.image ? response.data.data.image : response.data.data[0].image} id="card-img-id">`);
                    }

                } else {
                    $('#testModal').modal('show');
                    document.getElementById("error-text").innerText = response.data.message;
                }
            })
        }

        function showAnswer() {
            window.location.replace(`./answers.php?id=${q_id}&type=${type}`);
        }

        // Get the button element
        var doneButton = document.getElementById('modal-done');
        var closeButton = document.getElementById('modal-close');

        doneButton.addEventListener('click', function() {
            window.location.replace('./selectcard.php');
        });

        closeButton.addEventListener('click', function() {
            window.location.replace('./selectcard.php');
        });

        function removeHtmlTags(text) {
            if (text != null) {
                return text.replace(/<[^>]*>/g, '');
            } else {
                return '';
            }

        }
    </script>
</body>

</html>

<style>
    .card {
        margin-top: 80px;
        min-height: 21rem;
        border-radius: 40px 40px 40px 0px;
        background-color: rgb(20, 79, 76);
        color: white;
        padding: 2rem 3rem 4rem 2rem;
        ;
    }

    .card-title {
        text-align: center;
        margin-bottom: 20px;
        font-size: 28px;
        font-weight: 700;
    }

    .card-text {
        text-align: left;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: 100;
    }

    body {
        background: url('./assets/images/quec-bg.png');
        background-position: left;
        background-size: contain;
        background-repeat: no-repeat;
        height: 100vh;
        width: 100%;
        background-color: #E6DEDC;
    }

    @media (max-width: 991.98px) {
        body {
            background-position: center;
            background-size: cover;
        }

    }
</style>