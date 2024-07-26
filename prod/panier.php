<?php 
include 'produits.php';
session_start();
$total = 0;

if (!isset($_SESSION['panier'])){
    $_SESSION['panier'] = array();
}

    if (isset($_GET['ajouter'])){
        $id = $_GET['ajouter'];
        
        array_push($_SESSION['panier'], $_GET['ajouter']);
        header ("Location: panier.php");
    }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styleSteph.css">
</head>
<body>
   <header>
       <img src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg" alt="LOGO">
       <ul>
          <a href="index.php">
              <li>Accueil</li>
          </a>
           <a href="panier.php">
               <li>Panier</li>
           </a>
       </ul>
   </header>
   <main>
        <h1>PANIER</h1>
        <div class="bloc">
    <?php 

        foreach ($_SESSION['panier'] as $productId ) {
            $product = $produits[$productId];
            $subtotal = $product['price'];
            $total = $total + $subtotal;
            ?>
            <div class="article">
                <tr>
                <td><?= $product['name'];?></td>
                <br>
                <td>Prix:<?=$subtotal ;?>€</td>
            </tr>
            <br>
            </div>       
            
        
        <?php }
            

       echo '<b>Total : '.$total.'Euros</b><br>';           
        
    
    ?>
    </div>
    <a class="vider" href="reinit.php">
        <p>VIDER LE PANIER</p>
    </a>
   </main>
   <footer>
       &copy; Ilane, Pierre et Steph M.
   </footer>
    
</body>
</html>