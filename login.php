<?php 
    if (isset($_COOKIE['email']) AND isset($_COOKIE['pseudo']) AND isset($_COOKIE['id']) AND isset($_COOKIE['avatar']) AND isset($_COOKIE['connect_auto']))
    {
        echo $_COOKIE['connect_auto'];
        if ($_COOKIE['connect_auto'] == 1)
        {
            $_SESSION['email'] = $_COOKIE['email'];
            $_SESSION['pseudo'] = $_COOKIE['pseudo'];
            $_SESSION['id'] = $_COOKIE['id'];
            $_SESSION['avatar'] = $_COOKIE['avatar'];
            $_SESSION['connect_auto'] = $_COOKIE['connect_auto'];
            
            // header('Location: account.php');
        }
        else 
        {
            ?> 
                <?php include('login_table.php') ?>
            <?php 
        }
    }
    else 
    {
        ?>
            <?php include('login_table.php') ?>
        <?php
    }
?>