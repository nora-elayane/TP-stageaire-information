<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stageaire Ajout</title>
</head>
<body>
    <h1>Ajouter un Stageaire</h1>
    <form action="donnée.php" method="POST" enctype="multipart/form-data">
        <fieldset>
        <label for="nom">Nom : </label>
        <input type="text" placeholder="votre nom" required name="nom"> <br> <br>
        <label for="nom">Prenom : </label>
        <input type="text" placeholder="votre prenom" required name="prenom"><br><br>
        <label for="nom">Date de naissance : </label>
        <input type="date" placeholder="votre date de naissance" required name="date"> <br><br>
        <label for="nom">Ville: </label>
        <input type="text" placeholder="votre Ville" required name="ville"> <br><br>
        <label for="nom">CIN: </label>
        <input type="text" placeholder="votre CIN" required name="cin"> <br><br>
        <label for="nom">Telephone: </label>
        <input type="tel" placeholder="votre telephone" required name="tele"> <br><br>
        <label>Votre image : </label>
        <input type="file" name="img" id="img" required accept="image/*" >
        <button type="submit">Ajouter</button>
        </fieldset>
    </form>
</body>
</html>