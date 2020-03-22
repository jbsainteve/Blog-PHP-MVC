<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?= $title ?></title>
        <link href="public/css/blogMVC.css" rel="stylesheet" /> 
    </head>
        
    <body>
    	<?php
            echo "Sal's " . $_SESSION['surns']. " Num's " . $_SESSION['nums']. " dit ".$_SESSION['nom']."<br/>";
            echo "Sal's " . $_COOKIE['pseudo']. "<br/>";
        ?>

        <?= $content ?>
    </body>
</html>
