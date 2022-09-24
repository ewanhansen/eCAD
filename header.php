<?php
session_start(); //global session start(header is always loaded)
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>eCAD</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header>
            <img class="logo" src="img/logo.png" alt="logo">
            <nav>
                <ul class="nav-links">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="documentation.html">Support and Documentation</a></li>
                    <li><a href="index.php">Support</a></li>
                </ul>
            </nav>
            <nav class="button-holder">
            <?php 
            if(isset($_SESSION["useruid"]))
            {
                echo "<a class='cta' href='includes/logout.inc.php'><button>Logout</button></a>" ;
            }
            else
            {
                echo "<a class='cta' href='signup.php'><button>Register</button></a>" ;
                echo "<a class='cta' href='login.php'><button>Login</button></a>" ;
            }
            ?>
            </nav>
        </header>
    </body>
</html>

