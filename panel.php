<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">
    <link href="./main.550dcf66.css" rel="stylesheet" />
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
            
            border-radius: 5px;
            background-color: #fcf8e3;
        }
    </style>
    <link href="" rel="stylesheet">


    <title>Title page</title>

    <link href="./main.550dcf66.css" rel="stylesheet">
</head>

<body>
    <!-- Add your content of header -->
    <header>
        <nav class="navbar navbar-default active">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./index.html" title="">
                        <img src="./assets/images/mashup-icon.svg" class="navbar-logo-img" alt=""> Mashup Template
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="./index.html" title="">Home</a></li>
                        <li>
                            <p>
                                <a href="./panel.php" class="btn btn-default navbar-btn" title=""><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                            </p>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="pre">
        <div class="wrapper">
            <h3 class="my-5">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b>. Aquest és el teu panell d'usuari.</h3>
            <p>
                <a href="reset_pswd.php" class="btn btn-warning">Canvia la contrasenya</a>
                <a href="logout.php" class="btn btn-danger ml-3">Sortir</a>
            </p>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navActivePage();
            scrollRevelation('.reveal');
        });
    </script>

    <script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>
