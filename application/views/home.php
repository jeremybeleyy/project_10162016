<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GI.JO Fitness</title>

    <?php include '_partials/_header.php'; ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <video id="bgvid" playsinline autoplay muted loop>
      <source src="assets/extras/back.mp4" type="video/mp4">
    </video>

    <nav role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo center"><TODO></a>
        </div>
      </nav>
      <div class="section no-pad-bot" id="index-banner">
        <div class="container">
          <br><br>

          <div class="row center">
            <h1 class="header left animated bounceInLeft">Welcome!</h1>
            <form class="col s12">
              <h5 class="sub-header center animated bounceInLeft">Sign up today and receive tons of secret tips from the coaches!</h5>
              <div class="row">
                <div class="input-field col s6">
                  <input id="first_name" type="text" class="validate">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                  <input id="last_name" type="text" class="validate">
                  <label for="last_name">Last Name</label>
                </div>
                <div class="input-field col s12">
                  <input id="eadd" type="email" class="validate">
                  <label for="eadd">Email</label>
                </div>
                <div class="input-field col s6">
                  <input id="mobile" type="tel" class="validate">
                  <label for="mobile">Mobile No.</label>
                </div>
                <div class="input-field col s6">
                  <input id="telephone" type="tel" class="validate">
                  <label for="telephone">Telephone No.</label>
                </div>
              </div>
            </form>
          </div>

          <div class="container">
          <br><br>

          <div class="row center">
            <a href="#" id="submit" class="btn-large waves-effect waves-light grey darken-4">Submit<i class="material-icons right">send</i></a>
          </div>
          <br><br>

        </div>
      </div>

      <footer class="page-footer grey darken-4">
        <div class="container">
          <div class="row">
            <div class="col l6 s12 info">
              <h5 class="white-text">GI.JO Fitness</h5>
              <p class="grey-text text-lighten-4">
                Unit D Block 51 Lot 2A Bristol St. North Fairview, 1121 Quezon City, Philippines
              </p>
            </div>
            <div class="col l3 s12">
              <h5 class="white-text">STAY CONNECTED!</h5>
              <ul class="connect">
                <li id="facebook"><a href="https://www.facebook.com/gijofitcamp"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a></li>
                <li id="twitter"><a href="#!"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                <li id="instagram"><a href="#!"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright center">
          <div class="container">
            © 2016 GI.JO FITNESS. ALL RIGHTS RESERVED
          </div>
        </div>
      </footer>

    <?php include '_partials/_footer.php'; ?>
  </body>
</html>
