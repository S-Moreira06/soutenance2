
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
    <link rel="stylesheet" href="pokelove.css">
</head>
<body>
   <header id="S">
       <img src="https://i.pinimg.com/originals/b1/36/c1/b136c15d14630cafa92c3dc35d53799d.jpg" alt="LOGO">
       <h1 id="title2">
        <p><i> POKELOVE </i><p>
    </h1>
    <ul class="lien3">
          <a id="lien" href="index.php" style="text-decoration:none">
              <li>Accueil</li>
          </a>
    </ul>
    <ul class="lien4">
           <a id="lien2" href="panier.php" style="text-decoration:none">
               <li>Panier</li>
           </a>
        </ul>
   </header>
   <main>
        <center><h1 id="pan">PANIER</h1></center>
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
            <img class="minipic" src="<?=$product['image']?>" alt="">
            </div>       
            
        
        <?php }
            

       echo '<center><b>Total : '.$total.'Euros</b></center><br>';           
        
    
    ?>
    </div>
    <a class="vider" href="reinit.php">
        <p>VIDER LE PANIER</p><br>
    </a>
   </main>
   <footer>
       &copy; Ilane, Pierre et Steph M.
   </footer>
    
</body>
</html>
