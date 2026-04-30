<?php
if(isset($_GET["cin"])){
    $cin = $_GET["cin"];
    $contenu = file_get_contents("stageaire.txt");
    $new = explode("\n", $contenu);
    $result = "";
    foreach ($new as  $value) { 
        if($cin != $new[5]){
            $result .= $value."\n";
        }else{
            unlink("images/trim({$new[7]})");
        }
        }
        file_put_contents("stageaire.txt", $result);
        header("location:donnée.php");
        exit();
        }
?>