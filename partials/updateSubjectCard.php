<div class="card mt-4 ms-auto col-lg-5 col-md-8 col-sm-12">
    <div class="card-body d-flex flex-column justify-content-center align-items-center ">
        <span class="form-logo"></span>
        <form class="w-100">
            <div class="my-3">
                <label for="exampleInputEmail1" class="form-label mb-2  b-text">Name</label>
                <input class="border border-success rounded-pill w-100" type="text" class="form-control" id="exampleInputEmail1" placeholder="Name">
            </div>
            <div class="my-3">
                <label for="exampleInputEmail1" class="form-label mb-2  b-text">Your email</label>
                <input class="border border-success rounded-pill w-100" type="email" class="form-control" id="exampleInputEmail1" placeholder="youremail@gmail.com">
            </div>
            <div class="my-3 form-checks">
                <div class="check-container w-100 d-flex flex-column justify-content-center align-items-center">
                    <span class="check-title mb-3 b-text">Select your subjects</span>
                    <div class="checkboxes col-md-8 p-1 d-flex flex-column">
                        <div class="row row-1 my-2">
                            <div class="check-box col d-flex justify-content-start"> <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label ms-2" for="exampleCheck1"><small>Chemistry</small> </label>
                            </div>
                            <div class="check-box col d-flex justify-content-end"> <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label ms-2" for="exampleCheck1"><small>Physics</small> </label>
                            </div>
                        </div>
                        <div class="row row-2 my-2">
                            <div class="check-box col d-flex justify-content-start"> <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label ms-2" for="exampleCheck1"><small>Maths</small> </label>
                            </div>
                            <div class="check-box col d-flex justify-content-end "> <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label ms-2" for="exampleCheck1"><small>Biology</small> </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn submit rounded-pill w-100">SAVE</button>
        </form>
    </div>
</div>

<style>
    .b-text{
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
        padding: 1rem;
    }

    .form-check-input{
        width: 1.2rem;
        height: 1.2rem;
        border: 3px solid rgb(20, 79, 76);
        border-radius: 0 !important;
        margin-top: 0;
    }
    .submit{
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