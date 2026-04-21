<?php
if(!isset($_POST["nom"] , $_POST["prenom"] , $_POST["date"] , $_POST["date"] , $_POST["ville"] , $_POST["cin"] , $_POST["tele"])){
    header("location:index.php") ;
}else{
    $dateAct = new DateTime() ; 
    $dateN = new DateTime($_POST["date"]) ;
    $age = $dateAct->diff($dateN);
    $age = $age->y ;
    $img = $_FILES["img"] ;
    $finfo = new finfo(FILEINFO_MIME_TYPE) ;
    // echo $img['temp_name'] ;
    $mime = $finfo->file($_FILES['img']['tmp_name']);
    $exten = ['image/jpeg', 'image/png', 'image/gif'] ;
    if(!in_array($mime , $exten)){
        header("location:index.php?msg=Extention invalid") ;
        exit();     
    }
    if($img['size'] > 2*1024*1024){
        header("location:index.php?msg=SIZE!!") ;
        exit();
    }
    $ext  = ['image/jpeg'=>'.jpg', 'image/png'=>'.png', 'image/gif'=>'.gif'];
    $nomImage = uniqid() . $ext[$mime] ;
    $dest = __DIR__ . DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR . $nomImage;
    move_uploaded_file($_FILES['img']['tmp_name'], $dest) ;
    $nomImage = "<img src='images/{$nomImage}' width='50px '>" ;
    $string = $_POST["nom"] . ";" . $_POST["prenom"] . ";" . $_POST["date"] .";" . $age . ";" . $_POST["ville"] . ";" . $_POST["cin"] . ";" . $_POST["tele"] . ";" . $nomImage . "\n" ;
    $fichier = fopen("stageaire.txt" , "a") ;
    file_put_contents("stageaire.txt" , $string , FILE_APPEND) ;
    fclose($fichier) ;
    $contenu = file_get_contents("stageaire.txt") ;
    // echo $contenu ; 
    $new = explode("\n" , $contenu);
    // print_r ($new) ;
    echo "<style>td{border : 1px black solid ; padding:5px ;}</style>" ;
    echo "<div class='container'>";
    echo "<h2>Liste des stagiaires</h2>";
    echo "<table style='border-collapse: collapse;'>
    <tr>
    <td>nom</td>
    <td>prenom</td>
    <td>date de naissance</td>
    <td>age</td>
    <td>ville</td>
    <td>cin</td>
    <td>tele</td>
    <td>image</td>
    </tr>" ; 
    foreach ($new as  $value) {
        echo "<tr>";
        $l =  explode(";" ,$value) ;
        foreach ($l as  $v) {
        echo "<td>{$v}</td>";
        }
        echo "</tr>" ;  
    }

}
echo "</table>" ; 
echo "</div>";
echo "
<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    color: white;
    text-align: center;
}

h2 {
    margin-top: 20px;
}

.container {
    width: 90%;
    margin: 30px auto;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 15px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background: rgba(255,255,255,0.05);
}

th, td {
    padding: 10px;
    text-align: center;
}

th {
    background: rgba(0,0,0,0.3);
}

tr:nth-child(even) {
    background: rgba(255,255,255,0.05);
}

tr:hover {
    background: rgba(255,255,255,0.15);
    transition: 0.2s;
}

img {
    border-radius: 8px;
    width: 50px;
    height: 50px;
    object-fit: cover;
}

a {
    display: inline-block;
    margin-top: 20px;
    text-decoration: none;
    background: #ff7a18;
    padding: 10px 20px;
    border-radius: 10px;
    color: white;
    transition: 0.3s;
}

a:hover {
    background: #ffb347;
}
</style>
";

echo "<a href='index.php' style='text-decoration:none; color:white; background-color:grey; padding:6px ; border-raduis:15px ;'>Ajouter un autre stageaire</a>" ;
?>