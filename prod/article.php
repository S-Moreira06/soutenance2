<?php

include "produits.php";
session_start();

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = []; 
}

if (isset($_GET['ajouter'])){
    $id = $_GET['ajouter'];

    array_push($_SESSION['panier'], $_GET['ajouter']);
    
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ama.css">
</head>

<body>
<header>
<img id="lov" src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg"/>
</header><main>
    
    <br/><br/><br/>
    
    

    <?php if (isset($_GET['subject'])) {
        $choix =  $_GET['subject'];
        $product = $produits [$choix];
        $subtotal = $product ['price'];
        ?>
        
        <tr id="table">
            <td id="ov1">
            <?= $product["overview"]; ?>
            </td><br>
            <td>
            <img src="<?= $product["image"]; ?>"/>
            </td>
        </tr><br>
    <?php } 
    ?>
    <form action="panier.php" method="GET">
        <input type="hidden" name="ajouter" value="<?= $_GET['subject'];?>">

        <button type="submit">Ajouter au panier</button>
    </form>
    
    </main>
</body>
</html>