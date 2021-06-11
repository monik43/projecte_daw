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
    <button type="button" onclick="setEstudi(1)">1 min</button>
    <button type="button" onclick="setEstudi(10)">10 min</button>
    <button type="button" onclick="setEstudi(15)">15 min</button>
    <button type="button" onclick="setEstudi(20)">20 min</button>
    <button type="button" onclick="setEstudi(25)">25 min</button>
    <button type="button" onclick="setEstudi(30)">30 min</button>
    <button type="button" onclick="setEstudi(35)">35 min</button>
    <button type="button" onclick="setEstudi(40)">40 min</button>
    <button type="button" onclick="setEstudi(45)">45 min</button>

    <h3>Min descans</h3>
    <button type="button" onclick="setEstudi(1)">1 min</button>
    <button type="button" onclick="setDescans(5)">5 min</button>
    <button type="button" onclick="setDescans(10)">10 min</button>
    <button type="button" onclick="setDescans(15)">15 min</button>
    <button type="button" onclick="setDescans(20)">20 min</button>


    <h3>Numero cicles</h3>
    <form>
        <input type="number" id="cicles" name="cicles" min="1" max="10">
    </form>

    <p id="countdown"></p>
    <p id="demo"></p>
    <button type="button" onclick="comPomo()">Començar</button>


    <script>
        var cicles_totals, min_estudi, min_descans, descans, tempsCount, now, tid;

        function comPomo() {
            now = new Date().getTime();
            cicles_totals = 2; //document.getElementById("cicles");

            descans = false;

            for (var i = cicles_totals; i > 0; i -= 1) {
                tempsCount = now;
                console.log("cicle nou" + now);
                
                if (descans) {
                    tempsCount += (min_descans * 60000);
                    console.log("tempscount descans " + tempsCount);
                } else {
                    tempsCount += (min_estudi * 60000);
                    console.log("tempscount estudi" + tempsCount);
                }

                var tid = setTimeout(segon, 1000);
                cicles_totals -= 1;
                console.log(cicles_totals)
            }
        }

        function segon(descans) {
            this_segon = new Date().getTime();

            distance = tempsCount - this_segon;

            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            if (seconds < 10) {
                document.getElementById("countdown").innerHTML = "// " + minutes + " : " + "0" + seconds + " \\";
            } else {
                document.getElementById("countdown").innerHTML = "// " + minutes + " : " + seconds + " \\";
            }
            console.log(minutes + ":" + seconds);
            if (minutes == 0 & seconds == 0) {
                descans = !descans
                console.log(descans)
            } else {
                tid = setTimeout(segon, 1000);
            }
        }

        function abortTimer() { // to be called when you want to stop the timer
            clearTimeout(tid);
        }

        function setEstudi(min) {
            min_estudi = min;
            console.log(min_estudi);
        }

        function setDescans(min) {
            min_descans = min;
            console.log(min_descans);
        }
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