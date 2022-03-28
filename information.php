<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="information.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amatic+SC">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/w3.css">
<link rel="stylesheet" href="./CSS/css">
    <title>INFORMATION</title>
</head>
<body>
<div class="w3-top w3-hide-small" >
		<div class="w3-bar w3-xlarge w3-black w3-opacity w3-hover-opacity-off" id="myNavbar">
		  <a href="home.php" class="w3-bar-item w3-button"><i>Accueil</i></a>
		  <a href="recette.php" class="w3-bar-item w3-button"><i>Recettes</i></a>
		  <a href="#about" class="w3-bar-item w3-button"><i>A Propos</i></a>
		  <a href="#contact" class="w3-bar-item w3-button"><i>Contact</i></a>
		  <div style="float: right!important;">
			<a class="w3-bar-item "><i> SITE DE RECETTE</i></a>
		  </div>
		</div>
</div>
<div class="padding-32" >
    <?php $connexion= new mysqli("localhost","root","","cuisine");
    $id_rec=$_GET['id_rec'];
    $nom=$_GET['nom'];
    ?>
    <p><u> Ingrédients neccesaire pour la preparation de <?php echo $nom ;?> : </u></p>
    <?php $requet="SELECT `nom`,`quantite`FROM `recette_ingredient`,`ingredient` where `recette_ingredient`.idIngredient=`ingredient`.id and `recette_ingredient`.idRecette='".$id_rec."'";
        $Result= $connexion->query($requet)
    ;?>
    <ul>
        <?php while($row=$Result->fetch_array(MYSQLI_ASSOC)):?>
            <li ><?php echo $row['nom'].":".$row['quantite']; ?></li><br>
        <?php endwhile ?>
    </ul>
    <p><u>les etapes de la preparation sont:</u></p>
    <?php  $etape="SELECT `description` FROM `etape` WHERE `idRecette`='".$id_rec."'";
        $Resu= $connexion->query($etape);
    ?>
    <ol>
        <?php while($colom=$Resu->fetch_array(MYSQLI_ASSOC)):?>
            <li><?php echo $colom['description'];?></li><br>
        <?php endwhile?>
    </ol>
    <a href="home.php"   class="w3-bar-item w3-button red" >ACCUEIL</a>
    
</body>
</html>