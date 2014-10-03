<?php
session_start();
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (!isset($_SESSION['pages'])) {        //la premiere fois qu'on vient de se connecte sur le site la variable de session prend accueil 
            $_SESSION['pages'] = 'accueil.php';
        }
        if (isset($_GET['pages'])) {
            $_SESSION['pages'] = $_GET['pages'];
        }
        //echo $_SESSION['nom'];
        if (file_exists('./pages/' . $_SESSION['pages'])) {
            include('./pages/' . $_SESSION['pages']);
        } else {
            print "Oups! Cette page n'existe pas!";
        }
        ?>
    </body>
</html>
