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

    if (isset($_POST['password']) AND isset($_POST['email']) AND isset($_POST['pseudo']))
    {
        if (strlen($_POST['pseudo']) > 0 AND strlen($_POST['email']) > 0 AND strlen($_POST['password']) > 0)
        {
            $password = $_POST['password'];
            $pseudo = $_POST['pseudo'];
            $email = $_POST['email'];
            $_SESSION['email'] = $email;
            $_SESSION['pseudo'] = $pseudo;
            $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    
            $req = $bdd->prepare('INSERT INTO users(pseudo, password, email, date) VALUES(:pseudo, :password, :email, :date)');
            $req->execute(array(
                'pseudo' => $pseudo,
                'password' => $pass_hash,
                'email' => $email,
                'date' => date('l jS \of F Y h:i:s A'),
                ));
            
                header('Location: account.php');

            if (isset($_FILES['photo']))
            {
                $files = $_FILES['photo'];

                if ($files['error'] == 0 AND $files['size'] <= 6000000)
                {
                    $infosfichier = pathinfo($files['name']);
                    $extensions_upload = $infosfichier['extension'];
                    $extensions_autorisees = array("png", "jpg", "jpeg");

                    $reponse = $bdd->prepare('SELECT id, pseudo FROM users WHERE email = :email AND pseudo = :pseudo'); 
                    $reponse->execute(array(
                        'email' => $email,
                        'pseudo' => $pseudo,
                        ));
                    $donnees = $reponse->fetch();
        
                    if ($donnees) 
                    {
                        $_SESSION['id'] = $donnees['id'];
                        $_SESSION['avatar'] = $donnees['id'] . "_" . $donnees['pseudo'] . ".png";

                        if (in_array($extensions_upload, $extensions_autorisees)) 
                        {
                            $name_files = $donnees['id'] . "_" . $donnees['pseudo'] . ".png";
                            move_uploaded_file($files['tmp_name'], 'uploads/' . basename($name_files));
                        }
                    }
                    else
                    {
                        
                    }
                }
                else
                {
                    echo "L'image doit être inférieur à 1Mo.";
                }
            }
        }
        else
        {
            echo '<script type="text/javascript">';
            echo ' alert("Vous n\'avez pas reseigner toutes les informations.")';  //not showing an alert box.
            echo '</script>';
            ?>
                <?php include('register.php') ?>
            <?php
        }
    }
    else
    {
        echo '<script type="text/javascript">';
        echo ' alert("Vous n\'avez pas reseigner toutes les informations.")';  //not showing an alert box.
        echo '</script>';
        ?>
            <?php include('register.php') ?>
        <?php
    }
?>