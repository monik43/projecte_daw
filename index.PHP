<?php
session_start();
require_once "configuracio.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta name="msapplication-tap-highlight" content="no" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="./assets/apple-icon-180x180.png"
    />
    <link href="./assets/favicon.ico" rel="icon" />
    <title>Pomodoro</title>
    <link href="./main.550dcf66.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Add your content of header -->
    <header>
      <nav class="navbar navbar-default active">
        <div class="container">
          <div class="navbar-header">
            <button
              type="button"
              class="navbar-toggle collapsed"
              data-toggle="collapse"
              data-target="#navbar-collapse"
              aria-expanded="false"
            >
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="./index.html" title="">
              <img src="./assets/icon.png" class="navbar-logo-img" alt="" />
              Pomodoro
            </a>
          </div>

          <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="./index.html" title="">Home</a></li>
              <li>
                <p>
                  <a
                    href="./login.php"
                    class="btn btn-default navbar-btn"
                    title=""
                    ><?php echo htmlspecialchars($_SESSION["username"]); ?></a
                  >
                </p>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Add your site or app content here -->
    <div
      class="
        hero-full-container
        background-image-container
        white-text-container
      "
    >
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>Ready 12</h1>
            <p>LA APLICACIÓ PER ESTUDIAR PER EXCELENCIA.</p>
            <br />
            <a href="./registre.php" class="btn btn-default btn-lg" title=""
              >Registra't</a
            >
          </div>
        </div>
      </div>
    </div>

    <div class="section-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-8 col-md-offset-2">
            <div class="text-center">
              <h2>Què és Ready 12?</h2>
              <p>
                Ready 12 és una aplicació web dissenyada per ajudar a la
                concentració en l'estudi.
              </p>
              <p>
                Et costa posar-te a estudiar? Amb la nostra aplicació
                aconseguiràs un hábit saludable d'estudi facilment.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="section-container">
      <div class="container text-center">
        <div class="row section-container-spacer">
          <div class="col-xs-12 col-md-12">
            <h2 class="text-center">Customers</h2>
            <p>
              Praesent at feugiat est, at faucibus ipsum. Aenean condimentum
              mauris vel malesuada pulvinar. <br />Vestibulum sit amet hendrerit
              leo, quis vehicula mi.
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <img
              src="./assets/images/logo-01.png"
              alt=""
              class="img-responsive reveal-content image-center"
            />
          </div>

          <div class="col-xs-12 col-md-4">
            <img
              src="./assets/images/logo-02.png"
              alt=""
              class="img-responsive reveal-content image-center"
            />
          </div>
          <div class="col-xs-12 col-md-4">
            <img
              src="./assets/images/logo-03.png"
              alt=""
              class="img-responsive reveal-content image-center"
            />
          </div>
        </div>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function (event) {
        navbarFixedTopAnimation();
      });
    </script>

    <footer class="footer-container white-text-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h3>Mountain</h3>

            <div class="row">
              <div class="col-xs-12 col-sm-7">
                <p>
                  <small
                    >Website created with
                    <a
                      href="http://www.mashup-template.com/"
                      title="Create website with free html template"
                      >Mashup Template</a
                    >/<a
                      href="https://www.unsplash.com/"
                      title="Beautiful Free Images"
                      >Unsplash</a
                    ></small
                  >
                </p>
              </div>
              <div class="col-xs-12 col-sm-5">
                <p class="text-right">
                  <a
                    href="https://facebook.com/"
                    class="social-round-icon white-round-icon fa-icon"
                    title=""
                  >
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a
                    href="https://twitter.com/"
                    class="social-round-icon white-round-icon fa-icon"
                    title=""
                  >
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/"
                    class="social-round-icon white-round-icon fa-icon"
                    title=""
                  >
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script>
      document.addEventListener("DOMContentLoaded", function (event) {
        navActivePage();
        scrollRevelation(".reveal");
      });
    </script>
    <script type="text/javascript" src="./main.0cf8b554.js"></script>
  </body>
</html>
