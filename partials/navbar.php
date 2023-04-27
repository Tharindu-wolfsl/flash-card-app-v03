<nav class="navbar navigation-bar navbar-expand-lg navbar-dark py-3 ">
  <div class="container">
    <a class="navbar-brand" href="#"><img class="header-logo" src="../assets/images/header-logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" x id="navbarNav">
      <ul class="navbar-nav  ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../profile.php">MY PROFILE</a>
        </li>
        <li>
          <span class="line-break d-block d-lg-block"></span>
        </li>
        <li class="nav-item">
          <a id="logout" class="nav-link active" href="" >LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<style>
  .line-break {
    height: 50px;
    border-left: 2px solid #ffffff70;
    margin: auto 5px;
  }

  .navigation-bar{
    box-shadow: 0px 5px 30px -11px;
    background-color: #5c938dc7;
  }

  .nav-link {
    font-weight: 700;
    font-size: 24px;
  }
  .header-logo{
      width: 50%;
    }
  @media (max-width: 575.98px) {
    .header-logo{
      width: 40%;
    }
  }
</style>
<script src="../js/logout.js" defer></script>
