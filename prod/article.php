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
    <link rel="stylesheet" href="pokelove.css">
</head>

<body>
<header>
<img id="lov" src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg"/>

<h1 id="title2">
        <p><i> POKELOVE </i><p>
    </h1>
    <ul class="lien">
          <a id="lien" href="index.php" style="text-decoration:none">
              <li>Accueil</li>
          </a>
    </ul>
    <ul class="lien2">
           <a id="lien2" href="panier.php" style="text-decoration:none">
               <li>Panier</li>
           </a>
        </ul>
</header>
<main>
    
    <br/><br/><br/>
    
    

    <?php if (isset($_GET['subject'])) {
        $choix =  $_GET['subject'];
        $product = $produits [$choix];
        $subtotal = $product ['price'];
        ?>
        
        <tr id="table">
            <td id="ov1">
            <?= "<p class='des'>" . $product["overview"] . "</p>" ; ?>
            </td><br>
            <td>
            <img class="image2" src="<?= $product["image"]; ?>"/>
            </td>
        </tr><br>
    <?php } 
    ?>
    <form id="btn" action="panier.php" method="GET">
        <input type="hidden" name="ajouter" value="<?= $_GET['subject'];?>">

        <button type="submit">Ajouter au panier</button>
    </form>
    
    </main>
    <footer>
       &copy; Ilane, Pierre et Steph M.
   </footer>

</body>
</html>