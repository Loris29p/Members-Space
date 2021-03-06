<?php 
    session_start();
?>

<!DOCTYPE html>
            <html>

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title>Loris Member's</title>
                <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aclonica">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Adamina">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
                <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
                <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
                <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
                <link rel="stylesheet" href="assets/css/styles.css">
            </head>

            <body style="height: 433px;">
                <div class="login-clean" style="height: 599px;">
                    <form class="text-center bg-light border rounded shadow" method="post" style="width: 328px;height: 451px;" action="login_sql.php">
                        <h2 class="sr-only">Login Form</h2>
                        <div class="illustration" style="margin-top: -37px;">
                            <i class="icon ion-ios-navigate-outline"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Mot de passe">
                        </div>
                        <input type="checkbox" style="margin-left: -176px;" name='conect_auto[]' value="connect_auto">
                        <small class="form-text text-muted" style="margin-top: -23px;">Connexion automatique ?</small>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block border rounded shadow" type="submit">
                                Se connecter
                            </button>
                        </div>
                        <!-- <a class="forgot" href="#" style="width: 286px;margin-left: -17px;">Vous avez oubli?? votre mail ou votre mot de passe ?</a> -->
                    </form>
                </div>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            </body>

            </html>