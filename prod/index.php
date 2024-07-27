<?php
include "produits.php";
$nmbrarticle=count($produits);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmazonBootleg</title>
    <link rel="stylesheet" href="pokelove.css">
</head>
<header>
<img id="lov" src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg"/>
    <h1 id="title">
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
<body><main>
    <ul>
        <?php for($i=0;$i<$nmbrarticle;$i++){ ?>
        <br><h2 class="nom"><?php  echo $produits[$i]["name"]."<br/>";?></h2><br>
        <center><img class="image1" src="<?= $produits[$i]["image"]; ?>"/></center></br>
           <?php echo "<p class='des1'>" . $produits [$i]["overview"]."</p><br/>";
            $id=$produits[$i]["id"];?>
        <center><a href="article.php?subject=<?php echo $id ?>"><button> <?php echo "Voir le produit"."<br/>";?> </button></a></br></br></center> <!--Mettre un bouton "voir le produit"-->
        <?php }
        ?> 
    </ul>
</main></body>
<footer>
    &copy; Ilane, Pierre et Steph M.
</footer>
</html> 