<!doctype html>
<html lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="We're a team of designers that work with you to create a clean, crisp, quality foundation for your head.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simon Media</title>
    <!-- Page styles -->
    <link rel="stylesheet" type="text/css" href="styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Open+Sans" rel="stylesheet">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Web Application Manifest -->
    <link rel="manifest" href="manifest.json">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Simon Media">
    <link rel="icon" sizes="192x192" href="images/touch/chrome-touch-icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Simon Media">
    <link rel="apple-touch-icon" href="images/touch/apple-touch-icon.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#000">

    <!-- Color the status bar on mobile devices -->
    <meta name="theme-color" content="#000">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->
  </head>
  <body>
    <!-- Site Wrapper -->
    <div class="container">
      <!-- Header w/ Navigation -->
      <header>
        <!-- Mobile Bottom  Navigation -->
        <nav class="hidden-md hidden-lg navbar navbar-default navbar-fixed-bottom">
          <div id="mobile-site-nav">
            <ul class="nav nav-justified">
              <li><a class="text-uppercase" href="#">about</a></li>
              <li><a class="text-uppercase" href="#">work</a></li>
              <li><a class="text-uppercase" href="#">studios</a></li>
              <li><a class="text-uppercase" href="#">contact</a></li>
            </ul>
          </div>
        </nav>

        <!-- Desktop Navigation -->
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="#" class="navbar-brand"><img src="images/sm_logo.svg" alt="Simon Media Logo"></a>
            </div>
            <div class="hidden-xs hidden-sm">
              <ul class="nav navbar-nav">
                <li><a class="text-uppercase" href="#">about</a></li>
                <li><a class="text-uppercase" href="#">work</a></li>
                <li><a class="text-uppercase" href="#">studios</a></li>
                <li><a class="text-uppercase" href="#">contact</a></li>
              </ul>
            </div>
            <div class="pull-right">
              <ul class="nav navbar-nav">
                <li><a class="text-uppercase" href="#">blog</a></li>
                <li><a class="text-uppercase" href="#">shop</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </header>
      <!-- Intro Section -->
      <section id="intro">
        <div class="container">
          <div class="row">
            <div class="intro">
              <img class="img-responsive col-sm-6 col-lg-7" src="images/portfolio/feature-1.jpg" alt="intro image">
              <div class="intro col-sm-6 col-lg-5">
                <h3 class="small text-uppercase">a branding studio</h3>
                <h1>See it happen. Create your ideas.</h1>
                <p>We're a team of designers that work with you to create a clean, crisp, quality foundation for your head.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr></hr>
      <!-- Work Section -->
      <section id="work">
        <div class="container">

          <div class="row">
            <div class="col-md-8">
              <div style="margin-bottom: 20px;" class="featured-client">
                <img src="images/portfolio/feature-1.jpg" alt="#" class="img-responsive featured">
              </div>
            </div>
            <div class="col-md-4">
              <div class="client">
                <img src="images/portfolio/work-example.jpg" alt="#" class="img-responsive">
                <h3>Client Work</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
              <div class="client">
                <img src="images/portfolio/work-example.jpg" alt="#" class="img-responsive">
                <h3>Client Work</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="client">
                <img src="images/portfolio/work-example.jpg" alt="#" class="img-responsive">
                <h3>Client Work</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="client">
                <img src="images/portfolio/work-example.jpg" alt="#" class="img-responsive">
                <h3>Client Work</h3>
                <p>Itaque, iusto. Soluta provident a eveniet excepturi earum!</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="client">
                <img src="images/portfolio/work-example.jpg" alt="#" class="img-responsive">
                <h3>Client Work</h3>
                <p>Architecto fuga necessitatibus explicabo sequi, volupta!</p>
              </div>
            </div>
          </div>

        </div>
      </section>
      <hr></hr>
      <!-- Newsletter Section -->
      <section id="newsletter">
        <div class="container">
          <div class="row">
            <img class="img-responsive col-md-8 col-lg-7" src="images/portfolio/feature-1.jpg" alt="Simon Media Newsletter">
            <div class="newsletter-info col-md-4 col-lg-5">
              <h3 class="small text-uppercase">subscribe</h3>
              <h1 class="text-capitalize">join the newsletter</h1>
              <button class="btn btn-default text-uppercase">subscribe</button>
            </div>
          </div>
        </div>
      </section>
      <hr></hr>
      <!-- Contact Section -->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="contact-info col-md-offset-3 col-md-6">
              <h3 class="small text-uppercase">contact</h3>
              <h1 class="text-capitalize">get in touch</h1>
            </div>
            <div class="form-container col-md-offset-3 col-md-6">
              <form action="" id="smForm"><!-- Contact Form -->
                <div class="form-group">
                  <label for="name">name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required="required"></input>
                </div>
                <div class="form-group">
                  <label for="">email</label>
                  <input type="email" name="email" class="form-control" placeholder="Enter email" required="required"></input>
                </div>
                <div class="form-group">
                  <label for="message">message</label>
                  <textarea name="message" class="form-control" id="message" rows="3" placeholder="Enter message"></textarea>
                </div>
                <button class="btn btn-default text-uppercase">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <hr></hr>
      <!-- Footer -->
      <section id="footer">
        <footer class="container">
          <div class="row">
            <div class="social">
              <ul class="list-group">
                <li class="list-group-item"><a href=""><img src="" alt=""></a></li>
                <li class="list-group-item"><a href=""><img src="" alt=""></a></li>
                <li class="list-group-item"><a href=""><img src="" alt=""></a></li>
              </ul>
            </div>
            <div class="copyrights">&copy;Simon Media 2017</div>
          </div>
        </footer>
      </section>

      

      <!-- build:js scripts/main.min.js -->
      <script src="scripts/main.js"></script>
      <!-- endbuild -->

      <!-- Google Analytics -->
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-77337091-1', 'auto');
        ga('require', 'displayfeatures');
        ga('require', 'linkid');
        ga('send', 'pageview');
      </script>
    </div>
  </body>
</html>
