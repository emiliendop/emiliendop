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

        $requet="SELECT * FROM `recette`";

        $Result= $connexion->query($requet);

    ?>

    <?php while($row=$Result->fetch_array(MYSQLI_ASSOC)):?>

        <p><a href="information.php?id_rec=<?=$row['id']?>&nom=<?=$row['nom']?>"><?php echo $row['nom']; ?></a></p>

    <?php endwhile?>

</body>

</html>