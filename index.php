<!DOCTYPE html>
<html>
  <head>
    <title>Blue Moon - Responsive Admin Dashboard</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="Blue Moon - Responsive Admin Dashboard" />
    <meta name="keywords" content="Notifications, Admin, Dashboard, Bootstrap3, Sass, transform, CSS3, HTML5, Web design, UI Design, Responsive Dashboard, Responsive Admin, Admin Theme, Best Admin UI, Bootstrap Theme, Wrapbootstrap, Bootstrap, bootstrap.gallery" />
    <meta name="author" content="Bootstrap Gallery" />
    <link rel="shortcut icon" href="callmachine/main-files/bluemoon1/img/favicon.ico">
    
    <link href="callmachine/main-files/bluemoon1/css/bootstrap.min.css" rel="stylesheet">

    <link href="callmachine/main-files/bluemoon1/css/new.css" rel="stylesheet">
    <!-- Important. For Theming change primary-color variable in main.css  -->

    <link href="callmachine/main-files/bluemoon1/fonts/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-40304444-1', 'iamsrinu.com');
      ga('send', 'pageview');

    </script>
  </head>

  <body>

    <!-- Main Container start -->
    <div class="dashboard-container">

      <div class="container">

        <!-- Row Start -->
        <div class="row gutter">
          <div class="col-lg-4 col-md-4 col-md-offset-4">
            <div class="sign-in-container">
              <form action="index.php" class="login-wrapper" method="post">
                <div class="header">
                  <div class="row gutter">
                    <div class="col-md-12 col-lg-12">
                      <h3>VOZ Y DATOS<img src="callmachine/main-files/bluemoon1/img/logo1.png" alt="Logo" class="pull-right"></h3>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="form-group">
                    <label for="userName">Usuario</label>
                    <input type="text" class="form-control" id="userName" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <label for="Password1">Contraseña</label>
                    <input type="password" class="form-control" id="Password1" placeholder="Password">
                  </div>
                </div>
                <div class="actions">
                  <input class="btn btn-danger" name="Login" type="submit" value="Entrar">
                  <a class="link" href="#">Recuperar Password</a>
                  <div class="clearfix"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Row End -->
        
      </div>
    </div>
    <!-- Main Container end -->

    <script src="callmachine/main-files/bluemoon1/js/jquery.js"></script>
    <script src="callmachine/main-files/bluemoon1/js/bootstrap.min.js"></script>

  </body>
</html>