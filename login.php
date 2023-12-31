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

    <title>Login</title>
  </head>
  <body>

  <section class="home-hero login">

    <div class="badge reset-success">
      <img src="assets/img/reset-success.svg" alt=""> Send reset instructions was succesful.
    </div>

    <div class="login-wrapper pb-0 w-100">
      <div class="bg-dots bg-dots-left"></div>
      <div class="bg-dots bg-dots-right"></div>

      <div class="mt-5 text-center login-card-wrapper">

          <div class="card-item login-card">
              <div style="margin-top: -20px;" class="d-flex justify-content-center mb-3">
                <img class="logo-dark" src="assets/img/crazy-rdp-logo.svg" alt="">
                <img class="logo-light" src="assets/img/logo-light.svg" alt="">
              </div>  


              <h2 class="login-title">Login Account</h2>

              <form action="" method="POST">

                <div class="login-input-wrapper mb-3">
                  <label for="#email">Email Address</label>
                  <input type="email" id="email" name="email" required placeholder="email@address.com">                
                </div>

                <div class="login-input-wrapper mb-4">
                  <label for="#password">Password</label>
                  <input type="password" id="password" name="password" required placeholder="••••••••••">                
                </div>

                <button class="btn-dark w-100 mb-2" type="submit">Login</button>

                <button class="btn-light w-100 mb-3">Register account</button>

                <div class="text-center">
                    <a class="fs-14" href="#">Forgot password?</a>
                </div>

              </form>




          </div>
      </div>       
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  </body>
</html>
