<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout de recette</title>
</head>
<body>
    <form action="traitement.php" method="post">
        Nom : <input type="text" name="nom" >
        Quantite : <input type="text" name="quant">
        Ingredients : <input type="text" name="ingred" >
        Etape : <input type="text" name="etape" >
        <input type="submit"name="envoyer" value="Envoyer">
    </form>
</body>
</html>