<?php
session_start();
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
    <style>
        progress {
            border-radius: 2px;
            width: 100%;
            height: 12px;
            position: fixed;
            top: 0;
        }

        progress::-webkit-progress-bar {
            background-color: rgba(0, 0, 0, 0.1);
            ;
        }

        progress::-webkit-progress-value {
            background-color: #fff;
        }

        .timer {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            text-align: center;
        }

        .clock {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 15rem;
            line-height: 1;
            display: flex;
            align-items: center;
            font-family: arial, sans-serif;
        }

        

        

        .main-button {
            cursor: pointer;
            box-shadow: rgb(235, 235, 235) 0px 6px 0px;
            font-size: 22px;
            height: 55px;
            text-transform: uppercase;
            color: hsl(175, 26%, 41%);
            font-weight: bold;
            width: 200px;
            background-color: white;
            border-width: initial;
            border-style: none;
            margin: 20px 0px 0px;
            padding: 0px 12px;
            border-radius: 4px;
            transition: color 0.5s ease-in-out 0s;
        }

        button:focus,
        button:active {
            outline: none;
        }

        .main-button.active {
            transform: translateY(6px);
            box-shadow: none;
            outline: none;
        }

        .hidden {
            display: none;
        }

        @media screen and (max-width: 550px) {
            .clock {
                font-size: 8rem;
            }
        }
    </style>

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
    <div class="cent">
        <main class="app">
            <progress id="js-progress" value="0"></progress>
            <div class="progress-bar"></div>
            <div class="timer">
                <div class="button-group mode-buttons" id="js-mode-buttons">
                    <button data-mode="pomodoro" class="button active mode-button" id="js-pomodoro">
                        Pomodoro
                    </button>
                    <button data-mode="shortBreak" class="button mode-button" id="js-short-break">
                        Descans curt
                    </button>
                    <button data-mode="longBreak" class="button mode-button" id="js-long-break">
                        Descans llarg
                    </button>
                </div>
                <div class="clock" id="js-clock">
                    <span id="js-minutes">25</span>
                    <span class="separator">:</span>
                    <span id="js-seconds">00</span>
                </div>
                <button class="main-button" data-action="start" id="js-btn">
                    PLAY
                </button>
            </div>
        </main>
    </div>
    <script type="text/javascript" src="mainpomo.js">
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