<div class="header-section  d-flex flex-column justify-content-center align-items-center">
    <div class="container">
        <div class="section-text col-lg-10 mx-auto text-light h3">
            <p>WE HAVE A PROVEN TRACK RECORD OF HELPING YEAR<br>
                <span class="text-warning">11 & 12 STUDENTS</span>
                GET THE BEST OUT OF THEIR STUDIES.
            </p>
            <button class="btn learn" onclick="testModal()">LEARN MORE</button>
        </div>
    </div>
</div>
<?php include './partials/test-modal.php' ?>
<script>
    function testModal(){
        $('#testModal').modal('show');
    }
</script>
<style>
    .header-section {
        position: relative;
        min-height: 300px;
        width: 100%;
        text-align: center;
    }
    .header-section::before{
        content:"";
        position: absolute;
        background-image: url('../assets/images/select-card.png');
        filter: brightness(70%);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        width: 100%;
        height: 100%;
    }

    .section-text{
        position: relative;
        margin-top: 50px;
    }
    .learn{
        padding-inline: 3px;
        border-radius: 10px;
        text-align: center;
        font-size: 18px;
        font-weight: 700;
        background-color: #045A4F;
        color: white;
        line-height: 25px;
        padding: 10px;
        margin-top: 10px;
    }

    .section-text p{
        font-size: 24px;
    }

</style>