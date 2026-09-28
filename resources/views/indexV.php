<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>tp2</h2>
             <?php
            echo"<ul>";       
             foreach($lesProd as $uneligne) 
             echo "<li>".$uneligne->libellePdt . " " .$uneligne->prixPdt . " € => <span class='vert gras'>" . $uneligne->sacateg->libelleCat . "</span></li>";
             echo"</ul>";
             ?>
            </div>
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>