<?php
    session_start();

    function ReturnInfo($msg)
    {
        echo '<script type="text/javascript">';
        echo " alert('$msg')";  //not showing an alert box.
        echo '</script>';
        ?>
            <?php include('login.php') ?>
        <?php
    }

    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=members_space;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)) or die(print_r($bdd->errorInfo()));
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    if (isset($_POST['email']) AND isset($_POST['password']))
    {
        if (strlen($_POST['email']) > 0 AND strlen($_POST['password']) > 0)
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $reponse = $bdd->prepare('SELECT pseudo, email, id, password, connect_auto FROM users WHERE email = :email'); 
            $reponse->execute(array(
                'email' => $email,
                ));
            $donnees = $reponse->fetch();

            if (!$donnees)
            {
                ReturnInfo("Votre email n'est pas enregistrer.");
            }
            else
            {
                $IsPasswordValid = password_verify($password, $donnees['password']);

                if ($IsPasswordValid)
                {
                    $_SESSION['email'] = $email;
                    $_SESSION['pseudo'] = $donnees['pseudo'];
                    $_SESSION['id'] = $donnees['id'];
                    $_SESSION['avatar'] = $donnees['id']."_".$donnees['pseudo'].".png";
                    $_SESSION['connect_auto'] = $donnees['connect_auto'];
                        
                    setcookie('pseudo', $_SESSION['pseudo'], time() + 365*24*3600, null, null, false, true);
                    setcookie('email', $email, time() + 365*24*3600, null, null, false, true);
                    setcookie('id', $donnees['id'], time() + 365*24*3600, null, null, false, true);
                    setcookie('avatar', $donnees['id']."_".$donnees['pseudo'].".png", time() + 365*24*3600, null, null, false, true);
                    setcookie('connect_auto', $donnees['connect_auto'], time() + 365*24*3600);


                    $req = $bdd->prepare('UPDATE users SET connect_auto = :connect_auto WHERE pseudo = :pseudo AND email = :email');
                    $req->execute(array(
                        'connect_auto' => isset($_POST['conect_auto']),
                        'pseudo' => $_SESSION['pseudo'],
                        'email' => $_SESSION['email']
                        ));

                    header('Location: account.php');
                }
                else
                {
                    ReturnInfo("Mauvais mot de passe.");
                }   
            }
        }
        else
        {
            ReturnInfo("Vous n\'avez pas reseigner toutes les informations.");
        }
    }
    else
    {
        ReturnInfo("Vous n\'avez pas reseigner toutes les informations.");
    }
?>