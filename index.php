<?php
$nom_article = "Article du Campus";
$prix_article = 29.99;
$url_photo = "https://www.adidas.fr/chaussure-campus-00s/JP6134.html"; 
$date_publication = "2025-05-20";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>abarticle</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    
   
     <div class="campus">
        <h1><?php echo $nom_article; ?></h1>
        <img src="imgarticle.jpg" alt="Photo de l'article">
        <p class="price">Prix : <?php echo number_format($prix_article, 2, ',', ' '); ?> €</p>
        <p class="date-publication">Publié le : <?php echo date('d/m/Y', strtotime($date_publication)); ?></p>
    </div>


</body>

</html>