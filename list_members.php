<?php 
    session_start();

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=members_space;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) or die(print_r($bdd->errorInfo()));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $reponse = $bdd->query('SELECT * FROM users'); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Loris Member's</title>
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-User-List.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
        <div class="row user-list">
            <?php 
                while ($donnees = $reponse->fetch())
                {
                    $avatar_user = $donnees['id']."_".$donnees['pseudo'].".png"
                ?>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 user-item">
                        <div class="border rounded user-container">
                            <a class="user-avatar" href="#">
                                <img class="rounded-circle img-fluid" src="<?= ucfirst(htmlentities("uploads/$avatar_user")); ?>" width="48" height="48" alt="Profile of Mark Smith Peterson">
                            </a>
                            <p class="user-name">
                                <a href="#"><?php echo $donnees['pseudo']; ?></a>
                                <span><?php echo $donnees['email']; ?></span>
                            </p>
                        </div>
                    </div>
                <?php
                }
            ?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>