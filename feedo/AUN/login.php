<!DOCTYPE html>
<html lang="en">

<head>
  <title>Employee Login</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Resto">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- External CSS -->
  <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.min.css">

  <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>

<body>
  <div class="container">
    <form action="fos/admin/index.php" method="post">
      <div class="row mt-5">
        <div class="spContainer mx-auto">
          <div class="card px-4 py-5 border-0 shadow">
            <div class="d-inline text-left mb-3">
              <img src="img/logo.jpg" alt="" width=100px height=80px style="margin-left: 30%">
            </div>
            <div class="d-inline text-left mb-3">
              <h3 class="font-weight-bold">Employee Login</h3>
            </div>
            <div class="d-inline text-center mb-0">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="text" placeholder="email" name="email">
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input class="form-control inpSp" type="password" placeholder="Password" name="password">
              </div>
            </div>
            <div class="d-inline text-left mb-3">
              <div class="form-group mx-auto">
                <button class="btn btn-primary">Login</button>
                <!-- <a class="small text-black-50 pl-2 ml-2 border-left" href="">Forgot Password ?</a> -->
              </div>
            </div>
          </div>
        </div>
        <div class="d-inline text-left mt-3">

        </div>
      </div>
  </div>
  </div>
  </form>
  </div>

  
</body>

</html>