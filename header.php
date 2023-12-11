<!doctype html>
<html lang="en" data-theme="light">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/dark-theme.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <title>Dashboard</title>
  </head>
  <body>


  <header class="border-bottom sticky-top">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container d-flex flex-wrap align-items-center justify-content-between  py-3">

          <a href="/" class="logo-wrapper d-flex align-items-center col-md-2 text-dark text-decoration-none order-lg-1">
            <img class="logo-dark" src="assets/img/crazy-rdp-logo.svg" alt="">
            <img class="logo-light" src="assets/img/logo-light.svg" alt="">

          </a>

          <div class="col-md-4 d-flex align-items-center justify-content-end order-lg-3">



            <!-- Dark Mode/Light Mode Switcher-->
            <div class="form-check form-switch d-inline">
              <input class="form-check-input" type="checkbox" id="modeSwitch">
            </div>

            <!--Nav Action Buttons-->
            <a class="btn-balance btn-login d-lg-block hover-light-dark" href="#">€10.30 <div class="add-balance"><img src="assets/img/plus-d.svg" alt=""></div></a>

            <div class="profile-area position-relative">
             <img class="profile-img  options-toggle" src="assets/img/profile.png" alt="">

              <div class="options-toggle-dropdown">
                <ul>
                  <li class="dropdown-profile-item"><img style="width:28px;height:28px" src="assets/img/profile.png" alt="">Udodov228</li>

                  <li style="border-bottom:unset !important"><a href="#"><img  style="filter: brightness(2.5);" src="assets/img/settings.svg" alt="">Settings</a></li>
                  <li><a href="#"><img style="filter: brightness(2.5);" src="assets/img/messages.svg" alt="">Support Tickets</a></li>
                  <li><a href="#"><img src="assets/img/signout.svg" style="margin-right: 15px !important;margin-left: 3px;" alt="">Sign out</a></li>

                </ul>
              </div>

            </div>

          </div>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

          <div class="collapse navbar-collapse col-12 col-md-6 col-sm-5 justify-content-center order-lg-2" id="navbarNav">
            <ul class="navbar-nav justify-content-center mb-md-0">
                <li class="nav-item"><a href="#" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Tickets</a></li>
                <li class="nav-item"><a href="#" class="nav-link active">Servers</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Invoices</a></li>
            </ul>
          </div>
      </nav>
  </header>