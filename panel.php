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
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font: 14px sans-serif;
            text-align: center;
        }

        .wrapper {
            width: 350px;
            padding: 20px;
            margin: 7% 35% 0 35%;
            border-radius: 5px;
            background-color: #fcf8e3;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <h3 class="my-5">Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>!</b>. Aquest és el teu panel d'usuari.</h3>
        <p>
            <a href="reset_pswd.php" class="btn btn-warning">Canvia la contrasenya</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sortir</a>
        </p>
    </div>

</body>

</html>