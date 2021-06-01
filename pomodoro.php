<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page

require_once "configuracio.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">


    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">

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
                        <img src="./assets/icon.png" class="navbar-logo-img" alt="" />
                        Ready12
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
    

    <h3>Min estudi</h3>
    <button type="button" onclick="setMinEstudi(10)">10 min</button>
    <button type="button" onclick="setMinEstudi(15)">15 min</button>
    <button type="button" onclick="setMinEstudi(20)">20 min</button>
    <button type="button" onclick="setMinEstudi(25)">25 min</button>
    <button type="button" onclick="setMinEstudi(30)">30 min</button>
    <button type="button" onclick="setMinEstudi(35)">35 min</button>
    <button type="button" onclick="setMinEstudi(40)">40 min</button>
    <button type="button" onclick="setMinEstudi(45)">45 min</button>

    <h3>Min descans</h3>
    <button type="button" onclick="setMinDescans(5)">10 min</button>
    <button type="button" onclick="setMinDescans(10)">15 min</button>
    <button type="button" onclick="setMinDescans(15)">20 min</button>
    <button type="button" onclick="setMinDescans(20)">25 min</button>


    <p id="countdown"></p>

    <button type="button" onclick="setMinEstudi(25)">Començar</button>
    <script>

        function setMinEstudi(min){
            var compteEstudi= new Date(Date.getTime() + min * 60000);
        }

        function setMinDescans(min){
            var compteDescans = new Date(Date.getTime() + min * 60000);
        }

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("countdown").innerHTML = "// " + minutes + " : " + seconds + " \\";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            navActivePage();
            scrollRevelation('.reveal');
        });
    </script>

    <script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>

</html>