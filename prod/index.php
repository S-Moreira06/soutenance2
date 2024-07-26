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
    <link rel="stylesheet" href="indexPierre.css">
</head>
<header>
<img id=lov src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg" alt="LOGO">
    <h1 divclass="title">
        <p> POKELOVE <p>
    </h1>
</header>
<body><main>
    <ul>
        <?php for($i=0;$i<$nmbrarticle;$i++){ ?>
        <h2><?php  echo $produits[$i]["name"]."<br/>";?></h2>
        <?php echo $produits[$i]["image"]."<br/>";
            echo $produits [$i]["overview"]."<br/>";
            $id=$produits[$i]["id"];?>
        <a href="article.php?subject=<?php echo $id ?>"><button> <?php echo "Voir le produit"."<br/>";?> </button></a> <!--Mettre un bouton "voir le produit"-->
        <?php }
        ?> 
    </ul>
</main></body>
<footer>
    &copy; Ilane, Pierre et Steph M.
</footer>
</html> 