<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Loris Member's</title>
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
        <div class="container"><a class="navbar-brand" href="index.php">Loris Member's</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="article_1.php">Article n°1</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="article_2.php">Article n°2</a></li>
                </ul>
                <?php
                    if (isset($_SESSION['pseudo']) AND isset($_SESSION['id']) AND isset($_SESSION['email']))
                    {
                        ?>
                        <span class="navbar-text actions"> 
                            <a class="btn btn-light action-button" role="button" style="background-color: rgb(205,62,88);" href="account.php">
                                Mon compte
                            </a>
                        </span>
                        <?php
                    }
                    else
                    {
                        ?>
                        <span class="navbar-text actions"> 
                            <a class="login" href="login.php">
                                Log In
                            </a>
                            <a class="btn btn-light action-button" role="button" href="register.php" style="background-color: rgb(205,62,88);">
                                Sign Up
                            </a>
                        </span>
                        <?php 
                    }
                ?>
            </div>
        </div>
    </nav>

    <?= require ("view/home/contentView.php")?>

    <?= require ("view/home/footerView.php")?>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>