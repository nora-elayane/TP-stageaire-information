<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stageaire Ajout</title>
    <style>
      /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', sans-serif;
}

/* Background */
body {
    height: 100vh;
    background: linear-gradient(135deg, #667eea, #764ba2);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

/* Card */
form {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    padding: 30px;
    border-radius: 20px;
    width: 350px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.2);
    color: white;
}

/* Title */
h1 {
    text-align: center;
    /* margin-bottom: 10px; */
    color: white;
}

/* Labels */
label {
    font-size: 14px;
    display: block;
    margin-bottom: 5px;
}

/* Inputs */
input {
    width: 100%;
    padding: 10px;
    border-radius: 10px;
    border: none;
    outline: none;
    margin-bottom: 15px;
    background: rgba(255,255,255,0.2);
    color: white;
}

/* Placeholder */
input::placeholder {
    color: rgba(255,255,255,0.7);
}

/* Focus effect */
input:focus {
    background: rgba(255,255,255,0.3);
    transform: scale(1.02);
    transition: 0.2s;
}

/* File input */
input[type="file"] {
    background: none;
}

/* Button */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 12px;
    background: #ff7a18;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

/* Hover button */
button:hover {
    background: #ffb347;
    transform: translateY(-2px);
}
    </style>
</head>
<body>
    <h1>Ajouter un Stageaire</h1>
    <form action="donnée.php" method="POST" enctype="multipart/form-data">
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
    </form>
</body>
</html>