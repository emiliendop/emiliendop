<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $connexion= new mysqli("localhost","root","","cuisine");
    $id_rec=$_GET['id_rec'];
    $nom=$_GET['nom'];
    ?>
    <p>ingrédian neccesaire pour la prepartion de <?php echo $nom ;?> : </p>
    <?php $requet="SELECT `nom`,`quantite`FROM `recette_ingredient`,`ingredient` where `recette_ingredient`.idIngredient=`ingredient`.id and `recette_ingredient`.idRecette='".$id_rec."'";
        $Result= $connexion->query($requet)
    ;?>
    <ul>
        <?php while($row=$Result->fetch_array(MYSQLI_ASSOC)):?>
            <li><?php echo $row['nom'].":".$row['quantite']; ?></li><br>
        <?php endwhile ?>
    </ul>
    <p>les etapes de la preparation sont:</p>
    <?php  $etape="SELECT `description` FROM `etape` WHERE `idRecette`='".$id_rec."'";
        $Resu= $connexion->query($etape);
    ?>
    <ol>
        <?php while($colom=$Resu->fetch_array(MYSQLI_ASSOC)):?>
            <li><?php echo $colom['description'];?></li><br>
        <?php endwhile?>
    </ol>
    <button><a href="acceuille.php">a l'acceuille</a></button>
</body>
</html>