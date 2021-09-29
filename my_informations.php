<?php
    session_start();

    if (isset($_SESSION['email']) AND isset($_SESSION['pseudo']) AND isset($_SESSION['id']) AND isset($_SESSION['avatar']))
    {
        $email = $_SESSION['email'];
        $pseudo = $_SESSION['pseudo'];
        $avatar = $_SESSION['avatar'];

        ?>
            <!DOCTYPE html>
            <html>

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
                <title>Untitled</title>
                <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
                <link rel="stylesheet" href="assets/css/Features-Clean.css">
                <link rel="stylesheet" href="assets/css/styles.css">
                <title>Loris Member's</title>
                <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />
                <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
                <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
                <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
                <link rel="stylesheet" href="assets/css/styles.css">
            </head>

            <body>
                <nav class="navbar navbar-light navbar-expand-md navigation-clean">
                    <?php 
                        if (isset($_SESSION['avatar']))
                        {
                            $image_avatar = $_SESSION['avatar'];

                            ?>
                                <div>
                                    <img style="width: 50px; height: 50px; margin-left: 50px" src="<?= ucfirst(htmlentities("uploads/$image_avatar")); ?>"/>
                                </div>
                            <?php
                        }
                    ?>
                    <div class="container"><a class="navbar-brand" href="index.php">Loris Member's™<br></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="my_informations.php">Mes informations</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="list_members.php">Liste des membres</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                                <a class="btn btn-light action-button" role="button" href="deconnection.php" style="border-radius: 70px; background-color: rgb(205,62,88); color: aliceblue;">
                                    Se déconnecter
                                </a>
                            </ul>
                        </div>
                    </div>
                </nav>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
                <div class="features-clean">
                    <div class="container">
                        <div class="intro">
                            <h2 class="text-center">Mes informations</h2>
                        </div>
                        <div class="row features" style="margin-top: 203px;">
                            <div class="col-sm-6 col-lg-4 item"><i class="fa fa-map-marker icon"></i>
                                <h3 class="name" style="margin-left: 40px;">Pseudo</h3>
                                <p class="description"><?php echo $pseudo; ?></p>
                            </div>
                            <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                                <h3 class="name" style="font-size: 17px;">Avatar</h3>
                                <img class="description rounded-circle img-fluid" src="<?= ucfirst(htmlentities("uploads/$avatar")); ?>"></img>
                            </div>
                            <div class="col-sm-6 col-lg-4 item"><i class="fa fa-list-alt icon"></i>
                                <h3 class="name" style="margin-left: 65px;">Email</h3>
                                <p class="description"><?php echo $email; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="assets/js/jquery.min.js"></script>
                <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            </body>

            </html>
        <?php
    }
    else 
    {
        header('Localtion: account.php');
    }
?>