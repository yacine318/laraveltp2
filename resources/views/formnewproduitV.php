<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel='stylesheet' href="<?php echo url('/'); ?>/css/style.css" />
    </head>
    <body>
        <div id="pagewidth" >
            <div id="header"><h1>Laravel - mon application</h1></div>
            <div id="maincol"><h2>Tp1ter</h2>
<form action=ajoutersave method="POST">
<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>" />
<label>Libellé</label>
<input type="text" name="txtLib">
<label>Prix</label>
<input type="text" name="txtPrix">
<label>Stock</label>
<input type="text" name="txtStock">
<br> <br>
<label>Catégorie</label>
<select name="cboCat">
    <?php foreach($categ as $uneCategorie): ?>
        <option value="<?php echo $uneCategorie->idCat; ?>"><?php echo $uneCategorie->libelleCat; ?></option>
    <?php endforeach; ?>
</select>
<input type="submit" value = "valider">
</form>
 </div>
            <div id="leftcol"> <h2>Menu</h2>
                <ul>
                    <?php include('menuV.php'); ?>
                </ul>
            </div>
        </div>
    </body>
</html>

