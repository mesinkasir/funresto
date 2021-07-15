<?php require('session.php');?>
<?php if(logged_in()){ ?>
          <script type="text/javascript">
            window.location = "index.php";
          </script>
    <?php
    } ?>
<!DOCTYPE html>
<html lang="en">

<head>
<link rel="icon" type="image/x-icon" href='https://1.bp.blogspot.com/-X_pYOADXOpA/YO72Ad-giFI/AAAAAAAAP1A/KQIjTTfmuA8mP6xKhX-7h5LETLKegz9xgCLcBGAsYHQ/s512/baker.png'> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fun Resto Apps</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">

  <div class="container">
  <h3 class="text-white text-center p-3 p-md-3">Login Area Fun Resto Apps</h3>
    <div class="row justify-content-center">
  
      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row shadow">
            <img src="../img/baker.png" width="400" class="img-fluid p-3 p-md-3">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><span class="text-danger">Fun</span> <span class="text-info">Resto</span> App</h1>
                  </div>
                  <form class="user" role="form" action="processlogin.php" method="post">
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Username" name="user" type="text" autofocus>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-user" placeholder="Password" name="password" type="password" value="">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-info btn-user btn-block" type="submit" name="btnlogin">Login</button>
                    <hr>
               
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
<p class="text-white text-center"><span>Fun Resto Apps By <a class="text-light" href="https://mesinkasironline.web.app">mesinkasironline.web.app</a></span>
</p>
  </div>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>









